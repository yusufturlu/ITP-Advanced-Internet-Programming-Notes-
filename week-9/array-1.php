<?php
/*$bilgiler=array(
"Eğitim Bilgileri: ",
    "Lisans: "=>"Gelişim Üniversitesi",
"Deneyim: ",
    "Web Developer"=>"Sumru Yayınevi",
"Programlama Dilleri: ",
    "PHP","HTML 5","CSS","Phyton",
);
echo "<pre>";
print_r($bilgiler);
echo "</pre>";

echo $bilgiler["Lisans: "];*/


$gunler=array("Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi","Pazar");
echo "<b>Haftanın Günleri</b>"."<br>";
for($i=0;$i<count($gunler);$i++)
{
    echo $gunler[$i]."<br>";
}
?>