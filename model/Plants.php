<?php

  class Plants {

    private $plantID, $plantName;

    public function __construct() {
       $this->plantID = 0;
       $this->plantName = '';
    }

    public function getplantID() {
         return $this->plantID;
    }

    public function setplantID($value) {
          $this->plantID = $value;
    }

    public function getplantName() {
         return $this->plantName;
    }

    public function setplantName($value) {
          $this->plantName = $value;
    }

  }
?>
