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
    }
  }else {
    include('notAllowed.php');
  }

?>
