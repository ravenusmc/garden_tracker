<?php

  class Gardens {

    private $bedID, $bed, $plantID, $location, $timePeriod, $plantDate, $firstPickDate, $lastPickDate;

    public function __construct() {
       $this->bedID = 0;
       $this->bed = '';
       $this->plantID = 0;
       $this->location = '';
       $this->timePeriod = '';
       $this->plantDate = '';
       $this->firstPickDate = '';
       $this->lastPickDate = '';
    }

    public function getBedID() {
         return $this->bedID;
    }

    public function setBedID($value) {
          $this->bedID = $value;
    }

    public function getbed() {
         return $this->bed;
    }

    public function setbed($value) {
          $this->bed = $value;
    }

    public function getplantID() {
         return $this->plantID;
    }

    public function setplantID($value) {
          $this->plantID = $value;
    }

    public function getlocation() {
         return $this->location;
    }

    public function setlocation($value) {
          $this->location = $value;
    }

    public function gettimePeriod() {
         return $this->timePeriod;
    }

    public function settimePeriod($value) {
          $this->timePeriod = $value;
    }

    public function getplantDate() {
         return $this->plantDate;
    }

    public function setplantDate($value) {
          $this->plantDate = $value;
    }

    public function getfirstPickDate() {
         return $this->firstPickDate;
    }

    public function setfirstPickDate($value) {
          $this->firstPickDate = $value;
    }

    public function getlastPickDate() {
         return $this->lastPickDate;
    }

    public function setlastPickDate($value) {
          $this->lastPickDate = $value;
    }

  }
?>
