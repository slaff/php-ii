<?php
namespace Libs;

abstract class House {
  use AutomaticWindows;

  protected $rooms = 0;
  
  public function setRooms($rooms)
  {
    $this->rooms = $rooms;
  }

  abstract public function getBathRooms(); 
}
