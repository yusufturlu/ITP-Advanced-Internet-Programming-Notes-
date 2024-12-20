<?php
include "db-conn.php";
//Veritabanından exec ile veri güncelleme
$guncelle=$db->exec("UPDATE deneme SET ad='Deneme' WHERE soyad='Deneme'");
if($guncelle)
{
    echo "Güncelleme başarılı";
}
else
{
    echo "Güncelleme başarısız";
}
//Veritabanından prepare ile veri güncelleme
$sorgu=$db->prepare("UPDATE deneme SET 
ad=?,
soyad=?
");
$guncelle=$sorgu->execute(array("Yusuf","Türlü"));
if($guncelle)
{
    echo "Güncelleme başarılı";
}
else
{
    echo "Güncelleme başarısız";
}
?>