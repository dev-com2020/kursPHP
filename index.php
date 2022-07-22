<?php
// require 'courier.php';

spl_autoload_register(function($classname) {
    include strtolower($classname) . '.php';
});

$kurier5 = new \shipping\Dpd();

if($kurier5 instanceof Courier){
    echo 'jestem od kuriera';
}

print_r(get_declared_interfaces());

// $kurier1 = new \shipping\Courier("Gołąb pocztowy<br>");
// echo "Nazwa kuriera: ". $kurier1->name;

// $kurier2 = new \shipping\Dpd('DPD');
// echo "Nazwa kuriera: ". $kurier2->name;
// $inny_kurier = clone $kurier2;
// $inny_kurier->name = 'Poczta Polska';
// echo "Nazwa kuriera: ". $inny_kurier->name;

// $kurier3 = new \shipping\Courier();
// $kurier3->name = "Poczta Polska";
// echo $kurier3->name;

// $kurier4 = new \shipping\Courier();
// $kurier4->ship(new \shipping\Parcel());
// $kurier4->ship(new \shipping\Parcel());
// $kurier4->ship(new \shipping\Parcel());
// echo count($kurier4);


// $kurier2->ship('karton 1kg');


// $box1 = new \shipping\Parcel();
// $box1->$destinationAddress = 'Niemcy';

// $box2 = $box1;
// $box2->$destinationAddress = 'USA';


// echo "<br>Paczki mają zostać wysłane do:"
// . $box1->$destinationAddress. 'i'
// . $box2->$destinationAddress;



// $polscy_kurierzy = Courier::getCouriersByCountry('PL');
