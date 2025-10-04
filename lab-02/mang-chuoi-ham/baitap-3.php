<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <title>Phát sinh mảng và tính toán (UI tĩnh)</title>
  <style>
    body {
      font-family: Tahoma, Arial, sans-serif;
      background: #faf6fb;
    }

    .panel {
      width: 560px;
      margin: 24px auto;
      border: 1px solid #b8b8b8;
      background: #ffeaf4;
      padding: 0 12px 12px;
    }

    .title {
      margin: 0 -12px 12px;
      background: #b01878;
      color: #fff;
      font-weight: 700;
      text-align: center;
      padding: 8px 10px;
      letter-spacing: .5px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    td {
      padding: 6px;
      vertical-align: middle;
    }

    label {
      color: #333;
    }

    input[type="text"] {
      width: 100%;
      box-sizing: border-box;
      padding: 6px 8px;
      border: 1px solid #999;
      border-radius: 3px;
      background: #fff;
    }

    .out {
      background: #ffb1b1;
      color: #4b0000;
      font-weight: 700;
    }

    .btn {
      background: #fff099;
      border: 1px solid #999;
      padding: 6px 12px;
      border-radius: 3px;
      cursor: pointer;
    }

    .note {
      margin-top: 6px;
      color: #b01818;
    }

    .note em {
      color: #333;
      font-style: normal;
    }
  </style>
</head>

<?php
function create_arr($n)
{

  $arr = [];

  for ($i = 0; $i < $n; $i++) {
    $arr[$i] = rand(0, 20);
  }

  return $arr;
}

function print_arr($arr)
{
  return implode(' ', $arr);
}

function calc_sum($arr)
{
  $sum = 0;

  foreach ($arr as $value) {
    $sum += $value;
  }

  return $sum;
}

function find_min($arr)
{
  $min = $arr[0];

  foreach ($arr as $value) {
    if ($value < $min) {
      $min = $value;
    }
  }

  return $min;
}

function find_max($arr)
{
  $max = $arr[0];

  foreach ($arr as $value) {
    if ($value > $max) {
      $max = $value;
    }
  }

  return $max;
}
?>

<body>
  <div class="panel">
    <div class="title">PHÁT SINH MẢNG VÀ TÍNH TOÁN</div>

    <form action="" method="post" name="phat-sinh-mang" id="frm">
      <table>
        <tr>
          <td style="width:175px;"><label for="n">Nhập số phần tử:</label></td>
          <td><input id="n" type="text" name="n" required value="<?php if (isset($_POST['n']))
            echo $_POST['n']; ?>" /></td>
        </tr>
        <tr>
          <td></td>
          <td><button type="submit" name="calc" class="btn">Phát sinh và tính toán</button></td>
        </tr>
        <tr>
          <td><label for="arr">Mảng:</label></td>
          <td><input id="arr" class="out" type="text" value="<?php
          if (isset($_POST['calc'])) {
            $n = $_POST['n'];

            if (is_numeric($n)) {
              if ($n > 0) {
                $arr = create_arr($n);
                echo print_arr($arr);
              } else
                echo "Vui lòng nhập số phần tử > 0";
            } else
              echo "Vui lòng nhập số nguyên hợp lệ";
          }
          ?>" style="background-color: salmon" />
          </td>
        </tr>
        <tr>
          <td><label for="max">GTLN (MAX) trong mảng:</label></td>
          <td><input id="max" class="out" type="text" value="<?php if (isset($_POST['calc']))
            echo find_max($arr); ?>" readonly style="background-color: salmon" /></td>
        </tr>
        <tr>
          <td><label for="min">TTNN (MIN) trong mảng:</label></td>
          <td><input id="min" class="out" type="text" value="<?php if (isset($_POST['calc']))
            echo find_min($arr); ?>" readonly style="background-color: salmon" /></td>
        </tr>
        <tr>
          <td><label for="sum">Tổng mảng:</label></td>
          <td><input id="sum" class="out" type="text" value="<?php if (isset($_POST['calc']))
            echo calc_sum($arr); ?>" readonly style="background-color: salmon" /></td>
        </tr>
      </table>

      <div class="note"><strong>(Ghi chú:)</strong>
        Các phần tử trong mảng sẽ có giá trị từ <em>0</em> đến <em>20</em>
      </div>
    </form>
  </div>
</body>

</html>