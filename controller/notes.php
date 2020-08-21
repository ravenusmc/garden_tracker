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

  <form action="index.php" method="post">
    <input type="hidden" name="action" value="createNote" />
    <textarea name="note" rows="10" cols="50" placeholder='Type Note...' ></textarea>
    <button>Submit</button>
  </form>

</main>

<!-- Footer Area -->
<?php include '../view/footer.php'; ?>
