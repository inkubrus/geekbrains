<form action="upload.php" method="post" enctype="multipart/form-data">
    <p>Загрузите изображение</p>
    <input type="file" name="photo" accept="image/*"><br><br>
    <input type="submit" value="Отправить на сервер">

</form>

<?php
$fotos = scandir("big");
//print_r($fotos);
for($i=2 and $a=4;$i<count($fotos);$i++ and $a++){?>
<a href ="fullimage.php?img=<?=$fotos[$i]?>"><img width="200" src="foto/<?=$fotos[$i]?>" alt=""</a>

<?php
 if($a%3 == false){
    echo "<br>";
 }
    }

