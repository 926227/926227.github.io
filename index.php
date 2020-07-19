<?php
require_once "admin/inc/FileDB.class.php";
$file = new FileDB('admin/inc/stroykachestvorf.db');
$file_list = $file->getFiles();
// echo "<pre>";
// print_r($file_list);
// echo "</pre>";

?>


<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.min.css">
    <title>СтройКачествоРФ</title>
  </head>
  <body>
    <header id="id_main">
        <nav>
            <div class="container">
                <ul class="menu">
                    <li class="menu_item"><a href="#id_main" class="menu_link">Главная</a></li>
                    <li class="menu_item"><a href="#id_about" class="menu_link">О Системе</a></li>
                    <li class="menu_item"><a href="#id_object" class="menu_link">Объекты сертификации</a></li>
                    <li class="menu_item"><a href="#id_structure" class="menu_link">Организационная структура</a></li>
                    <li class="menu_item"><a href="#id_enter" class="menu_link">Допуск в систему</a></li>
                    <li class="menu_item"><a href="#id_contacts" class="menu_link">Контакты</a></li>
                </ul>
            </div>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
        <div class="subheader">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-sm-2">
                        <a href="#id_about"><img class="subheader_logo" src="icons/logo.png" alt="logo"></a>
                    </div>
                    <div class="col my-auto">
                        <div class="subheader_logo_text">СтройКачествоРФ</div>
                    </div>
                    <div class="col my-auto">
                        <div class="subheader_call xs-hidden">Звоните нам</div>
                        <a href="tel:84951570561" class="subheader_phone xs-visible">8 495 157 05 61</a>
                    </div>
                </div>
            </div>
        </div> 
    </header>

    <section class="promo">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="promo_header">СИСТЕМА ДОБРОВОЛЬНОЙ СЕРТИФИКАЦИИ <br> В СТРОИТЕЛЬСТВЕ <br> РОССИЙСКОЙ ФЕДЕРАЦИИ 
                        <br><br>
                        <span class="promo_main_name">"СтройКачествоРФ"</span>
                    </h1>
                </div>
            </div>
        </div>

    </section>

    <section class="about" id="id_about">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-xl-4">
                    <h2 class="title">О Системе</h2>
                    <p>СДС «СтройКачествоРФ» - специализированная система добровольной сертификации в строительстве. Зарегистрирована в Росстандарте: Рег.№ РОСС RU.З2241.04КЧР0 от 14.05.2020 г.)</p>
                    <p>Обеспечивает независимую и квалифицированную оценку соответствия продукции, работам и услугам, системам менеджмента, процессам BIM-проектирования, персоналу в отрасли строительства, а также оценку соответствия экспертов по сертификации требованиям компетентности, установленным в Системе.</p>
                    <p>Учредитель системы – Акционерное общество «Центр методологии нормирования и стандартизации в строительстве» (Москва).</p>

                </div>
                <div class="col-xl-8 my-auto" >
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active" data-interval="8000">
                              <img src="img/view2 (0).jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item" data-interval="4000">
                            <img src="img/view2 (1).jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item" data-interval="4000">
                            <img src="img/view2 (2).jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item" data-interval="4000">
                            <img src="img/view2 (3).jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item" data-interval="4000">
                            <img src="img/view2 (4).jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item" data-interval="4000">
                            <img src="img/view2 (5).jpg" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item" data-interval="4000">
                            <img src="img/view2 (6).jpg" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <div class="about_garantee">Сертификаты СтройКачествоРФ - подтвержденные гарантии</div>
                      </div>
                 </div>
            </div>
        </div>
    </section>

    <div class="container" id="id_object">
        <hr>
    </div>

    <section class="object" >
        <div class="container">
            <h2 class="title">Объекты сертификации</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="object_block">
                        <div class="object_round"> <!-- Видимость круга отключен через альфа канал в свойствах css. После включения можно использовать прозрачные  картинки на круглом фоне. -->
                            <img src="icons/view2 (6).gif" alt="object">
                        </div>
                        <div class="object_descr">
                            <h3 class="object_subtitle">Продукция в строительстве</h3>
                            <div class="object_text">
                                Продукция, используемая для целей строительства: строительные материалы, изделия и конструкции, инженерное оборудование и системы зданий и сооружений отечественного и импортного производства.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="object_block">
                        <div class="object_round">
                            <img src="icons/view2 (2).gif" alt="object">
                        </div>
                        <div class="object_descr">
                            <h3 class="object_subtitle">Работы, процессы и услуги</h3>
                            <div class="object_text">
                                Работы, процессы и услуги в области инженерных изысканий, архитектуры и инженерно-технического проектирования, строительства зданий и сооружений, производства строительных материалов, изделий и конструкций.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="object_block">
                        <div class="object_round">
                            <img src="icons/view2 (1).gif" alt="object">
                        </div>
                        <div class="object_descr">
                            <h3 class="object_subtitle">Системы менеджмента</h3>
                            <div class="object_text">
                                Системы менеджмента: качества (СМК), экологического менеджмента (СЭМ), безопасности труда и охраны здоровья (СМ БТ и ОЗ), охраной труда (СУОТ), бережливого производства (СМБП).
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="object_block">
                        <div class="object_round">
                            <img src="icons/view2 (0).gif" alt="object">
                        </div>
                        <div class="object_descr">
                            <h3 class="object_subtitle">Процессы BIM-проектирования</h3>
                            <div class="object_text">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="object_block">
                        <div class="object_round">
                            <img src="icons/view2 (7).gif" alt="object">
                        </div>
                        <div class="object_descr">
                            <h3 class="object_subtitle">Персонал</h3>
                            <div class="object_text">
                                Персонал: аудиторы первой и второй стороны систем менеджмента качества (СМК), систем экологического менеджмента (СЭМ), систем менеджмента безопасности труда и охраны здоровья (СМ БТ и ОЗ), систем управления охраной труда (СУОТ); систем менеджмента бережливого производства (СМБП), руководители группы аудита первой и второй стороны системы менеджмента.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="object_block">
                        <div class="object_round">
                            <img src="icons/view2 (5).gif" alt="object">
                        </div>
                        <div class="object_descr">
                            <h3 class="object_subtitle">Эксперты</h3>
                            <div class="object_text">
                                Эксперты Системы по сертификации: продукции (по подтверждению соответствия строительных материалов, изделий и конструкций); работ и услуг; систем менеджмента качества (СМК), систем экологического менеджмента (СЭМ), систем менеджмента безопасности труда и охраны здоровья (СМ ОТиТБ); систем управления охраной труда (СУОТ); систем менеджмента бережливого производства (СМБП), процессов BIM-проектирования.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container" id="id_structure">
        <hr>
    </div>

    <section class="structure">
        <div class="container">
            <h2 class="title">Организационная структура</h2>
            <div class="row">
                <div class="col">
                    <img src="img/org_structure.png" alt="">
                </div>
            </div>
        </div>

    </section>
   
    <div class="container" id="id_enter">
        <hr>
    </div>
   
    <section class="enter">
        <div class="container">
            <h2 class="title"><a href='admin/'>Допуск в систему</a></h2>
            <div class="row">
                <div class="col">
                    <p>Допуск в систему органов по сертификации, испытательных лабораторий, учебных центров и экспертов осуществляется в соответствии с Правилами функционирования системы и регулируются соответствующими Положениями и распорядительными документами системы.</p>
                    <br>
                    
                </div>
            </div>
            <!-- Загрузка скрипта по выводу имующихся файлов -->
            <?include 'admin/inc/filesShow.inc.php'?>
            
        </div>

    </section>
    <div class="container" id="id_contacts">
        <hr>
    </div>

    <section class="contacts">
        <div class="container">
            <h2 class="title">Контакты</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="contacts_text">
                        <p>
                        Центральный орган СДС «СтройКачествоРФ» <br>
                        Адрес: 125057, г. Москва, Ленинградский проспект, д.63, 8 этаж <br>
                        Телефон: 8 (499) 157-05-61 (доб….) <br>
                        E-mail: info@stroykachestvorf.ru <br>
                        </p>
    
                    </div>
                </div>
                <div class="col my-auto">
                    <div class="map_wrap">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0272067e18a4ad174220dbf613b8ef5eb467235e666107780a407fd211e6df14&amp;width=100%25&amp;height=438&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                </div>
            </div>
        </div>
    </section>   
   
    </section>
    <div class="container">
        <hr>
    </div>

   <section class="back">
       <div class="container">
           <div class="row">
               <div class="col">
                   <a class="back_text" href="#id_main">Вернуться на Главную</a>
               </div>
           </div>
       </div>
   </section>
   
 



   <script src="js/script.js"></script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>