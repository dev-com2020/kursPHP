<?php

class HeavyParcelException extends Exception {}

class Courier{
    public function ship(Parcel $parcel) {
      // Sprawdzenie czy jest adres
      if(empty($parcel->address)) {
        throw new Exception('Nie podano adresu');
      }
  
      // Sprawdzenie ciężaru
      if($parcel->weight > 5) {
        throw new HeavyParcelException('Za ciężka paczka');
      }
      // W pozostałych przypadkach jest OK
      return true;
    }
  }