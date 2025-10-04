<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <title>Nhập và tính trên dãy số</title>
  <style>
    body {
      font-family: Tahoma, Arial, sans-serif;
      background: #f2f9f7;
    }

    .panel {
      width: 480px;
      margin: 24px auto;
      padding: 10px 14px;
      border: 1px solid #999;
      background: #d2e9e6;
    }

    .title {
      text-align: center;
      font-size: 18px;
      font-weight: bold;
      color: #fff;
      background: #2a7c7b;
      padding: 6px;
      margin: -10px -14px 14px -14px;
    }

    table {
      width: 100%;
    }

    td {
      padding: 6px;
      vertical-align: middle;
    }

    label {
      font-weight: normal;
    }

    input[type="text"],
    input[readonly] {
      width: 100%;
      padding: 5px 6px;
      border: 1px solid #666;
      border-radius: 2px;
      box-sizing: border-box;
    }

    #sum {
      background: #eaffd0;
      color: #c33;
      font-weight: bold;
    }

    .btn {
      background: #ffe870;
      border: 1px solid #999;
      border-radius: 3px;
      padding: 5px 10px;
      cursor: pointer;
    }

    .note {
      font-size: 13px;
      color: #c33;
      margin-top: 8px;
    }
  </style>
</head>

<body>
  <div class="panel">
    <div class="title">NHẬP VÀ TÍNH TRÊN DÃY SỐ</div>
    <form action="" method="post" name="tinh-day-so" id="frm">
      <table>
        <tr>
          <td><label for="numbers">Nhập dãy số:</label></td>
          <td><input type="text" id="numbers" name="numbers" value="<?php if (isset($_POST['numbers']))
            echo $_POST['numbers']; ?>" required></td>
          <td style="color:red;">(*)</td>
        </tr>
        <tr>
          <td></td>
          <td><button type="submit" name="calc" class="btn">Tổng dãy số</button></td>
          <td></td>
        </tr>
        <tr>
          <td><label for="sum">Tổng dãy số:</label></td>
          <td><input type="text" id="sum" readonly style="background-color: aquamarine;" value="<?php
          if (isset($_POST['calc'])) {
            $numbers = $_POST['numbers'];
            $arr = explode(',', $numbers);
            $error = '';

            if (count($arr) == 0)
              $error = "vui lòng nhập đúng định dạng";

            if ($error == "")
              foreach ($arr as $num) {
                if (!is_numeric($num)) {
                  $error = "vui lòng nhập đúng định dạng";
                }
              }

            if ($error == '') {
              $sum = 0;
              foreach ($arr as $num) {
                $sum += (int) $num;
              }
              echo $sum;
            } else
              echo $error;

          }
          ?>"></td>
          <td></td>
        </tr>
      </table>
      <div class="note">(*) Các số được nhập cách nhau bằng dấu ","</div>
    </form>
  </div>
</body>

</html>