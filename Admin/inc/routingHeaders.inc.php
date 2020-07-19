<?php
// Выбор нужного заголовка для отображения в секции main

$id = strtolower(strip_tags(trim($_GET['id'])));
switch ($id){
    case 'filelist': $contentHeader = 'Просмотр списка файлов'; break;
    case 'fileadd': $contentHeader = 'Добавление файла'; break;
    case 'categoryadd': $contentHeader = 'Категории файлов'; break;
    default: $contentHeader = 'Добро пожаловать!';
}