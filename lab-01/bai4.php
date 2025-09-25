<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <p>Tính tổ hợp, chỉnh hợp với k,n ngẫu nhiên</p>
  <?php
  $n = rand(1, 100);
  $k = rand(1, 100);


  function giaiThua($num)
  {
    if ($num == 0 || $num == 1) {
      return 1;
    }

    $result = 1;

    for ($i = 2; $i <= $num; $i++) {
      $result *= $i;
    }

    return $result;
  }

  function toHop($n, $k)
  {
    if ($k >= $n) {
      return 0;
    }
    return giaiThua($n) / (giaiThua($k) * giaiThua($n - $k));
  }

  function chinhHop($n, $k)
  {
    if ($k >= $n) {
      return 0;
    }
    return giaiThua($n) / giaiThua($n - $k);
  }

  echo "k = $k, n = $n <br>";

  if ($k >= $n) {
    echo "k phải nhỏ hơn n";
  } else {
    echo $n . "A" . $k . " = " . chinhHop($n, $k) . "<br>";
    echo $n . "C" . $k . " = " . toHop($n, $k) . "<br>";
  }
  ?>


</body>

</html>