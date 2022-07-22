<?php
// require 'courier.php';

spl_autoload_register(function($classname) {
    include strtolower($classname) . '.php';
});


$kurier1 = new \shipping\Courier("Gołąb pocztowy<br>");
echo "Nazwa kuriera: ". $kurier1->name;
$kurier2 = new \shipping\Dpd('DPD');
echo "Nazwa kuriera: ". $kurier2->name;

$kurier2->ship('karton 1kg');

// $polscy_kurierzy = Courier::getCouriersByCountry('PL');
