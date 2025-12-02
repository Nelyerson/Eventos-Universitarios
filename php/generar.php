<?php

require "vendor/autoload.php";

use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;



require 'conexion.php';
$id= $_REQUEST ['id'];
$query = "SELECT * FROM eventos WHERE id= '$id' ";
$resultado=$conexion->query($query);
$row = $resultado->fetch_assoc();


$url = 'http://localhost/ProEvento%20V.1.2/php/qr.php?id=';


$fullrl = $url . $id;



$text = $fullrl;

$qr_code = QrCode::create($text);
              

$writer = new PngWriter;

$result = $writer->write($qr_code);

// Output the QR code image to the browser
//header("Content-Type: " . $result->getMimeType());

//echo $result->getString();

$result->saveToFile("pase.png");
