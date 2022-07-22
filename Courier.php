<?php

class Courier
{
    public $name;
    // protected $data = array();
    public $home_country;
    // protected $count = 0;



    public function __construct($name, $home_country){
        $this->name = $name;
        $this->home_country = $home_country;
        $this->logfile = $this->getLogFile();
        return true;
    }

    protected function getLogFile(){
        return fopen('/tmp/error_log.txt','a');
    }

    public function log($message){
        if($this->logfile){
            fputs($this->logfile, 'Komunikat w dzienniku: '.$message);
        }
    }

    public function __sleep(){
        return array("name", "home_country");
    }

    public function __wakeup(){
        $this->logfile = $this->getLogFile();
        return true;
    }

    public function __toString(){
        return $this->name .'('. $this->home_country . ')';
    }

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

    public function __call($name,$params){
        if($name == 'sendParcel'){
            // przekazujemy wywołanie do metody ...
            return $this->send($params[0]);
        } else {
            error_log('Failed call to ' .$name. ' in Courier class');
        }
    }
}
