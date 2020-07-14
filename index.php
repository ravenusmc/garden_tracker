<?php

  session_start();
  //Pulling in the databases
  // require('./model/database.php');
  // require('./model/helpers.php');
  //
  // global $db;
  $message = "";

  if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    //Hashing the password
    $password_hashed = password_hash($password, PASSWORD_DEFAULT);

    echo $password_hashed;

    //Getting the password from the database
    $query = "SELECT * FROM users
      WHERE userName = :username";
    $statement = $db->prepare($query);
    $statement->bindValue(':username', $username);
    $statement->execute();
    $user = $statement->fetch();
  }

?>

<?php include 'view/header.php'; ?>
<link rel="stylesheet" type="text/css" href="./assets/css/generic.css">
<!-- CSS for the header -->
<link rel="stylesheet" type="text/css" href="./assets/css/header.css">
<link rel="stylesheet" type="text/css" href="./assets/css/login.css">

<main>

  <!-- Start of error handling -->
  <?php
    if (isset($message)){
      echo $message;
    }
  ?>
  <!-- End of error handling -->

  <form method="post" class='form'>

    <div class='form-item'>
      <input name='username' type='text' class='form-input' placeholder="Username" aria-label="Username">
    </div>

    <div class='form-item'>
      <input name='password' type='password' class='form-input' placeholder="Password" aria-label="Password">
    </div>

    <button class='form-button' type='submit'>Submit</button>
  </form>

</main>
