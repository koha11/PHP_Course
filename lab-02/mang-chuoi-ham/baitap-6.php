<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <title>Sắp xếp mảng</title>
  <style>
    body {
      font-family: Tahoma, Arial, sans-serif;
      background: #e9f4f3;
    }

    .panel {
      width: 760px;
      margin: 26px auto;
      border: 1px solid #9cb3b0;
      background: #d1e6e3;
      padding: 0 12px 12px;
    }

    .title {
      margin: 0 -12px 12px;
      background: #4e8f86;
      color: #fff;
      font-weight: 700;
      text-align: center;
      padding: 8px 10px;
      letter-spacing: .6px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    td {
      padding: 8px 6px;
      vertical-align: middle;
    }

    label {
      color: #333;
    }

    input[type="text"] {
      width: 100%;
      box-sizing: border-box;
      padding: 6px 8px;
      border: 1px solid #7fa4a0;
      border-radius: 3px;
      background: #fff;
    }

    .btn {
      padding: 6px 14px;
      background: #f0f3f6;
      border: 1px solid #8a8f93;
      border-bottom-color: #5e666b;
      border-right-color: #5e666b;
      border-radius: 3px;
      cursor: pointer;
    }

    .section-title {
      color: #b93434;
      font-weight: 700;
    }

    .asc {
      background: #d7f6ff;
    }

    .desc {
      background: #f2f7fb;
    }

    .note {
      margin-top: 8px;
      color: #b93434;
    }
  </style>
</head>

<?php

$arr = explode(",", $_POST["arr"]);
$error = "";

foreach ($arr as $value) {
  if (!is_numeric($value)) {
    $error = "Mảng không hợp lệ";
    break;
  }
}


function print_arr($arr)
{
  return implode(', ', $arr);
}

function hoan_vi(&$a, &$b)
{
  $temp = $a;
  $a = $b;
  $b = $temp;
}

function sap_xep_tang($arr)
{
  $n = count($arr);

  for ($i = 0; $i < $n - 1; $i++) {
    for ($j = $i + 1; $j < $n; $j++) {
      if ($arr[$i] > $arr[$j]) {
        hoan_vi($arr[$i], $arr[$j]);
      }
    }
  }

  return $arr;
}

function sap_xep_giam($arr)
{
  $n = count($arr);

  for ($i = 0; $i < $n - 1; $i++) {
    for ($j = $i + 1; $j < $n; $j++) {
      if ($arr[$i] < $arr[$j]) {
        hoan_vi($arr[$i], $arr[$j]);
      }
    }
  }

  return $arr;
}

?>

<body>
  <div class="panel">
    <div class="title">SẮP XẾP MẢNG</div>

    <form action="" method="post" name="sap-xep-mang">
      <table>
        <tr>
          <td style="width:150px;"><label for="arr">Nhập mảng:</label></td>
          <td><input id="arr" type="text" name="arr" value="<?php
          if (isset($_POST['arr']))
            echo $_POST['arr'];
          ?>" /></td>
          <td style="width:40px; color:#c23;">(*)</td>
        </tr>
        <tr>
          <td></td>
          <td><button type="submit" name="sort" class="btn">Sắp xếp tăng/giảm</button></td>
          <td></td>
        </tr>
        <tr>
          <td class="section-title">Sau khi sắp xếp:</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td><label for="asc">Tăng dần:</label></td>
          <td><input id="asc" class="asc" type="text" value="<?php
          if (isset($_POST['sort'])) {
            if ($error === "") {
              $asc_arr = sap_xep_tang($arr);
              echo print_arr($asc_arr);
            } else
              echo $error;
          }
          ?>" readonly style="background-color: aquamarine" /></td>
          <td></td>
        </tr>
        <tr>
          <td><label for="desc">Giảm dần:</label></td>
          <td><input id="desc" class="desc" type="text" value="<?php
          if (isset($_POST['sort'])) {
            if ($error === "") {
              $desc_arr = sap_xep_giam($arr);
              echo print_arr($desc_arr);
            } else
              echo $error;
          }
          ?>" readonly style="background-color: aquamarine" /></td>
          <td></td>
        </tr>
      </table>

      <div class="note">(*) Các số được nhập cách nhau bằng dấu “,”</div>
    </form>
  </div>
</body>

</html>