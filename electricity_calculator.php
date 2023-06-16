<!DOCTYPE html>
<html>
<head>
  <title>Electricity Consumption Calculator</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Electricity Consumption Calculator</h1>
    <form method="post" action="">
      <div class="form-group">
        <label for="voltage">Voltage (V)</label>
        <input type="double" class="form-control" id="voltage" name="voltage" required>
      </div>
      <div class="form-group">
        <label for="current">Current (A)</label>
        <input type="double" class="form-control" id="current" name="current" required>
      </div>
      <div class="form-group">
        <label for="rate">Current Rate (per kWh)</label>
        <input type="double" class="form-control" id="rate" name="rate" required>
      </div>
      <button type="submit" class="btn btn-primary">Calculate</button>
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $voltage = $_POST['voltage'];
      $current = $_POST['current'];
      $rate = $_POST['rate'];

      // Calculate power in Watts
      $power = $voltage * $current;

      // Calculate energy in kilowatt-hours
      $energy = ($power * 1) / 1000;

      // Calculate total charge
      $totalCharge = $energy * ($rate / 100);

      echo "<h2>Results</h2>";
      echo "<p>Power: " . $power . " Watts</p>";
      echo "<p>Energy: " . $energy . " kWh</p>";
      echo "<p>Total Charge: RM" . $totalCharge . "</p>";
    }
    ?>
  </div>
</body>
</html>
