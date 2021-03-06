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
<link rel="stylesheet" type="text/css" href="../assets/css/createRecord.css">

<main>

  <section class='formSection'>

    <h1>Create A Record</h1>

    <form action="index.php" method="post">
      <input type="hidden" name="action" value="CreateRecordSubmit" />

      <div class='formGroup'>
        <label for="Bed">Bed:</label>
        <input placeholder='Bed' type='text' name='bed'>
      </div>

      <div class='formGroup'>
        <label for="plantName">Plant Name:</label>
        <select name="plantID">
          <?php foreach ($plants as $plant) : ?>
            <option value="<?php echo $plant->getplantID(); ?>"><?php echo $plant->getplantName() ?></option>
          <?php endforeach; ?>
        </select>
      </div>

      <div class='formGroup'>
        <label for="location">Location:</label>
        <input placeholder='Location' type='text' name='location'>
      </div>

      <div class='formGroup'>
        <label for="timePeriod">Time Period:</label>
        <select name="timePeriod">
          <option value='Spring'>Spring</option>
          <option value='Summer'>Summer</option>
          <option value='Winter'>Winter</option>
          <option value='Fall'>Fall</option>
        </select>
      </div>

      <div class='formGroup'>
        <label for="plantDate">Plant Date:</label>
        <select name='plantDateYear'>
            <option value='2020'>2020</option>
            <option value='2021'>2021</option>
            <option value='2022'>2022</option>
            <option value='2023'>2023</option>
            <option value='2024'>2024</option>
            <option value='2025'>2025</option>
            <option value='2026'>2026</option>
        </select>

        <select name='plantDateMonth'>
          <option value='01'>Jan</option>
          <option value='02'>Feb</option>
          <option value='03'>Mar</option>
          <option value='04'>Apr</option>
          <option value='05'>May</option>
          <option value='06'>Jun</option>
          <option value='07'>Jul</option>
          <option value='08'>Aug</option>
          <option value='09'>Sept</option>
          <option value='10'>Oct</option>
          <option value='11'>Nov</option>
          <option value='12'>Dec</option>
        </select>

        <select name='plantDateDay'>
          <option value='01'>1</option>
          <option value='02'>2</option>
          <option value='03'>3</option>
          <option value='04'>4</option>
          <option value='05'>5</option>
          <option value='06'>6</option>
          <option value='07'>7</option>
          <option value='08'>8</option>
          <option value='09'>9</option>
          <option value='10'>10</option>
          <option value='11'>11</option>
          <option value='12'>12</option>
          <option value='13'>13</option>
          <option value='14'>14</option>
          <option value='15'>15</option>
          <option value='16'>16</option>
          <option value='17'>17</option>
          <option value='18'>18</option>
          <option value='19'>19</option>
          <option value='20'>20</option>
          <option value='21'>21</option>
          <option value='22'>22</option>
          <option value='23'>23</option>
          <option value='24'>24</option>
          <option value='25'>25</option>
          <option value='26'>26</option>
          <option value='27'>27</option>
          <option value='28'>28</option>
          <option value='29'>29</option>
          <option value='30'>30</option>
          <option value='31'>31</option>
        </select>
      </div>

      <div class='formGroup'>
        <label for="firstPickDate">First Pick Date:</label>
        <select name='firstPickDateYear'>
            <option value='2020'>2020</option>
            <option value='2021'>2021</option>
            <option value='2022'>2022</option>
            <option value='2023'>2023</option>
            <option value='2024'>2024</option>
            <option value='2025'>2025</option>
            <option value='2026'>2026</option>
          </select>

          <select name='firstPickDateMonth'>
            <option value='01'>Jan</option>
            <option value='02'>Feb</option>
            <option value='03'>Mar</option>
            <option value='04'>Apr</option>
            <option value='05'>May</option>
            <option value='06'>Jun</option>
            <option value='07'>Jul</option>
            <option value='08'>Aug</option>
            <option value='09'>Sept</option>
            <option value='10'>Oct</option>
            <option value='11'>Nov</option>
            <option value='12'>Dec</option>
          </select>

          <select name='firstPlantDateDay'>
            <option value='01'>1</option>
            <option value='02'>2</option>
            <option value='03'>3</option>
            <option value='04'>4</option>
            <option value='05'>5</option>
            <option value='06'>6</option>
            <option value='07'>7</option>
            <option value='08'>8</option>
            <option value='09'>9</option>
            <option value='10'>10</option>
            <option value='11'>11</option>
            <option value='12'>12</option>
            <option value='13'>13</option>
            <option value='14'>14</option>
            <option value='15'>15</option>
            <option value='16'>16</option>
            <option value='17'>17</option>
            <option value='18'>18</option>
            <option value='19'>19</option>
            <option value='20'>20</option>
            <option value='21'>21</option>
            <option value='22'>22</option>
            <option value='23'>23</option>
            <option value='24'>24</option>
            <option value='25'>25</option>
            <option value='26'>26</option>
            <option value='27'>27</option>
            <option value='28'>28</option>
            <option value='29'>29</option>
            <option value='30'>30</option>
            <option value='31'>31</option>
          </select>
        </div>

      <div class='formGroup'>
        <label for="lastPickDate">Last Pick Date:</label>
        <select name='lastPickDateYear'>
            <option value='2020'>2020</option>
            <option value='2021'>2021</option>
            <option value='2022'>2022</option>
            <option value='2023'>2023</option>
            <option value='2024'>2024</option>
            <option value='2025'>2025</option>
            <option value='2026'>2026</option>
          </select>

          <select name='lastPickDateMonth'>
            <option value='01'>Jan</option>
            <option value='02'>Feb</option>
            <option value='03'>Mar</option>
            <option value='04'>Apr</option>
            <option value='05'>May</option>
            <option value='06'>Jun</option>
            <option value='07'>Jul</option>
            <option value='08'>Aug</option>
            <option value='09'>Sept</option>
            <option value='10'>Oct</option>
            <option value='11'>Nov</option>
            <option value='12'>Dec</option>
          </select>

          <select name='lastPickDateDay'>
            <option value='01'>1</option>
            <option value='02'>2</option>
            <option value='03'>3</option>
            <option value='04'>4</option>
            <option value='05'>5</option>
            <option value='06'>6</option>
            <option value='07'>7</option>
            <option value='08'>8</option>
            <option value='09'>9</option>
            <option value='10'>10</option>
            <option value='11'>11</option>
            <option value='12'>12</option>
            <option value='13'>13</option>
            <option value='14'>14</option>
            <option value='15'>15</option>
            <option value='16'>16</option>
            <option value='17'>17</option>
            <option value='18'>18</option>
            <option value='19'>19</option>
            <option value='20'>20</option>
            <option value='21'>21</option>
            <option value='22'>22</option>
            <option value='23'>23</option>
            <option value='24'>24</option>
            <option value='25'>25</option>
            <option value='26'>26</option>
            <option value='27'>27</option>
            <option value='28'>28</option>
            <option value='29'>29</option>
            <option value='30'>30</option>
            <option value='31'>31</option>
          </select>
        </div>

      <button>Submit</button>

    </form>

  </section>

  <section class='imageSection'>
  </section>

</main>

<!-- Footer Area -->
<?php include '../view/footer.php'; ?>
