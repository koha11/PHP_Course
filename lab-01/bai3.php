<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bài 3</title>
</head>

<body style=";">
  <?php
  $n = rand(-100, 100);

  echo "<form method='get'>
  <button>Click to refresh</button></form><br>";


  function get_uoc_so($n)
  {
    $result = [1];
    for ($i = 2; $i <= $n; $i++)
      if ($n % $i == 0)
        array_push($result, $i);

    return $result;
  }

  function check_snt($n)
  {
    if (count(get_uoc_so($n)) == 2)
      return true;

    return false;
  }

  function calc_tong_snt($n)
  {
    $tong = 0;
    echo "Các số nguyên tố bé hơn " . $n . ": ";

    for ($i = 2; $i < $n; $i++)
      if (check_snt($i)) {
        echo $i . " ";
        $tong += $i;
      }

    echo "<br>";
    return $tong;
  }

  function check_chinh_phuong($n)
  {
    $sqrt = (int) sqrt($n);
    return $sqrt * $sqrt == $n;
  }

  function array_join($arr)
  {
    $res = "";
    foreach ($arr as $a) {
      $res .= $a . ", ";
    }
    return $res;
  }

  echo "n = " . $n . "<br>";
  if ($n > 0) {
    echo "Các ước số của " . $n . " là: " . array_join(get_uoc_so($n)) . "<br>";
    echo check_snt($n) ? $n . " là số nguyên tố" : $n . " không phải số nguyên tố";
    echo "<br>";
    echo "Tổng các số nguyên tố bé hơn " . $n . " là: " . calc_tong_snt($n) . "<br>";
    echo check_chinh_phuong($n) ? $n . " là số chính phương" : $n . " không phải số chính phương";
  } else
    echo "n <= 0";


  ?>
</body>

</html>