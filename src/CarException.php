<?php

namespace Libs;

class CarException extends \Exception {
  
  public function getResult() {
     return $this->resut;
  }
}
