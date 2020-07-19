<?
require_once 'inc/session.inc.php';
require_once 'inc/FileDB.class.php';
require_once 'inc/Users.class.php';
$files=new FileDB;
$user=new Users;

include 'inc/routingHeaders.inc.php';
include 'inc/routingAction.inc.php';


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/admin.min.css">
    <title>Панель администратора</title>
  </head>

  <body>
  <div class="container-fluid">
    <header class="row subheader">
      <div class="col-lg-1 col-sm-2">
          <a href="/index.php"><img class="subheader_logo" src="/icons/logo.png" alt="logo"></a>
      </div>
      <div class="col my-auto">
          <div class="subheader_logo_text">СтройКачествоРФ <h1>Панель администратора</h1></div>
      </div>
    </header>

    <div class="row">
      <nav class="nav flex-column col-lg-3 col-sm-4 bg-info pt-4 pl-3">
      <a class="nav-link text-white border-bottom" href="admin.index.php?id=filelist">Просмотр списка файлов</a>
      <a class="nav-link text-white border-bottom" href="admin.index.php?id=fileadd">Добавление файла</a>
      <a class="nav-link text-white border-bottom" href="admin.index.php?id=categoryadd">Категории файлов</a>
      <a class="nav-link text-white" href="admin.index.php?id=logout">Выход</a>

      </nav>

      <main class="col">
        <h2><?=$contentHeader?></h2>
        <? include 'inc/routingContent.inc.php' ?>

      </main>
    </div>
        
  </div>



  </div>
  
  


   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>