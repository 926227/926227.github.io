<?php
//Переменные устанавливают специальные классы Bootstrap в форме загрузки, которые маркируют поля с неуспешной валидацией.
$valid_file_description = '';
$valid_file_name = '';

// echo "pppppppppppppppppppppppp";
// exit;
// Переменная передает сообщение о неправильной валидации в форму загрузки файла
$valid_file_name_meessage = '';


//Функция (вспомогательняа) проверяет длину описания загружаемого файла
function check_file_descr($str)
{
  if (strlen($str) < 10) {
    return 'is-invalid';
  } else {
    return 'is-valid';
  }

}

function check_file ($msg) {
    global $valid_file_name_meessage;
    if ( $msg!= UPLOAD_ERR_OK){
            switch($_FILES["file_name"]["error"]){
            case UPLOAD_ERR_INI_SIZE:
            $valid_file_name_meessage = "Превышен максимально допустимый размер"; break;
            case UPLOAD_ERR_FORM_SIZE:
            $valid_file_name_meessage =  "Превышено значение MAX_FILE_SIZE"; break;
            case UPLOAD_ERR_PARTIAL:
            $valid_file_name_meessage =  "Файл загружен частично"; break;
            case UPLOAD_ERR_NO_FILE:
            $valid_file_name_meessage =  "Файл не был загружен"; break;
            case UPLOAD_ERR_NO_TMP_DIR:
            $valid_file_name_meessage =  "Отсутствует временная папка"; break;
            case UPLOAD_ERR_CANT_WRITE:
            $valid_file_name_meessage =  "Не удалось записать файл не диск"; break;
            default:
            $valid_file_name_meessage =  "Неизвестная ошибка загрузки файла!";
            } 
        return 'is-invalid';
    }else{
        return 'is-valid';
    }

}

$valid_file_description = check_file_descr($_POST['file_description']);
$valid_file_name = check_file ($_FILES["new_file_name"]["error"]);

if ($valid_file_name == 'is-valid' and $valid_file_description == 'is-valid') {
    $file_name = $_FILES["new_file_name"]["name"];
    $tmp_file_name = $_FILES["new_file_name"]["tmp_name"];
    $file_description = $_POST['file_description'];
    $category_id = $_POST['category_id'];
    
    // error_reporting(0);
    $file_save_result = $files->saveFile($file_name, $tmp_file_name, $file_description, $category_id);
    // error_reporting(E_ALL);

    if ($file_save_result == 1) {
        $contentHeader = 'Файл успешно загружен.';
        $valid_file_description = '';
        $valid_file_name = '';
        // echo "pppppppppppppppppppppppp";
        header ("Refresh: 2; {$_SERVER["REQUEST_URI"]}");
    } elseif ($file_save_result == 19) {
        $contentHeader = 'Ошибка! Файл с таким именем существует. Повторите загрузку.';
    }

}
