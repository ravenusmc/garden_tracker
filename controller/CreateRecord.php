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
<link rel="stylesheet" type="text/css" href="../assets/css/createRecord.css">

<main>

  <section class='formSection'>

    <h1>Create A Record</h1>

    <form action="index.php" method="post">
      <input type="hidden" name="action" value="CreateRecordSubmit" />

      <input placeholder='Bed' type='text' name='bed'>
      <input placeholder='plant' type='text' name='plant'>
      <input placeholder='Location' type='text' name='location'>
      <input placeholder='Time Period' type='text' name='time_period'>
      <input placeholder='Plant Date' type='text' name='plant_date'>
      <input placeholder='First Pick Date' type='text' name='first_pick_date'>
      <input placeholder='Last Pick Date' type='text' name='last_pick_date'>

      <button>Submit</button>

    </form>

  </section>

  <section class='imageSection'>
  </section>

</main>
