<?php
// <!-- Вывод информации о всех файлах в таблицу -->
$file_list = $files->getFiles();

// Функция отрисовки таблицы с информацией о файлах
function putInTable($file_list, $file_upload_path)
{
    foreach ($file_list as $category => $value) {
        echo "<tr><td colspan='3'> <b>$category</b></td></tr>";
        foreach ($file_list[$category] as $v) {

            echo "<tr>";
            echo "<td>{$v['file_name']}</td>";
            echo "<td><a href='$file_upload_path{$v['file_name']}' >{$v['file_description']}</a> $p1</td>";
            echo "<td><a href='{$_SERVER['REQUEST_URI']}&id_del_file={$v['id']}'>Удалить</a></td>";
            echo "</tr>";
        }
    }
}
?>

<table>
    <tr>
        <th>Название файла</th>
        <th>Описание файла</th>
        <th>Действие</th>
    </tr>
    <?putInTable ($file_list, FileDB::FILE_UPLOAD_PATH)?>

</table>