<?php

  // Starting the session
  session_start();
  $name = $_SESSION["username"];
  $id = $_SESSION["user_id"];
  if (!empty($name)){
    $allowed = True;
  }

?>
<?php include '../view/header.php'; ?>
<!-- Bringing in Generic CSS -->
<link rel="stylesheet" type="text/css" href="../assets/css/generic.css">
<!-- CSS for the header -->
<link rel="stylesheet" type="text/css" href="../assets/css/header.css">
<!-- CSS for this page -->
<link rel="stylesheet" type="text/css" href="../assets/css/updatePlantForm.css">

<header>
  <h1 class='center'>Update Plant</h1>
</header>

<main>

  <!-- Form for updating plant -->
  <form action="index.php" method="post">

    <input type="hidden" name="action" value="updatePlantFormSubmit" />

    <label>Plant Name: </label><input name='plantName' placeholder='<?php echo $plant->getplantName(); ?>'><br>
    <input type='hidden' name='plantID' value='<?php echo $plant->getplantID(); ?>'>

    <div class='buttonDiv'>
      <button class="btn btn-outline-success">Submit</button>
    </div>

  </form>
  <!-- End Form for updating plant -->

</main>

<!-- Footer Area -->
<?php include '../view/footer.php'; ?>
