<?php

  // Starting the session
  session_start();
  $name = $_SESSION["username"];
  $id = $_SESSION["user_id"];
  if (!empty($name)){
    $allowed = True;
  }

  //Pulling in the databases
  require('../model/database.php');
  require('../model/Gardens.php');
  require('../model/Plants.php');
  require('../model/Record.php');

  //Setting a default action
  $action = filter_input(INPUT_POST, 'action');
  if ($action == NULL) {
      $action = filter_input(INPUT_GET, 'action');
      if ($action == NULL) {
          $action = 'home';
      }
  }

  if ($allowed) {
    switch ($action) {
      //This case will bring the user to the homepage once the user is logged in
      case 'home':
        // Creating the object to deal with the database.
        $GardensObject = new GrowingDB();
        // Searching in the database for the garden records
        $gardens = $GardensObject->searchForRecords();
        $plants = $GardensObject->searchForPlants();
        include('home.php');
        break;
      case 'CreateRecord':
        include('CreateRecord.php');
        break;
      // This action will take the user to the create a plant page
      case 'createPlantPage':
        include('CreatePlant.php');
        break;
      // This action will actually create a new plant
      case 'createPlant':
        // Creating the object to deal with the database.
        $GardensObject = new GrowingDB();
        // Getting the user input
        $plant = filter_input(INPUT_POST, 'plant');
        #Calling the delete record method to delete the record.
        $GardensObject->addPlant($plant);
        include('CreatePlant.php');
        break;
      // This action will take the user to the update record form page.
      case 'updateRecordFormPage':
        // Creating the object to deal with the database.
        $GardensObject = new GrowingDB();
        // Getting the id of the specific record
        $bedID = filter_input(INPUT_POST, 'bedID');
        $garden = $GardensObject->getOneRecord($bedID);
        include('updateRecordForm.php');
        break;
        // This action will actually execute the code to update the selected record
      case 'updateRecordFormSubmit':
          // Creating the object to deal with the database.
          $GardensObject = new GrowingDB();
          // Getting the data from what the user entered
          $bedID = filter_input(INPUT_POST, 'bedID');
          $Bed = filter_input(INPUT_POST, 'Bed');
          $plantID = filter_input(INPUT_POST, 'plantID');
          $location = filter_input(INPUT_POST, 'location');
          $timePeriod = filter_input(INPUT_POST, 'timePeriod');
          $plantDate = filter_input(INPUT_POST, 'plantDate');
          $firstPickDate = filter_input(INPUT_POST, 'firstPickDate');
          $lastPickDate = filter_input(INPUT_POST, 'lastPickDate');

          // Use if statements to set the values if they're empty.
          if (empty($Bed)) {
            $garden = $GardensObject->getOneRecord($bedID);
            $bed = $garden->getbed();
          }
          if (empty($plantID)) {
            $garden = $GardensObject->getOneRecord($bedID);
            $plantID = $garden->getplantID();
          }
          if (empty($location)) {
            $garden = $GardensObject->getOneRecord($bedID);
            $location = $garden->getlocation();
          }
          if (empty($timePeriod)) {
            $garden = $GardensObject->getOneRecord($bedID);
            $timePeriod = $garden->gettimePeriod();
          }
          if (empty($plantDate)) {
            $garden = $GardensObject->getOneRecord($bedID);
            $plantDate = $garden->getplantDate();
          }
          if (empty($firstPickDate)) {
            $garden = $GardensObject->getOneRecord($bedID);
            $firstPickDate = $garden->getfirstPickDate();
          }
          if (empty($lastPickDate)) {
            $garden = $GardensObject->getOneRecord($bedID);
            $lastPickDate = $garden->getlastPickDate();
          }
          //Making he updates to the database.
          $GardensObject->updateRecord($bedID, $Bed, $plantID, $location, $timePeriod, $plantDate, $firstPickDate, $lastPickDate);
          include('test.php');
          //header('Location: .?action=home');
          break;
      // This action will take the user to the update plant form page.
      case 'updatePlantFormPage':
        // Creating the object to deal with the database.
        $GardensObject = new GrowingDB();
        // Getting the id of the specific record
        $plant_id = filter_input(INPUT_POST, 'plantID');
        $plant = $GardensObject->getOnePlant($plant_id);
        include('UpdatePlantForm.php');
        break;
      // This action will actually execute the code to update the plant
      case 'updatePlantFormSubmit':
        // Creating the object to deal with the database.
        $GardensObject = new GrowingDB();
        // Getting the data from what the user entered
        $plantID = filter_input(INPUT_POST, 'plantID');
        $plantName = filter_input(INPUT_POST, 'plantName');
        // Use if statements to set the value of plantName if it's empty. I know
        // I don't really need to do this for plants but have this here because
        // I will need to do this for gardens.
        if (empty($plantName)) {
          $plant = $GardensObject->getOnePlant($plantID);
          $plantName = $plant->getplantName();
        }
        //Making he updates to the database.
        $GardensObject->update_plant($plantID, $plantName);
        // include('test.php');
        header('Location: .?action=home');
        break;
      // This action will delete a record
      case 'delete_record':
        // Creating the object to deal with the database.
        $GardensObject = new GrowingDB();
        //Getting the record id when the user pushes the delete key.
        $bedID = filter_input(INPUT_POST, 'bedID', FILTER_VALIDATE_INT);
        #Calling the delete record method to delete the record.
        $GardensObject->deleteRecord($bedID);
        header('Location: .?action=home');
        break;
      // This action will delete a plant
      case 'delete_plant':
        // Creating the object to deal with the database.
        $GardensObject = new GrowingDB();
        //Getting the record id when the user pushes the delete key.
        $plantID = filter_input(INPUT_POST, 'plantID', FILTER_VALIDATE_INT);
        #Calling the delete record method to delete the record.
        $GardensObject->deletePlant($plantID);
        header('Location: .?action=home');
        break;
    }
  }else {
    include('notAllowed.php');
  }

?>
