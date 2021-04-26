<?php

$z = $_GET["zip"];


sleep (2);
$url = "http://api.openweathermap.org/data/2.5/weather?zip=$z,us&units=metric&appid=1cd21308b2df17eb985f51de36f526bc";

$fp = fopen ( $url , "r" ); 
$contents = "";

while ( $more = fread ( $fp, 1000  ) ) {
   $contents .=  $more ;
} 

echo $contents ; 
?>
