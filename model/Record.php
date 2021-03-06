<?php

  class GrowingDB {

    // This method will get all the records
    public static function searchForRecords() {

      $db = Database::getDB();

      $query = 'SELECT * FROM Garden_Beds
                ORDER BY bedID desc';
      $statement = $db->prepare($query);
      $statement->execute();
      $rows = $statement->fetchAll();
      $statement->closeCursor();

      foreach ($rows as $row) {
        $garden = new Gardens();
        $garden->setBedID($row['bedID']);
        $garden->setbed($row['bed']);
        $garden->setplantID($row['plantID']);
        $garden->setlocation($row['location']);
        $garden->settimePeriod($row['timePeriod']);
        $garden->setplantDate($row['plantDate']);
        $garden->setfirstPickDate($row['firstPickDate']);
        $garden->setlastPickDate($row['lastPickDate']);

        $gardens[] = $garden;

      } // End foreach loop

      // Returning the garden data
      return $gardens;

    } // End searchForRecords Method

    // This method will get one plant from the DB based on the plant id.
    public static function getOneRecord($bedID) {

      $db = Database::getDB();

      $query = 'SELECT * FROM Garden_Beds
                WHERE bedID = :bedID';
      $statement = $db->prepare($query);
      $statement->bindValue(':bedID', $bedID);
      $statement->execute();
      $row = $statement->fetch();
      $statement->closeCursor();

      $garden = new Gardens();

      $garden->setBedID($row['bedID']);
      $garden->setbed($row['bed']);
      $garden->setplantID($row['plantID']);
      $garden->setlocation($row['location']);
      $garden->settimePeriod($row['timePeriod']);
      $garden->setplantDate($row['plantDate']);
      $garden->setfirstPickDate($row['firstPickDate']);
      $garden->setlastPickDate($row['lastPickDate']);

      return $garden;

    } // End getOneRecord Method

    // This method will get the plants from the data base.
    public static function searchForPlants() {

      $db = Database::getDB();

      $query = 'SELECT * FROM Plants
                ORDER BY plantID asc';
      $statement = $db->prepare($query);
      $statement->execute();
      $rows = $statement->fetchAll();
      $statement->closeCursor();

      foreach ($rows as $row) {
        $plant = new Plants();
        $plant->setplantID($row['plantID']);
        $plant->setplantName($row['plantName']);

        $plants[] = $plant;

      } // End foreach loop

      // Returning the garden data
      return $plants;

    } // End searchForPlants Method

    // This method will get one plant from the DB based on the plant id.
    public static function getOnePlant($plant_id) {

      $db = Database::getDB();

      $query = 'SELECT * FROM Plants
                WHERE plantID = :plantID';
      $statement = $db->prepare($query);
      $statement->bindValue(':plantID', $plant_id);
      $statement->execute();
      $row = $statement->fetch();
      $statement->closeCursor();

      $plant = new Plants();

      $plant->setplantID($row['plantID']);
      $plant->setplantName($row['plantName']);

      return $plant;

    } // End getOnePlant Method

    // This method will get one note from the DB based on the note id.
    public static function getOneNote($noteID) {

      $db = Database::getDB();

      $query = 'SELECT * FROM Notes
                WHERE noteID = :noteID';
      $statement = $db->prepare($query);
      $statement->bindValue(':noteID', $noteID);
      $statement->execute();
      $row = $statement->fetch();
      $statement->closeCursor();

      $note = new Notes();

      $note->setNoteID($row['noteID']);
      $note->setNote($row['note']);

      return $note;

    } // End getOneNote Method

    // This method will Add a record to the Garden Beds table
    public static function addRecord($bed, $plantID, $location, $timePeriod, $plantDate, $firstPickDate, $lastPickDate) {

      $db = Database::getDB();

      $query = 'INSERT INTO Garden_Beds
                (bed, plantID, location, timePeriod, plantDate, firstPickDate, lastPickDate)
                VALUES
                (:bed, :plantID, :location, :timePeriod, :plantDate, :firstPickDate, :lastPickDate)';
      $statement = $db->prepare($query);
      $statement->bindValue(':bed', $bed);
      $statement->bindValue(':plantID', $plantID);
      $statement->bindValue(':location', $location);
      $statement->bindValue(':timePeriod', $timePeriod);
      $statement->bindValue(':plantDate', $plantDate);
      $statement->bindValue(':firstPickDate', $firstPickDate);
      $statement->bindValue(':lastPickDate', $lastPickDate);
      $statement->execute();
      $statement->closeCursor();

    } // End addRecord Method

    // This method will Add a plant to the plant table
    public static function addPlant($plant) {

      $db = Database::getDB();

      $query = 'INSERT INTO plants
                (plantName)
                VALUES
                (:plantName)';
      $statement = $db->prepare($query);
      $statement->bindValue(':plantName', $plant);
      $statement->execute();
      $statement->closeCursor();

    } // End addPlant Method

    // This method will Add a note to the note table
    public static function addNote($note, $dateStamp) {

      $db = Database::getDB();

      $query = 'INSERT INTO Notes
                (note, dateStamp)
                VALUES
                (:note, :dateStamp)';
      $statement = $db->prepare($query);
      $statement->bindValue(':note', $note);
      $statement->bindValue(':dateStamp', $dateStamp);
      $statement->execute();
      $statement->closeCursor();

    } // End addNote Method

    // This method will pull all the notes
    public static function showNotes() {

      $db = Database::getDB();

      $query = 'SELECT * FROM Notes
                ORDER BY dateStamp desc';
      $statement = $db->prepare($query);
      $statement->execute();
      $rows = $statement->fetchAll();
      $statement->closeCursor();

      foreach ($rows as $row) {
        $note = new Notes();
        $note->setNoteID($row['noteID']);
        $note->setNote($row['note']);
        $note->setDateStamp($row['dateStamp']);

        $notes[] = $note;
      } // End foreach loop

      // Returning the note data
      return $notes;

    } // End showNotes Method

    // This method will update a record from the DB based on the bed id
    public static function updateRecord($bedID, $Bed, $plantID, $location, $timePeriod, $plantDate, $firstPickDate, $lastPickDate) {
      echo $bedID . ' ' . $Bed;
      $db = Database::getDB();

      $query = 'UPDATE Garden_Beds
      SET bed = :bed,
      plantID = :plantID,
      location = :location,
      timePeriod = :timePeriod,
      plantDate = :plantDate,
      firstPickDate = :firstPickDate,
      lastPickDate = :lastPickDate
      WHERE bedID = :bedID';

      $statement = $db->prepare($query);
      $statement->bindValue(':bedID', $bedID);
      $statement->bindValue(':bed', $Bed);
      $statement->bindValue(':plantID', $plantID);
      $statement->bindValue(':location', $location);
      $statement->bindValue(':timePeriod', $timePeriod);
      $statement->bindValue(':plantDate', $plantDate);
      $statement->bindValue(':firstPickDate', $firstPickDate);
      $statement->bindValue(':lastPickDate', $lastPickDate);
      $statement->execute();
      $statement->closeCursor();

    } // End update_plant Method

    // This method will update a plant record from the DB based on the plant id.
    public static function update_plant($plantID, $plantName) {

      $db = Database::getDB();

      $query = 'UPDATE Plants
      SET plantName = :plantName
      WHERE plantID = :plantID';

      $statement = $db->prepare($query);
      $statement->bindValue(':plantID', $plantID);
      $statement->bindValue(':plantName', $plantName);
      $statement->execute();
      $statement->closeCursor();

    } // End update_plant Method

    // This method will delete a record
    public static function deleteRecord($bedID) {

      $db = Database::getDB();

      $query = 'DELETE FROM Garden_Beds
                WHERE bedID = :bedID';
      $statement = $db->prepare($query);
      $statement->bindValue(':bedID', $bedID);
      $statement->execute();
      $statement->closeCursor();

    } // End deleteRecord Method

    // This method will delete a plant
    public static function deletePlant($plantID) {

      $db = Database::getDB();

      $query = 'DELETE FROM Plants
                WHERE plantID = :plantID';
      $statement = $db->prepare($query);
      $statement->bindValue(':plantID', $plantID);
      $statement->execute();
      $statement->closeCursor();

    } // End deletePlant Method

    // This method will delete a note
    public static function deleteNote($noteID) {

      $db = Database::getDB();

      $query = 'DELETE FROM Notes
                WHERE noteID = :noteID';
      $statement = $db->prepare($query);
      $statement->bindValue(':noteID', $noteID);
      $statement->execute();
      $statement->closeCursor();

    } // End deletePlant Method

    // This method will update a plant record from the DB based on the plant id.
    public static function updateNote($noteID, $note) {

      $db = Database::getDB();

      $query = 'UPDATE Notes
      SET note = :note
      WHERE noteID = :noteID';

      $statement = $db->prepare($query);
      $statement->bindValue(':noteID', $noteID);
      $statement->bindValue(':note', $note);
      $statement->execute();
      $statement->closeCursor();

    } // End update_plant Method

  } // End Class

?>
