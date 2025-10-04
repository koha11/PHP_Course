<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <title>Diện tích hình chữ nhật</title>
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

<body>
  <div class="container">
    <h1>DIỆN TÍCH HÌNH CHỮ NHẬT</h1>
    <form method="post" name="tinh_dien_tich_hcn" action="">
      <table>
        <tr>
          <td><label for="length">Chiều dài:</label></td>
          <td><input type="text" id="length" name="length" required value="<?php if (isset($_POST['length'])) {
            echo $_POST['length'];
          } ?>"></td>
        </tr>
        <tr>
          <td><label for="width">Chiều rộng:</label></td>
          <td><input type="text" id="width" name="width" required value="<?php if (isset($_POST['width'])) {
            echo $_POST['width'];
          } ?>"></td>
        </tr>
        <tr>
          <td><label for="area">Diện tích:</label></td>
          <td><input type="text" id="area" name="area" readonly value="<?php if (isset($_POST['calc'])) {
            $length = $_POST['length'];
            $width = $_POST['width'];

            if (is_numeric($length) && is_numeric($width) && $length > 0 && $width > 0) {
              echo ($length ?? 0) * ($width ?? 0);
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