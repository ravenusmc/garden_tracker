<?php

  // Starting the session
  session_start();
  $name = $_SESSION["username"];
  $id = $_SESSION["user_id"];
  if (!empty($name)){
    $allowed = True;
  }

?>
<h1>Update Page</h1>

<main>

  <!-- Form for updating plant -->
  <form action="index.php" method="post">

    <input type="hidden" name="action" value="updatePlantFormSubmit" />

    <label>Plant Name: </label><input name='plantName' placeholder='<?php echo $plant->getplantName(); ?>'><br>
    <input type='hidden' name='plantID' value='<?php echo $plant->getplantID(); ?>'>

    <div>
      <input type='submit' value="Submit Changes" />
    <div>

  </form>
  <!-- End Form for updating plant -->

</main>
