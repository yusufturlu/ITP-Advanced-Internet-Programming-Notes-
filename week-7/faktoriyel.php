<html>
<head>
    <meta charset="UTF-8">
    <title>Faktoriyel</title>
</head>
<body>
    <form name="form" action="" method="post">
       Sayı Giriniz:
       <input type="text" name="number">
       <input type="submit" name="submit" value="Gönder">
        
    </form>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
    $ksayi=$_POST["number"];
    if($ksayi<0)
    {
        echo "Negatif sayıların faktöriyeli bulunmaz"."<br>";
    }
    else
    {
        $faktoriyel=1;
        for($i=1;$i<=$ksayi;$i++)
        {
            $faktoriyel=$faktoriyel*$i;
        }
        echo $ksayi." sayısının faktöriyeli: ".$faktoriyel;
    }
}
?>