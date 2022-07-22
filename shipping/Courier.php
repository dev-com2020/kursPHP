<?php

namespace shipping;

class Courier
{
    public $name;
    public $home_country;

    public function __construct($name){
        $this->name = $name;
        return true;
    }

    public static function getCouriersByCountry($country){
        // pobiera listę kurierów
        // tworzy obiekt klasy Courier dla każdego wyniku
        // zwraca tablicę utwrzonych obiektów
        return $courier_list;
    }

    public function ship($parcel){
        // tutaj miejsce na kod
        return true;
    }

    public function calculateShipping($parcel){
        $rate = 1.78;
        $cost = $rate * $parcel->weight;
        return $cost;
    }
}
