<?php

  // Starting the session
  session_start();
  // Setting session varibles
  $name = $_SESSION["username"];
  $id = $_SESSION["user_id"];
  // This will decide if the page can be shown or not
  if (!empty($name)){
    $navbar = True;
  }

?>

<?php include '../view/header.php'; ?>
<!-- Bringing in CSS -->
<link rel="stylesheet" type="text/css" href="../assets/css/generic.css">
<!-- CSS for the header -->
<link rel="stylesheet" type="text/css" href="../assets/css/header.css">
<!-- CSS for this page -->
<link rel="stylesheet" type="text/css" href="../assets/css/home.css">

<main>

  <h1>Garden Record</h1>

  <table>
    <tr>
      <td>
    </tr>
  </table>

</main>
