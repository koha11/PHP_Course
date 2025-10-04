<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <title>Thay thế </title>
  <style>
    body {
      font-family: Tahoma, Arial, sans-serif;
      background: #fff4fb;
    }

    .panel {
      width: 760px;
      margin: 26px auto;
      border: 1px solid #b7b7b7;
      background: #ffdff1;
      padding: 0 12px 12px;
    }

    .title {
      margin: 0 -12px 12px;
      background: #920d57;
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
      border: 1px solid #999;
      border-radius: 3px;
      background: #fff;
    }

    .btn {
      padding: 6px 12px;
      background: #fff09a;
      border: 1px solid #888;
      border-radius: 3px;
      cursor: pointer;
    }

    .out {
      background: #ffb7b0;
      color: #4b0000;
      font-weight: 700;
    }

    .note {
      margin-top: 8px;
    }

    .note b {
      color: #c11a1a;
    }
  </style>
</head>

<?php

$arr = explode(",", $_POST["arr"]);
$oldVal = $_POST['oldVal'];
$newVal = $_POST['newVal'];

$error = "";

foreach ($arr as $value) {
  if (!is_numeric($value)) {
    $error = "Mảng không hợp lệ";
    break;
  }
}

if ($error === "") {
  $error = is_numeric($oldVal) && is_numeric($newVal) ? "" : "Giá trị thay thế không hợp lệ";
}



function print_arr($arr)
{
  return implode(' ', $arr);
}

function replace_arr($arr, $old_val, $new_val)
{
  foreach ($arr as $key => $value) {
    if ($value == $old_val) {
      $arr[$key] = $new_val;
    }
  }

  return $arr;
}

?>

<body>
  <div class="panel">
    <div class="title">THAY THẾ</div>

    <form action="" method="post" name="thay-the">
      <table>
        <tr>
          <td style=" width:180px;"><label for="arr">Nhập các phần tử:</label></td>
          <td><input id="arr" type="text" name="arr" required value="<?php
          if (isset($_POST['arr']))
            echo $_POST['arr'];
          ?>" /></td>
        </tr>
        <tr>
          <td><label for="oldVal">Giá trị cần thay thế:</label></td>
          <td style="max-width:240px;"><input id="oldVal" required type="text" name="oldVal" value="<?php
          if (isset($_POST['oldVal']))
            echo $_POST['oldVal'];
          ?>" style="max-width:240px;" />
          </td>
        </tr>
        <tr>
          <td><label for="newVal">Giá trị thay thế:</label></td>
          <td style="max-width:240px;"><input id="newVal" required type="text" name="newVal" value="<?php
          if (isset($_POST['newVal']))
            echo $_POST['newVal'];
          ?>" style="max-width:240px;" />
          </td>
        </tr>
        <tr>
          <td></td>
          <td><button type="submit" class="btn" name="replace">Thay thế</button></td>
        </tr>

        <tr>
          <td><label for="oldArr">Mảng cũ:</label></td>
          <td><input id="oldArr" class="out" type="text" value="<?php
          if (isset($_POST['replace']))
            echo print_arr($arr);
          ?>" readonly style="background-color: salmon" /></td>
        </tr>
        <tr>
          <td><label for="newArr">Mảng sau khi thay thế:</label></td>
          <td><input id="newArr" class="out" type="text" value="<?php
          if (isset($_POST['replace'])) {
            if ($error === "") {
              $new_arr = replace_arr($arr, $oldVal, $newVal);

              echo print_arr($new_arr);
            } else
              echo $error;
          }
          ?>" readonly style="background-color: salmon" /></td>
        </tr>
      </table>

      <div class="note"><b>(Ghi chú:)</b> Các phần tử trong mảng sẽ cách nhau bằng dấu “,”</div>
    </form>
  </div>
</body>

</html>