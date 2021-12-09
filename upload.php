<?php
include('classSimpleImage.php');
$path_small = "small/{$_FILES['photo']['name']}";
$path_big = "big/{$_FILES['photo']['name']}";
if(move_uploaded_file($_FILES['photo']['tmp_name'], $path_big)) {
    echo "Файл {$_FILES['photo']['name']} был успешно сохранен в директорию с большими файлами!.<br>";
}
if( !copy($path_big, $path_small) ) {
    echo "Файл {$_FILES['photo']['name']} не был сохранен в директорию с маленькими файлами! ПРОИЗОШЛА ОШИБКА!";
}
else {
    echo "Файл {$_FILES['photo']['name']} был успешно сохранен в директорию с маленькими файлами!";
}
$image = new SimpleImage();
$image->load($path_small);
$image->resize(150, 150);
$image->save($path_small);
?>

<a href="<?= $_SERVER['HTTP_REFERER'] ?>"><p style="font-size: 20px;">НА ГЛАВНУЮ</p></a>