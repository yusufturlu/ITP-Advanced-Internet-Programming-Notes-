<?php
try
{
    $db=new PDO("mysql:host=localhost; dbname=test;charset=utf8","root","");
    echo "Kayıt Başarılı"."<br>";
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>