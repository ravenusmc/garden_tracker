<?php

  // Starting the session
  session_start();
  $name = $_SESSION["username"];
  $id = $_SESSION["user_id"];
  if (!empty($name)){
    $allowed = True;
  }

?>
<!-- Header files -->
<?php include '../view/header.php'; ?>
<!-- Bringing in generic CSS -->
<link rel="stylesheet" type="text/css" href="../assets/css/generic.css">
<!-- Bringing in CSS designed for this page -->
<link rel="stylesheet" type="text/css" href="../assets/css/notes.css">

<main>
  <h1>Notes</h1>
</main>

<!-- Footer Area -->
<?php include '../view/footer.php'; ?>
