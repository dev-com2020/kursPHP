<?php

class Courier
{
    // protected $name;
    // protected $data = array();
    // public $home_country;
    // protected $count = 0;



    // public function __construct($name){
    //     $this->name = $name;
    //     return true;
    // }

    // public function __get($property){
    //     return $this->data[$property];
    // }

    // public function __set($property, $value){
    //     $this->data[$property] = $value;
    //     return true;
    // }


    // function getName(){
    //     return $this->name;
    // }

    // function setName($value){
    //     $this->name = $value;
    //     return true;
    // }

    public static function getCouriersByCountry($country){
        // pobiera listę kurierów
        // tworzy obiekt klasy Courier dla każdego wyniku
        // zwraca tablicę utwrzonych obiektów
        return $courier_list;
    }

    public function ship(Parcel $parcel){
        // $this->count++;
        // tutaj miejsce na kod
        
        return true;
    }

    // public function count(){
    //     return $this->count;
    // }

    public function calculateShipping(Parcel $parcel){
        $rate = $this-> getShippingRateForCountry($parcel ->destinationCountry);
        $cost = $rate * $parcel->weight;
        return $cost;
    }

    private function getShippingRateForCountry($country){
        //algorytm do obliczania
        return 1.2;
    }
}
