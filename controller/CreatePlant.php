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
<link rel="stylesheet" type="text/css" href="../assets/css/createPlant.css">

<!-- Start of Main Area -->
<main>

  <div class='formArea'>
    <h1>Create Plant</h1>

    <form action="index.php" method="post">
      <input type="hidden" name="action" value="createPlant" />

      <input placeholder='Plant Name' type='text' name='plant'>

      <button>Submit</button>

    </form>
  </div>

  <div class='pictureArea'>
  </div>

</main>
<!-- End of Main Area -->

<!-- Footer Area -->
<?php include '../view/footer.php'; ?>
