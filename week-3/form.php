<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action = "" method = 'post' >
        <input type="text" name="name" placeholder="İsminiz">
        <input type="text" name="surname" placeholder = "Soyisminiz">
        <input type="Submit" name="submit" value="Gönder">
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];

    echo "Merhaba, $name $surname!";  
}

?>