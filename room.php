<?php

// Creazione Classe 'room'
//   --> modello contenente attributi e metodi comuni a tutte le stanze

class room {

  public $room_number;

  public $floor;

  public $beds;

  public $created_at;

  public $updated_at;


  // Construct
  public function __construct($_room_number, $_floor, $_beds) {
    $this->room_number = $_room_number;
    $this->floor = $_floor;
    $this->beds = $_beds;
  }


  // Creazione Metodo per stampa dati
  public function getRoomData() {
    return [
      'room_number'=> $this->room_number,
      'floor'=> $this->floor,
      'beds'=> $this->beds,
    ];
  }
  
} // end room Class






?>