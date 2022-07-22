<?php

class Dpd extends Courier implements Trackable{



    public function ship($parcel){

        //wybór kuriera
        //zabezpieczenie paczki
        //wysyłka
        $parcelId = 42;        
        return $parcelId;
    }

    public function getTrackInfo($parcelId){
        return(array("status" => "w drodze "));
    }
}