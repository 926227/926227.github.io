<?php
// Класс для работы с файлами и категориями:загрузка на сервер, запись информации о файле в БД, выборка информации из БД
class FileDB {
    const DB_NAME = "inc/stroykachestvorf.db"; //Имя файла для хранения БД
    const FILE_UPLOAD_PATH ="../upload/";//Путь загрузки файлов 
	private $_db = null; //Свойство для хранения БД

	// Доступ к закрытым свойствам для наследников
	function __get ($name){
        if ($name == "_db")
            return $this->_db;
        throw new Exception ("Uninown property");
	}

	function __construct ($db_path=self::DB_NAME){
        $this->_db = new SQLite3($db_path);
        // Если не существует базы данных, создаем ее.
        // if (filesize(self::DB_NAME)==0) {
        //     try{
        //     $sql = "CREATE TABLE file_store(
        //         id INTEGER PRIMARY KEY AUTOINCREMENT,
        //         file_name CHAR,
        //         file_description TEXT,
        //         category_id INTEGER,
        //         date_of_attach INTEGER
        //         )";
        //     if (!$this->_db->exec($sql))  {throw new Exception($this->_db->lastErrorMsg());}
        //     $sql = "CREATE TABLE category(
        //             id INTEGER,
        //             category_name TEXT
        //             )";
        //     if (!$this->_db->exec($sql)) {throw new Exception($this->_db->lastErrorMsg());}
        //     // Добавляем две категории на всякий случай. Потом их можно удалять.
        //     $sql = "INSERT INTO category(id, category_name)
        //         SELECT 1 as id, 'Категория 1' as category_name
        //         UNION SELECT 2 as id, 'Категория 2' as category_name";
        //     if (!$this->_db->exec($sql)) {throw new Exception($this->_db->lastErrorMsg());}
        //     } catch (Exception $e){
        //       $e->getMessage();
        //       echo "Ошибка!";
        //     }
        // }
    }

	function __destruct (){
		unset($this->_db);
    }
    
    // метод сохранения: 1)Информации о файле в БД 2)Файла на сервер
    function saveFile($file_name, $tmp_file_name, $file_description, $category_id){
        // Очистка полученных данных от мусора
        $file_name = basename ($file_name);
        $file_name = $this->clearStr($file_name);
        $file_description = $this->clearStr($file_description);
        $category_id = $this->clearInt($category_id);
        
        // Устанавливаем метку времени загрузки файла
        $dt = time();
        // Формируем и исполняем запрос в БД    
        $sql = "INSERT INTO file_store(file_name, file_description, category_id, date_of_attach) VALUES ('$file_name', '$file_description', '$category_id', '$dt')";
        try {
            if (!$this->_db->exec($sql)) {throw new Exception($this->_db->lastErrorCode());}
            
        } catch (Exception $e) {
            return $e->getMessage();
        }
        //Сохраняем файл на сервер
        move_uploaded_file($tmp_file_name, self::FILE_UPLOAD_PATH.$file_name);
        return '1';
    }

    // Метод сохранения новой категории в БД
    function saveCategory ($new_category_name){
        $new_category_name = $this->clearStr($new_category_name);
        $sql = 'INSERT INTO category(category_name) VALUES (:new_item)';
        $stmt = $this->_db->prepare($sql);
        $stmt->bindParam(':new_item', $new_category_name);
        $result = $stmt->execute();
        $stmt->close();
    }
    
    // Метод перевода ответа БД в форму массива. С группировкой по категориям.
    private function db2Arr_files ($data){
        $arr = [];
        while ($row = $data->fetchArray(SQLITE3_ASSOC)) {
            $arr[$row['category_name']][] = $row;
        }
        return $arr;
    }

    // Метод перевода ответа БД в форму массива.
    private function db2Arr_category ($data){
        $arr = [];
        while ($row = $data->fetchArray(SQLITE3_ASSOC)) {
            $arr[] = $row;
        }
        return $arr;
    }

    //Метод получения информации о файлах из БД
    function getFiles(){
        //TODO Не учтен случай, когда категория удалена, а файлы с ее id остались. Предлагается выводить такие файлы о общей для всех таких зписей категогорией "Разное". Такие файлы остаеются на серевре, но не отображадтся в выводе на экран.
        $sql = "SELECT * FROM category LEFT JOIN file_store ON file_store.category_id=category.id ORDER BY file_store.category_id" ;
        $res = $this->_db->query($sql);
        $row = $res->fetchArray(SQLITE3_ASSOC);
        if (!$res) return false;
        return $this->db2Arr_files($res);
    }

    // Метод получения информации из БД о категориях файлов
    function getCategories(){
        $sql = "SELECT id, category_name FROM category";
        $res = $this->_db->query($sql);
        if (!$res) return false;
        return $this->db2Arr_category($res);
    }

    // Метод удаления файла из БД и сервера
    function deleteFile($id){
        $id=$this->clearInt($id);
        // Удаление файла сервера. Имя берем из базы по id.
        $sql="SELECT file_name FROM file_store WHERE id =:id";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $result = $stmt->execute();
        $result = $result->fetchArray(SQLITE3_ASSOC);
        $result = self::FILE_UPLOAD_PATH.$result['file_name'];
        if (file_exists($result)) unlink($result);

        //Удаляем из БД запись о файле.
        $sql = "DELETE FROM file_store WHERE id = :id";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $result = $stmt->execute();
        $stmt->close();

    }

    // Метод удаления категории файлов из БД
    function deleteCategory ($id){
        $id=$this->clearInt($id);
        $sql = "DELETE FROM category WHERE id = :id";
        $stmt = $this->_db->prepare($sql);
        $stmt->bindParam(':id', $id);
        $result = $stmt->execute();
        $stmt->close();
    }

    // Метод очистки строки от лишних символов
    function clearStr ($data){
        $data = strip_tags($data);
        return $this->_db->escapeString($data);
    }

    // Метод очистки числа от лишних символов
    function clearInt ($data){
        return abs((int)$data);
    }

}
