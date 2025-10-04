<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <title>Thanh toán tiền điện</title>
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

    #so_tien_thanh_toan {
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
?>

<body>
  <div class="container">
    <h1>THANH TOÁN TIỀN ĐIỆN</h1>
    <form method="post" name="thanh_toan_tien_dien" action="">
      <table>
        <tr>
          <td><label for="chu_ho">Tên chủ hộ:</label></td>
          <td><input type="text" id="chu_ho" name="chu_ho" required value="<?php if (isset($_POST['chu_ho'])) {
            echo $_POST['chu_ho'];
          } ?>"></td>
        </tr>
        <tr>
          <td><label for="chi_so_cu">Chỉ số cũ:</label></td>
          <td><input type="text" id="chi_so_cu" name="chi_so_cu" required value="<?php if (isset($_POST['chi_so_cu'])) {
            echo $_POST['chi_so_cu'];
          } ?>"></td>
          <td>(Kw)</td>
        </tr>
        <tr>
          <td><label for="chi_so_moi">Chỉ số mới:</label></td>
          <td><input type="text" id="chi_so_moi" name="chi_so_moi" required value="<?php if (isset($_POST['chi_so_moi'])) {
            echo $_POST['chi_so_moi'];
          } ?>"></td>
          <td>(Kw)</td>
        </tr>
        <tr>
          <td><label for="don_gia">Đơn giá:</label></td>
          <td><input type="text" id="don_gia" name="don_gia" required value="<?php if (isset($_POST['don_gia'])) {
            echo $_POST['don_gia'];
          } else
            echo "20000" ?>"></td>
            <td>(VNĐ)</td>
          </tr>
          <tr>
            <td><label for="so_tien_thanh_toan">Số tiền thanh toán:</label></td>
            <td><input type="text" id="so_tien_thanh_toan" name="so_tien_thanh_toan" readonly value="<?php if (isset($_POST['calc'])) {
            $chi_so_moi = $_POST['chi_so_moi'];
            $chi_so_cu = $_POST['chi_so_cu'];
            $don_gia = $_POST['don_gia'];

            if (
              is_numeric($chi_so_moi)
              && is_numeric($chi_so_cu)
              && is_numeric($don_gia)
              && $chi_so_moi >= $chi_so_cu
              && $don_gia > 0
              && $chi_so_moi >= 0
              && $chi_so_cu >= 0
            ) {
              echo ($chi_so_moi - $chi_so_cu) * $don_gia;
            } else {
              echo "Vui lòng nhập đúng định dạng";
            }
          } ?>"></td>
          <td>(VNĐ)</td>
        </tr>
        <tr>
          <td colspan="2" style="text-align: center;"><button type="submit" name="calc">Tính</button></td>
        </tr>
      </table>

    </form>
  </div>
</body>

</html>