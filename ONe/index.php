<?php
/*
echo <<<EOT
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>WEBT</title>
</head>
<body>
    <h1>WEBT</h1>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>
EOT;
*/

require_once "src/ausstecher.php";

$sternausstecher = new Sternausstecher("rot");
//var_dump($sternausstecher);
echo $sternausstecher;
print("\n");
function test(int $a, int $b) : int { // was macht :int? = rückgabe wert
    return $a + $b;
}
print_r(test(1, 2));
//unteschied print und echo? = print_r gibt mehr infos aus als echo (echo ist schneller)
//print_r ist für arrays und objekte
//echo ist für strings
//print vs print_r = print_r gibt mehr infos aus als print (print ist schneller)

$mySternkeksausstecher = new Sternausstecher("blau");
$mySternkeksausstecher->setFarbe("gelb");
echo "\n" . $mySternkeksausstecher->getFarbe();

$myBessererSternausstecher = new BessererSternausstecher("grün");
echo "\n" . $myBessererSternausstecher->claimbetter();

