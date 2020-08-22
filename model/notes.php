<?php

  class Notes {

    private $noteID, $note, $dateStamp;

    public function __construct() {
       $this->noteID = 0;
       $this->note = '';
       $this->dateStamp = '';
    }

    public function getNoteID() {
         return $this->noteID;
    }

    public function setNoteID($value) {
          $this->noteID = $value;
    }

    public function getNote() {
         return $this->note;
    }

    public function setNote($value) {
          $this->note = $value;
    }

    public function getDate() {
         return $this->dateStamp;
    }

    public function setDate($value) {
          $this->dateStamp = $value;
    }

  }
?>
