<?php

include 'phpChien.phtml';
include 'Chien.php';

$shiba = new Chien('taro', 'marron');
$shiba->setChienAge(3);
$shiba->presentation();
echo('<br>');
$ainu = new Chien('kenta', 'blanc');
$ainu->setChienAge(1);
$ainu->presentation();
echo('<br>');
$shiba->setChienCouleur('beige');
$shiba->presentation();



?>