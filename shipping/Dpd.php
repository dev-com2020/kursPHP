<?php
namespace shipping;
class Dpd extends Courier{



    public function ship($parcel){

        //wybór kuriera
        //zabezpieczenie paczki
        //wysyłka
        echo "<br>".$parcel;
        return true;
    }
}