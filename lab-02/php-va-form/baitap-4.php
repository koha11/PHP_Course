<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <title>Kết quả thi đại học</title>
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

    #ket_qua_thi {
      background: #ffdfe1;
    }

    #tong_diem {
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
function check_va_tinh_tong_diem()
{
  if (isset($_POST['calc'])) {
    $toan = $_POST['toan'];
    $ly = $_POST['ly'];
    $hoa = $_POST['hoa'];

    if (
      is_numeric($toan)
      && is_numeric($ly)
      && is_numeric($hoa)
      && $toan >= 0 && $toan <= 10
      && $ly >= 0 && $ly <= 10
      && $hoa >= 0 && $hoa <= 10
    ) {
      return $toan + $ly + $hoa;
    } else {
      return "Vui lòng nhập điểm số hợp lệ";
    }
  }
}
?>

<body>
  <div class="container">
    <h1>KẾT QUẢ THI ĐẠI HỌC</h1>
    <form method="post" name="ket_qua_thi_dai_hoc" action="">
      <table>
        <tr>
          <td><label for="toan">Toán:</label></td>
          <td><input type="text" id="toan" name="toan" required value="<?php if (isset($_POST['toan'])) {
            echo $_POST['toan'];
          } ?>"></td>
        </tr>

        <tr>
          <td><label for="ly">Lý:</label></td>
          <td><input type="text" id="ly" name="ly" required value="<?php if (isset($_POST['ly'])) {
            echo $_POST['ly'];
          } ?>"></td>
        </tr>

        <tr>
          <td><label for="hoa">Hóa:</label></td>
          <td><input type="text" id="hoa" name="hoa" required value="<?php if (isset($_POST['hoa'])) {
            echo $_POST['hoa'];
          } ?>"></td>
        </tr>

        <tr>
          <td><label for="diem_chuan">Điểm chuẩn:</label></td>
          <td><input type="text" id="diem_chuan" name="diem_chuan" required value="<?php if (isset($_POST['diem_chuan'])) {
            echo $_POST['diem_chuan'];
          } ?>"></td>
        </tr>

        <tr>
          <td><label for="tong_diem">Tổng điểm:</label></td>
          <td><input type="text" id="tong_diem" name="tong_diem" readonly
              value="<?php echo check_va_tinh_tong_diem(); ?>"></td>
        </tr>

        <tr>
          <td><label for="ket_qua_thi">Kết quả thi:</label></td>
          <td><input type="text" id="ket_qua_thi" name="ket_qua_thi" readonly value="<?php
          $tong_diem = check_va_tinh_tong_diem();

          if (is_numeric($tong_diem)) {
            $diem_chuan = $_POST['diem_chuan'];

            if (is_numeric($diem_chuan) && $diem_chuan >= 0 && $diem_chuan <= 30) {
              if ($tong_diem >= $diem_chuan && ($toan * $ly * $hoa) > 0) {
                echo "Đậu";
              } else {
                echo "Rớt";
              }
            } else {
              echo "Vui lòng nhập điểm chuẩn hợp lệ";
            }
          } else {
            echo $tong_diem;
          }

          ?>"></td>
        </tr>
        <tr>
          <td colspan="2" style="text-align: center;"><button type="submit" name="calc">Xem kết quả</button></td>
        </tr>
      </table>

    </form>
  </div>
</body>

</html>