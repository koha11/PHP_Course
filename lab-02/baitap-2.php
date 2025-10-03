<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <title>Diện tích và Chu vi hình tròn</title>
  <style>
    body {
      font-family: Tahoma, Arial, sans-serif;
      background: #faf7ea;
    }

    .container {
      width: 380px;
      margin: 30px auto;
      padding: 14px;
      background: #fff3c6;
      border: 1px solid #d8caa0;
      border-radius: 4px;
    }

    h1 {
      text-align: center;
      font-size: 22px;
      font-weight: bold;
      font-style: italic;
      color: #c16912;
      margin: 0 0 14px 0;
      background: #ffe7a0;
      padding: 6px;
      border-radius: 3px;
    }

    table {
      width: 100%;
    }

    td {
      padding: 6px;
    }

    label {
      font-weight: normal;
      color: #333;
    }

    input[type="text"],
    input[readonly] {
      width: 100%;
      padding: 6px;
      border: 1px solid #bbb;
      border-radius: 3px;
      box-sizing: border-box;
    }

    #area {
      background: #ffdfe1;
    }

    #perimeter {
      background: #ffdfe1;
    }

    .actions {
      text-align: left;
      padding: 8px;
    }

    button {
      padding: 6px 12px;
      border: 1px solid #8a8a8a;
      background: #e6e6e6;
      border-radius: 3px;
      cursor: pointer;
    }
  </style>
</head>

<?php
define("PI", 3.14);
?>

<body>
  <div class="container">
    <h1>DIỆN TÍCH VÀ CHU VI HÌNH TRÒN</h1>
    <form method="post" name="tinh_dien_tich_va_chu_vi_ht" action="">
      <table>
        <tr>
          <td><label for="radius">Bán kính:</label></td>
          <td><input type="text" id="radius" name="radius" required value="<?php if (isset($_POST['radius'])) {
            echo $_POST['radius'];
          } ?>"></td>
        </tr>
        <tr>
          <td><label for="area">Diện tích:</label></td>
          <td><input type="text" id="area" name="area" readonly value="<?php if (isset($_POST['calc'])) {
            $radius = $_POST['radius'];

            if (is_numeric($radius) && $radius > 0) {
              echo PI * pow($radius, 2);
            } else {
              echo "Vui lòng nhập đúng định dạng";
            }
          } ?>"></td>
        </tr>
        <tr>
          <td><label for="perimeter">Chu vi:</label></td>
          <td><input type="text" id="perimeter" name="perimeter" readonly value="<?php if (isset($_POST['calc'])) {
            $radius = $_POST['radius'];

            if (is_numeric($radius) && $radius > 0) {
              echo 2 * PI * $radius;
            } else {
              echo "Vui lòng nhập đúng định dạng";
            }
          } ?>"></td>
        </tr>
        <tr>
          <td colspan="2" style="text-align: center;"><button type="submit" name="calc">Tính</button></td>
        </tr>
      </table>

    </form>
  </div>
</body>

</html>