<?php include '../view/header.php'; ?>
<h1>Test Page</h1>

<form>
  <div class="form-group">
    <input type="hidden" name="action" value="CreateRecordSubmit" />
  </div>

  <div class="form-group">
    <label for="Bed">Bed:</label>
    <input placeholder='Bed' type='text' name='bed'>
  </div>

  <div class="form-group">
    <label for="plantName">Plant Name:</label>
    <select name="plantName">
      <?php foreach ($plants as $plant) : ?>
        <option value="<?php echo $plant->getplantID(); ?>"><?php echo $plant->getplantName() ?></option>
      <?php endforeach; ?>
    </select>
  </div>

  <div class="form-group">
    <label for="location">Location:</label>
    <input placeholder='Location' type='text' name='location'>
  </div>

  <div class="form-group">
    <label for="timePeriod">Time Period: </label>
    <select name="timePeriod">
      <option value='Spring'>Spring</option>
      <option value='Summer'>Summer</option>
      <option value='Winter'>Winter</option>
      <option value='Fall'>Fall</option>
    </select>
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>
