<?php
?>
<form class="file_load" method="POST" action="<?= $_SERVER['REQUEST_URI']?>" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="file_description">Описание файла (для отображения на сайте)</label>
        <textarea class="form-control ntSaveForms <?= $valid_file_description?>"
        id="file_description" name="file_description" placeholder="Введите текст" required></textarea>
        <div class="invalid-feedback">
        Пожалуйста введите текст описания файла длиной более 10 символов.
        </div>
    </div>
                                                
    <div class="mb-3">
        <div class="input-group">
        <div class="input-group-prepend">
            <label class="input-group-text" for="categorySelect">Категория:</label>
        </div>
        <select class="custom-select" id="categorySelect" name ='category_id' required> 
            <option value="">Выбирите категорию файла</option>
            <!-- <option value="1">1111111111</option> -->

            <!-- Загрузка значений категорий в опции -->
            <?include 'inc/categoryGetToList.inc.php'?>

        </select>
        </div>
        <div class="invalid-feedback">
        Не выбрана категория файла
        </div>
    </div>
    
    <div class="custom-file mb-3">
        <input type="hidden" name="MAX_FILE_SIZE" value="400000000" />
        <input type="file" class="custom-file-input <?=$valid_file_name?> " id="validatedCustomFile" name="new_file_name" required> 
        <label class="custom-file-label" for="validatedCustomFile" data-browse="Обзор...">Выбирите файл...</label>
        <div class="invalid-feedback"><?=$valid_file_name_meessage?></div>
        </div>
    
    <button class="btn btn-primary ntSaveFormsSubmit" type="submit">Отправить</button>
</form>

<!-- <form enctype="multipart/form-data" method="POST" action="" >
<input type="hidden" name="MAX_FILE_SIZE" value="1114096" />
<input name="userfile" type="file" />
<input type="submit" />
</form> -->


<!-- Скрипт помещает имя загружаемого файла в контейнер поля вместо текста по умолчанию. Стандартно, Bootstrap этого для своей формы не деляет. -->
<script>
    document.querySelector('.custom-file-input').addEventListener('change',function(e){
      var fileName = document.getElementById("validatedCustomFile").files[0].name;
      var nextSibling = e.target.nextElementSibling
      nextSibling.innerText = fileName
    })
</script>
