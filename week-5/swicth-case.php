<html>
<head>
    <meta charset="UTF-8">
    <title>Switch-Case Yapısı</title>
</head>
<body>
    <form name="form" action="" method="post">
        Sayı Giriniz:
        <input type="text" name="day">
        <input type="submit" name="submit" value="Gönder">
    </form>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
    $kgun=$_POST["day"];
    switch($kgun){
            case 1:echo "Bugün günlerden Pazartesi";
            break;
            case 2:echo "Bugün günlerden Salı";
            break;
            case 3:echo "Bugün günlerden Çarşamba";
            break;
            case 4:echo "Bugün günlerden Perşembe";
            break;
            case 5:echo "Bugün günlerden Cuma";
            break;
            case 6:echo "Bugün günlerden Cumartesi";
            break;
            case 7:echo "Bugün günlerden Pazar";
            break;
        default: echo "Böyle bir gün olamaz";
    }
}
?>