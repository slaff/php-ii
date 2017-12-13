<?php
namespace Libs;

trait AutomaticWindows {
   private $open = false;  
   /**
   *
   */
   public function toggle() 
   {
      if($this->open) {
        $this->close();
      }
      else {
        $this->open();
      }
   }

   public function isOpen() {
      return $this->open;
   }

    private function close() {
       $this->open = false;
    }

    private function open() {
       $this->open = true;
    }
}
