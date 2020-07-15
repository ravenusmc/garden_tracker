<?php
  echo 'HI';
  // Starting the session
  // session_start();
  // $name = $_SESSION["username"];
  // $id = $_SESSION["user_id"];
  // if (!empty($name)){
  //   $allowed = True;
  // }

  //Pulling in the databases
  require('../model/database.php');
  // require('../model/blog.php');

  //Setting a default action
  $action = filter_input(INPUT_POST, 'action');
  if ($action == NULL) {
      $action = filter_input(INPUT_GET, 'action');
      if ($action == NULL) {
          $action = 'home';
      }
  }

  switch ($action) {
      //This case will bring the user to the blog page
      case 'home':
        include('home.php');
        break;
      // case 'createTopicPage':
      //   include('create.php');
      //   break;
  }

  // if ($allowed){
  //   switch ($action) {
  //     //This case will bring the user to the blog page
  //     case 'home':
  //       include('home.php');
  //       break;
  //     // case 'createTopicPage':
  //     //   include('create.php');
  //     //   break;
  // }else {
  //   include('notAllowed.php');
  // }
?>
