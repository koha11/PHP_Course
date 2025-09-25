<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bài 3</title>
</head>

<body>
  <?php
  echo "<h1 style='text-align:center;'>Bảng cửu chương</h1>";
  echo "<div style='display:flex; justify-content:center; margin-bottom: 20px;'>";
  echo "<table style='border-collapse:collapse; font-family:system-ui, Arial; text-align:right; border: 1px solid black; background-color: gray; color: white'>";

  echo "<tr>";
  for ($x = 1; $x <= 10; $x++) {
    echo "<td style='border: 1px solid black; padding: 8px; text-align:center; font-size: 20px; font-weight: 800'>" . $x . "x" . "</td>";
  }
  echo "</tr>";

  for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
      $res = $i * $j;
      echo "<td style='border: 1px solid black; padding: 8px; text-align:center;" . ($res % 2 == 0 ? " background-color: green;" : "background-color: black") . "'>" . $j . " x " . $i . " = " . $res . "</td>";
    }
    echo "</tr>";
  }

  echo "</table></div>";

  ?>
</body>

</html>