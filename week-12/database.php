<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Öğrenci ~ Form</title>
</head>
<body>
<form action="" method="post">    
    <input type="text" name="tc" placeholder="TC Numaranız">
    <br><br>
    <input type="text" name="Uname" placeholder="İsminiz">
    <br><br>
    <input type="text" name="surname" placeholder="Soyisminiz">
    <br><br>
    <input type="submit" placeholder="Kaydet" name="save" value="Kaydet"></input>
    <input type="submit" placeholder="Güncelle" value="Güncelle" name="update"></input>
    <input type="submit" placeholder="Sil" value="Sil" name="delete"></input>
</form>
</body>
</html>
<?php

include ('database.php') ;

if(isset($_POST['save'])) { 
    $tc = $_POST['tc'] ;
    $name = $_POST['Uname'] ;
    $surname = $_POST['surname'] ;

    $save = $db->exec("INSERT INTO ogrencidurum(tc,ad,soyad) VALUES ('$tc' ,'$name', '$surname')") ;

    if($save) {
        echo "Kayıt ekleme başarılıyla gerçekeşti." ;
    }
    else {
        echo "!Kayıt ekleme esnasından bir sorun oldu!" ;
    }
}

if(isset($_POST['update'])) {
    $tc = $_POST['tc'] ;
    $name = $_POST['Uname'] ;
    $surname = $_POST['surname'] ;

    $update = $db->exec("UPDATE ogrencidurum SET Uname='$name', surname = '$surname' WHERE tc = '$tc' ") ;

    if($update) {
        echo "Kayıt başarılıyla güncellendi." ;
    }
    else {
        echo "!Kayıt güncelleme esnasından bir sorun oldu!" ;
    }
}

if(isset($_POST['delete'])) {
    $tc = $_POST['tc'] ;
    $name = $_POST['Uname'] ;
    $surname = $_POST['surname'] ;

    $delete = $db->exec("DELETE FROM ogrencidurum WHERE ad='$name'") ;

    if($delete) {
        echo "Kayıt başarılıyla güncellendi." ;
    }
    else {
        echo "!Kayıt güncelleme esnasından bir sorun oldu!" ;
    }
}
?>