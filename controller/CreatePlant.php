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

<main>

  <h1>Create Plant</h1>

  <form action="index.php" method="post">
    <input type="hidden" name="action" value="createPlant" />

    <input placeholder='Plant Name' type='text' name='plant'>

    <button>Submit</button>

  </form>

</main>
