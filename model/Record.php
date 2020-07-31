<?php

  class GrowingDB {

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

  } // End Class

?>
