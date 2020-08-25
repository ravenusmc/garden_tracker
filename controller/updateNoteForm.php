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
<h1>Update Note Page</h1>

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
