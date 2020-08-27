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
<link rel="stylesheet" type="text/css" href="../assets/css/updateRecordForm.css">

<header>
  <h1 class='center'>Update Record</h1>
</header>

<main>

  <!-- Form for updating plant -->
  <form action="index.php" method="post">

    <input type="hidden" name="action" value="updateRecordFormSubmit" />
    <input type="hidden"  name='bedID' value='<?php echo $garden->getBedID(); ?>'>
    <label>Bed: </label><input name='Bed' placeholder='<?php echo $garden->getbed(); ?>'><br>
    <label>plantID: </label><input name='plantID' placeholder='<?php echo $garden->getplantID(); ?>'><br>
    <label>Location: </label><input name='location' placeholder='<?php echo $garden->getlocation(); ?>'><br>
    <label>Time Period: </label><input name='timePeriod' placeholder='<?php echo $garden->gettimePeriod(); ?>'><br>
    <label>Plant Date: </label><input name='plantDate' placeholder='<?php echo $garden->getplantDate(); ?>'><br>
    <label>First Pick Date: </label><input name='firstPickDate' placeholder='<?php echo $garden->getfirstPickDate(); ?>'><br>
    <label>Last Pick Date: </label><input name='lastPickDate' placeholder='<?php echo $garden->getlastPickDate(); ?>'><br>

    <div class='buttonDiv'>
      <button class="btn btn-outline-success">Submit</button>
    </div>

  </form>
  <!-- End Form for updating plant -->

</main>

<!-- Footer Area -->
<?php include '../view/footer.php'; ?>
