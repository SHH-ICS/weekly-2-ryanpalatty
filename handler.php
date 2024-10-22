<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <title>Calculation Results</title>
</head>

<body>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $diameter = (float) $_POST['diameter'];
    if (is_numeric($diameter) && $diameter > 0) {
      $radius = $diameter / 2;
      $area = pi() * pow($radius, 2);
      $circumference = pi() * $diameter;

      echo '<div class="mdl-card mdl-shadow--2dp" style="padding: 16px; max-width: 400px; margin: auto;">';
      echo '<div class="mdl-card__title"><h2 class="mdl-card__title-text">Results</h2></div>';
      echo '<div class="mdl-card__supporting-text">';
      echo "Area: " . htmlspecialchars($area) . "<br>";
      echo "Circumference: " . htmlspecialchars($circumference) . "<br>";
      echo '</div>'; // Closing supporting text div
      echo '</div>'; // Closing card div
    } else {
      echo '<div class="mdl-card mdl-shadow--2dp" style="padding: 16px; max-width: 400px; margin: auto;">';
      echo '<div class="mdl-card__title"><h2 class="mdl-card__title-text">Error</h2></div>';
      echo '<div class="mdl-card__supporting-text">';
      echo "Please enter a valid positive number for the diameter.";
      echo '</div>'; // Closing supporting text div
      echo '</div>'; // Closing card div
    }
  }
  ?>

  <div style="text-align: center; padding-top: 20px;">
    <a href="index.html" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Back</a>
  </div>

</body>

</html>