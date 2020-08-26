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
<link rel="stylesheet" type="text/css" href="../assets/css/updateNoteForm.css">

<header>
  <h1 class='center'>Update Note</h1>
</header>

<main>

  <!-- Form for updating note -->
  <form action="index.php" method="post">

    <input type="hidden" name="action" value="updateNoteSubmit" />

    <label>Note: </label>
    <textarea rows="10" cols="50" name='note' placeholder='<?php echo $note->getNote(); ?>'></textarea>
    <input type='hidden' name='noteID' value='<?php echo $note->getNoteID(); ?>'>

    <button class="btn btn-outline-success">Submit</button>

  </form>
  <!-- End Form for updating note -->
</main>

<!-- Footer Area -->
<?php include '../view/footer.php'; ?>
