<?php
// FAIRE LES TESTS ICI

require_once('vendor/autoload.php');
use Src\Controller\MotoController;
use Src\Entity\Moto;

$motoController = new MotoController ();

$moto1 = new Moto(42, "YamahRRRaOO", "SuperspotOO", "Sportive", 1200, "URL");

$moto2 = new Moto(52, "Riri", "Superspooot", "Sportive", 1600, "URL");


$motoController->findAll();


//dump($resultat);
//foreach ($resultat as $row) {
//dump($row);
//}