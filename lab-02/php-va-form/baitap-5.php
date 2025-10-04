<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <title>Tính tiền karaoke</title>
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

    #tien_thanh_toan {
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
    <h1>TÍNH TIỀN KARAOKE</h1>
    <form method="post" name="tinh_tien_karaoke" action="">
      <table>
        <tr>
          <td><label for="gio_bat_dau">Giờ bắt đầu:</label></td>
          <td><input type="text" id="gio_bat_dau" name="gio_bat_dau" required value="<?php if (isset($_POST['gio_bat_dau'])) {
            echo $_POST['gio_bat_dau'];
          } ?>"></td>
          <td>(h)</td>
        </tr>

        <tr>
          <td><label for="gio_ket_thuc">Giờ kết thúc:</label></td>
          <td><input type="text" id="gio_ket_thuc" name="gio_ket_thuc" required value="<?php if (isset($_POST['gio_ket_thuc'])) {
            echo $_POST['gio_ket_thuc'];
          } ?>"></td>
          <td>(h)</td>
        </tr>

        <tr>
          <td><label for="tien_thanh_toan">Tiền thanh toán:</label></td>
          <td><input type="text" id="tien_thanh_toan" name="tien_thanh_toan" readonly value="<?php
          if (isset($_POST['calc'])) {
            $gio_bat_dau = $_POST['gio_bat_dau'];
            $gio_ket_thuc = $_POST['gio_ket_thuc'];

            if (
              is_numeric($gio_bat_dau)
              && is_numeric($gio_ket_thuc)
              && $gio_bat_dau >= 10
              && $gio_bat_dau <= 24
              && $gio_ket_thuc >= 10
              && $gio_ket_thuc <= 24
            ) {

              if ($gio_ket_thuc > $gio_bat_dau) {
                $so_tien = 0;
                $so_gio = $gio_ket_thuc - $gio_bat_dau;

                if ($gio_bat_dau >= 17)
                  $so_tien = $so_gio * 45000;
                else {
                  $so_tien = ($gio_ket_thuc <= 17) ?
                    $so_gio * 20000 :
                    (17 - $gio_bat_dau) * 20000 + ($gio_ket_thuc - 17) * 45000;
                }

                echo $so_tien;

              } else {
                echo "Giờ kết thúc phải lớn hơn giờ bắt đầu";
              }

            } else {
              echo "Vui lòng nhập giờ hợp lệ";
            }
          }

          ?>"></td>
          <td>(VNĐ)</td>
        </tr>
        <tr>
          <td colspan="2" style="text-align: center;"><button type="submit" name="calc">Xem kết quả</button></td>
        </tr>
      </table>

    </form>
  </div>
</body>

</html>