<!-- 

OOP | Object-Oriented Programming  

Nome repo: php-oop-hotel

Partendo dal diagramma della tabella stanze nel db hotel (usate phpmyadmin per vedere le caratteristiche della tabella), 
creare una classe che rifletta la tabella stanze, poi stampare in pagina i dati.
I dati anche qui non arrivano da db ma da un array. 

-->

<?php

// Includo file relativi alle classi
require_once(__DIR__ . '/room.php');


// Creazione istanze in array
$array_rooms = [

  [
    'room_number'=> '10',
    'floor'=> '1',
    'beds'=> '1',
  ],

  [
    'room_number'=> '20',
    'floor'=> '2',
    'beds'=> '2',
  ],

  [
    'room_number'=> '23',
    'floor'=> '2',
    'beds'=> '1',
  ],

  [
    'room_number'=> '30',
    'floor'=> '3',
    'beds'=> '3',
  ],

  [
    'room_number'=> '35',
    'floor'=> '3',
    'beds'=> '1',
  ],

];


// Stampa dati in array
foreach ($array_rooms as $room) {
  $room = new room ($room['room_number'], $room['floor'], $room['beds']);
  $room_data = $room->getRoomData();

  
  ?>
    <div>
      <ul>
        <li>Numero stanza: <?php echo $room_data['room_number']; ?></li>
        <li>Piano: <?php echo $room_data['floor']; ?></li>
        <li>Numero letti: <?php echo $room_data['beds']; ?></li>  
      </ul>
    </div>
  <?php


}






?>
