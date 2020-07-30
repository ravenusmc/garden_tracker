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

  <header>
    <div class='headerDiv'>
      <h1 class='center'>Garden Records</h1>
    </div>
  </header>

  <section>
    <h2 class='center'>Control Area</h2>
  </section>

  <section id='tableArea'>

    <div>
      <h2 class='center'>Garden Table</h2>
      <table>
        <tr>
          <th>Bed</th>
          <th>PlantID</th>
          <th>Location</th>
          <th>Time Period</th>
          <th>Plant Date</th>
          <th>First Pick Date</th>
          <th>Last Pick Date</th>
        </tr>
        <?php foreach ($gardens as $garden): ?>
          <tr>
            <td><?php echo $garden->getbed(); ?></td>
            <td><?php echo $garden->getplantID(); ?></td>
            <td><?php echo $garden->getlocation(); ?></td>
            <td><?php echo $garden->gettimePeriod(); ?></td>
            <td><?php echo $garden->getplantDate(); ?></td>
            <td><?php echo $garden->getfirstPickDate(); ?></td>
            <td><?php echo $garden->getlastPickDate(); ?></td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>

    <div>
      <h2>Plant Table</h2>
      <table>
        <tr>
          <th>Plant ID</th>
          <th>Plant Name</th>
        </tr>
        <?php foreach ($plants as $plant): ?>
          <tr>
            <td><?php echo $plant->getplantID(); ?></td>
            <td><?php echo $plant->getplantName(); ?></td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>

  </section>

</main>

<!-- Footer Area -->
<?php include '../view/footer.php'; ?>
