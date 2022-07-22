<?php

class Parcel {
    public $weight;
    public $destinationCountry;

    public function setWeight($weight){
        echo 'waga ustawiona na: ' . $weight . "<br>";
        $this->weight = $weight;
        return $this;
    }

    public function setCountry($country){
        echo 'kraj ustawiony na: ' . $country . "<br>";
        $this->destinationCountry = $country;
        return $this;
    }
}
    $myparcel = new Parcel();
    $myparcel -> setWeight(5)->setCountry('USA');
    
