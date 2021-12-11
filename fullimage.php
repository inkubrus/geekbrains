<?php
require "conf.php";
$sql = "SELECT `adress_small` FROM foto;";
$res = mysqli_query($connect, $sql);
$path = mysqli_fetch_assoc($res);
$update_sql = "UPDATE `foto` SET `count` = `count` + 1 WHERE `name`='{$_GET['img']}'";
$update_count = mysqli_query($connect, $update_sql);
$select = "SELECT `count` FROM `foto` WHERE `name` = '{$_GET['img']}';";
$select_count = mysqli_query($connect, $select);
$select_result=mysqli_fetch_assoc($select_count);
?>
    <a href="<?= $_SERVER['HTTP_REFERER'] ?>"><p style="font-size: 20px;">НА ГЛАВНУЮ</p></a>
    <img src="<?=$path['adress_small']?>/<?=$_GET['img'] ?>" alt="">
<?php
Echo ".<br>Количество просмотров этой страницы {$select_result['count']}";



