<?php
//var_dump ve gettype farkı
/*$number=22;
$F_name="Yusuf Türlü";
var_dump($number,$F_name);
echo gettype($number);*/



//Gettype Uygulama
/*$variable = true; 
$variable2 = 3; 
$variable3 = 5.1; 
$variable4 = "Yusuf"; 
$variable5 = array("red", "blue", "gray"); 
$variable6 = new stdClass;
$variable7 = NULL; 
$variable8= "30";
  
echo gettype($variable)."<br>";
echo gettype($variable2)."<br>";
echo gettype($variable3)."<br>";
echo gettype($variable4)."<br>";
echo gettype($variable5)."<br>";
echo gettype($variable6)."<br>";
echo gettype($variable7)."<br>";
echo gettype($variable8)."<br>";*/




//Gettype Ekran Görüntüsü
/*$sayi = 55;
echo "<b>Birinci değişkenin adı: \$sayi</b>"."<br>".        "Değeri : ".$sayi."<br>"."Türü : ";
echo gettype( $sayi )."<br>"."<br>" ;

$adi = "Yusuf";
echo "<b>İkinci değişkenin adı: \$adi</b>"."<br>".          "Değeri : ".$adi."<br>"."Türü : ";
echo gettype( $adi )."<br>"."<br>" ; 
  
$ondalik = 5.1234;
echo "<b>Üçüncü değişkenin adı: \$ondalik</b>"."            <br>"."Değeri : ". $ondalik."<br>"."Türü : ";
echo gettype( $ondalik ) ."<br>"."<br>"; 

$mantiksal = true;
echo "<b>Dördüncü değişkenin adı: \$mantiksal</b>"."        <br>"."Değeri : ".$mantiksal."<br>"."Türü : ";
echo gettype( $mantiksal )."<br>"."<br>" ;*/




//Settype
/*$a = "32";
settype($a, "integer"); 
var_dump($a);
echo gettype($a)."<br>";

$b = 32;
settype($b, "string"); 
var_dump($b);
echo gettype($b)."<br>";


$c = true;
settype($c, "integer");
var_dump($c);
echo gettype($c)."<br>";*/


//Sabit örnekleri

/*echo "<h3><u>Sabit örnekleri</u></h3>";
define("Pi", 3.14);

echo "Oluşturulan sabit <b>Pi</b> değeri: ".Pi."<br>"."<br>";

define("ders_adi", "İnternet Programcılığı I ", false);

echo "<u>Dersimizin Adı:</u> ".ders_adi;*/



//PHP SABİTLERİ 
/*echo "<h2>PHP SABİTLERİ</h2>"."<br>".
     "Kodun Bulunduğu Yer: ". (__LINE__)."<br>".
     "Dosyanın Bulunduğu Yer: ".(__FILE__)."<br>".
     "Sunucudaki PHP versiyonu: ". phpversion()."<br>".
     "Sunucu İşletim Sistemi: ".(PHP_OS)."<br>".
     "Dosyanın Bulunduğu Dizin: ". (__DIR__); */



//Çevresel Değişkenler
/*echo "<h2>Çevresel Değişkenler</h2>"."<br>".
     "<b>Sitenin dosya yolu:  </b>". $_SERVER ['DOCUMENT_ROOT']."<br>".
     "<b>Tarayıcı türü ve versiyonu:  </b>".  $_SERVER['HTTP_USER_AGENT']."<br>".
     "<b>DNS adı:  </b>". $_SERVER['SERVER_NAME']."<br>".
     "<b>Sitenin Port adresi: </b>". $_SERVER['SERVER_PORT']."<br>".
     "<b>Host Adresi: </b>".$_SERVER['HTTP_HOST'];*/

?>





    
    