<?php
$school=array(
    "8/A"=>array(
        "Hakan"=>95,
        "Fatih"=>45,
        "Ayşe"=>65),
    "8/B"=>array(
        "Teoman"=>55,
        "Emine"=>80,
        "Ömer"=>55),
);
    echo "<pre>";
    print_r($school);
    echo "</pre>";

echo "Notu:".$school["8/B"]["Teoman"]."<br>";
echo "Notu:".$school["8/A"]["Ayşe"];
?>