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

  <section id='formSection'>
    <form action="index.php" method="post">
      <input type="hidden" name="action" value="createNote" />
      <textarea name="note" rows="10" cols="50" placeholder='Type Note...' ></textarea>
      <button>Submit</button>
    </form>
  </section>

  <section id='tableSection'>
    <div class="table-responsive-sm">
      <h2 class='center'>Notes Table</h2>
      <table class="table table-bordered table-hover table-sm">
        <thead class='thead-dark'>
          <tr>
            <th>Note</th>
            <th>Date Written</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($notes as $note): ?>
            <tr>
              <td><?php echo $note->getNote(); ?></td>
              <td><?php echo $note->getDateStamp(); ?></td>
              <td>
                <form action="index.php" method="post">
                  <input type="hidden" name="action" value="updateNote">
                  <input type="hidden" name="noteID" value="<?php echo $note->getNoteID(); ?>">
                  <input class='update' type="submit" value="Update">
                </form>
              </td>
              <td>
                <form action="index.php" method="post">
                  <input type="hidden" name="action" value="deleteNote">
                  <input type="hidden" name="noteID" value="<?php echo $note->getNoteID(); ?>">
                  <input class='delete' type="submit" value="Delete">
                </form>
              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </section>


</main>

<!-- Footer Area -->
<?php include '../view/footer.php'; ?>
