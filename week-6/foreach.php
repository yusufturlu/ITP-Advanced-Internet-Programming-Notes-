<?php
//Haftanın Günleri
/*$days=array("Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi","Pazar");
foreach($days as $day)
{
    echo $day."<br>";
}*/

//Alfabedeki Kalın ve İnce Ünlü Harfler
$KalinVeInceUnluler=array("a","ı","o","u","e","i","ö","ü");
echo "Alfabedeki Kalın ve İnce Ünlü Harflerin Listesi:"."<br>";
foreach($KalinVeInceUnluler as $alfabe=>$sira)
{
    echo $alfabe." : ".$sira."<br>";
}
?>