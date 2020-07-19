<?php
// <!-- Выводит информацию о всех файлах на главную страницу. Группирует по категориям. -->

// Функция отрисовки на главной пользовательской странице информации о файлах, с пиктограммами. Раскидывает по Бутстраповским колонкам.
function putInColumn($file_list, $file_upload_path)
{
    foreach ($file_list as $category => $value) {
        echo "<h3 class='enter_subtitle'>$category</h3>";
        echo "<div class='row'>";
        foreach ($file_list[$category] as $v) {
            echo "<div class='col-md-6'>";
            echo "<a class='enter_block' href='$file_upload_path{$v['file_name']}'>";
            echo "<div class='enter_icon'>
                            <img src='icons/file_download.gif' alt=''>
                        </div>
                        <div class='enter_descr'>
                        {$v['file_description']}
                        </div>
                    </a>
                </div>";
        }
        echo "</div>";
        echo "<br><br>";
    }
}
putInColumn($file_list, 'upload/')
?>
