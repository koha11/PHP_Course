<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="get">
    <label for="n">Nhập n: </label>
    <input required id="n" name="n" type="text" value="<?php if (isset($_GET['n']))
      echo $_GET['n']; ?>">
    <button type="submit">Thực hiện</button>
  </form>

  <?php
  if (isset($_GET['n'])) {
    echo "  <h3>Kết quả:</h3>";
    $n = $_GET['n'];

    if ($n < 0) {
      echo "n không là số nguyên dương";
      return;
    }

    $rand_arr = [];

    for ($i = 0; $i < $n; $i++)
      array_push($rand_arr, rand(-100, 100));


    echo "Mảng ngẫu nhiên có phần tử: " . implode(", ", $rand_arr) . "<br>";

    $count_chan = 0;
    $count_nho_hon_100 = 0;
    $sum_am = 0;
    $bang_0_index_arr = [];

    for ($i = 0; $i < count($rand_arr); $i++) {
      if ($rand_arr[$i] % 2 == 0)
        $count_chan++;
      if ($rand_arr[$i] < 100)
        $count_nho_hon_100++;

      if ($rand_arr[$i] < 0)
        $sum_am += $rand_arr[$i];

      if ($rand_arr[$i] == 0)
        array_push($bang_0_index_arr, $i);
    }

    echo "Số phần tử chẵn trong mảng: " . $count_chan . "<br>";
    echo "Số phần tử nhỏ hơn 100 trong mảng: " . $count_nho_hon_100 . "<br>";
    echo "Tổng các phần tử âm trong mảng: " . $sum_am . "<br>";
    echo "Các chỉ số có giá trị bằng 0: " . (count($bang_0_index_arr) == 0 ? "không có" : implode(", ", $bang_0_index_arr)) . "<br>";

    sort($rand_arr);
    echo "Mảng sau khi sắp xếp tăng dần: " . implode(", ", $rand_arr) . "<br>";
  }
  ?>
</body>

</html>