<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalog-Z Bootstrap 5.0 HTML Template</title>
    <style>
    </style>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/templatemo-style.css">
</head>

<body>
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <i class="fas fa-film mr-2"></i>
            <center>Фотогалерея для будущего интернет магазина</center>
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        </div>
    </div>
</nav>


<form action="upload.php" method="post" enctype="multipart/form-data">
    <p>Загрузите изображение</p>
    <input type="file" name="photo" accept="image/*"><br><br>
    <input type="submit" value="Отправить на сервер">

</form>
</body>


<?php
require "conf.php";
//$sql = "SELECT `name`,`adress` FROM `foto`;";
$sql = "SELECT `name`,`adress` FROM `foto` ORDER BY `count` DESC;";
$res = mysqli_query($connect, $sql);
$a=1;
while ($final = mysqli_fetch_assoc($res)){?>
<a href ="fullimage.php?img=<?=$final['name']?>"><img width="200" src="<?=$final['adress']?>" alt=""</a>

<?php
if($a%3 == false){
    echo "<br>";
}
$a++;
}



