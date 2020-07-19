<?php
// <!-- Удаление файла с сервера и информации о нем из БД -->

$id_del_file = $_GET['id_del_file'];
$files->deleteFile ($id_del_file);
header ("Location: {$_SERVER['PHP_SELF']}?id=filelist");
