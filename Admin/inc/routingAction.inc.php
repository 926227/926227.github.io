<?
// Роутер реакций на POST GET запросы

if ($_SERVER["REQUEST_METHOD"]=="POST"){
      if (isset($_POST['new_category_name'])){
        include "inc/categorySave.inc.php"; //Обработка добавления новой категории файлов
      }
      if (isset($_FILES['new_file_name'])) {
        include "inc/fileSave.inc.php";
      } //Обработка загрузки файла из формы
      if (isset($_POST['new_login'])) {
        include "inc/userCreate.inc.php"; 
      }
}

  
if ($_SERVER["REQUEST_METHOD"]=="GET" and isset($_GET['id_del_file'])){
require "inc/fileDelete.inc.php"; 
}

if ($_SERVER["REQUEST_METHOD"]=="GET" and isset($_GET['id_del_category'])){
  require "inc/categoryDelete.inc.php"; 
  }

if ($_SERVER["REQUEST_METHOD"]=="GET" and $_GET['id']=='logout'){
  require "inc/logout.inc.php"; 
  }

?>

