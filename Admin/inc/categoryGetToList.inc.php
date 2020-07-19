<?php
// Добавление  названий категорий из БД в меню загрузки файла
$categories = $files->getCategories();
foreach ($categories as $category){
    echo "<option value={$category['id']}>{$category['category_name']}</option>";
}
?>