<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Welcome Page</title>
  </head>

  <body>
    
    <?php
    $diameter = (float) $_POST['diameter'];
    if (is_numeric($diameter) && $diameter > 0) {
      $radius = $diameter / 2;
      $area = pi() * pow($radius, 2);
      $circumference = pi() * $diameter;

      echo "Results";
      echo "Area: " . htmlspecialchars($area) . "<br>";
      echo "Circumference: " . htmlspecialchars($circumference) . "<br>";

    ?>
    
  </body>
  
</html>
