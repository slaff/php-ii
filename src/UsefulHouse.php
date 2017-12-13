<?php
namespace Libs;

class UsefulHouse extends House {

   private $bathRooms = 1;
 
   public function getBathRooms() {
      return $this->bathRooms;
   }

   public function setCar(Car $car)
   {
      $this->car = $car;
   }
}
