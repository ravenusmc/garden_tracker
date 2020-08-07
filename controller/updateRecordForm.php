<?php

  // Starting the session
  session_start();
  $name = $_SESSION["username"];
  $id = $_SESSION["user_id"];
  if (!empty($name)){
    $allowed = True;
  }

?>
<h1>Update Record Page</h1>

<main>

  <!-- Form for updating plant -->
  <form action="index.php" method="post">

    <input type="hidden" name="action" value="updateRecordFormSubmit" />
    <input  name='bedID' value='<?php echo $garden->getBedID(); ?>'>
    <label>Bed: </label><input name='Bed' placeholder='<?php echo $garden->getbed(); ?>'><br>
    <label>plantID: </label><input name='plantID' placeholder='<?php echo $garden->getplantID(); ?>'><br>
    <label>Location: </label><input name='location' placeholder='<?php echo $garden->getlocation(); ?>'><br>
    <label>Time Period: </label><input name='timePeriod' placeholder='<?php echo $garden->gettimePeriod(); ?>'><br>
    <label>Plant Date: </label><input name='plantDate' placeholder='<?php echo $garden->getplantDate(); ?>'><br>
    <label>First Pick Date: </label><input name='firstPickDate' placeholder='<?php echo $garden->getfirstPickDate(); ?>'><br>
    <label>Last Pick Date: </label><input name='lastPickDate' placeholder='<?php echo $garden->getlastPickDate(); ?>'><br>

    <div>
      <input type='submit' value="Submit Changes" />
    <div>

  </form>
  <!-- End Form for updating plant -->

</main>
