<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <title>Phép tính trên hai số</title>
  <style>
    body {
      font-family: Tahoma, Arial, sans-serif;
      background: #f7f9ff;
    }

    .card {
      width: 520px;
      margin: 28px auto;
      padding: 14px 16px;
      background: #ffffff;
      border: 1px solid #cfd6e0;
      border-radius: 4px;
      box-shadow: 0 1px 0 rgba(0, 0, 0, .06);
    }

    .title {
      margin: 0 0 10px;
      text-align: center;
      letter-spacing: .5px;
      color: #2a5db0;
      font-weight: 700;
      font-size: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    td {
      padding: 6px 4px;
      vertical-align: middle;
    }

    .lbl {
      color: #a34722;
      font-weight: 700;
    }

    .numlbl {
      color: #1d56c0;
      font-weight: 700;
    }

    .ops label {
      margin-right: 14px;
    }

    .ops {
      color: #cf2a1a;
    }

    /* Chia */
    input[type="text"] {
      width: 100%;
      box-sizing: border-box;
      padding: 6px 8px;
      border: 1px solid #9bb2d1;
      border-radius: 3px;
      background: #f6fbff;
    }

    .actions {
      padding-left: 116px;
    }

    button {
      padding: 5px 12px;
      border: 1px solid #6c6c6c;
      border-bottom-color: #3f3f3f;
      border-right-color: #3f3f3f;
      background: #e6e6e6;
      border-radius: 3px;
      cursor: pointer;
      font-weight: 600;
    }
  </style>
</head>

<?php
function backToPreviousPage()
{
  echo '/><script>window.history.back(-1);</script>';
}
?>

<body>
  <div class="card">
    <div class="title">PHÉP TÍNH TRÊN HAI SỐ</div>

    <form>
      <table>
        <tr>
          <td class="lbl">Chọn phép tính :</td>
          <td class="ops">
            <?php
            $op = $_GET['op'];

            switch ($op) {
              case 'cong':
                echo "Cộng";
                break;
              case 'tru':
                echo "Trừ";
                break;
              case 'nhan':
                echo "Nhân";
                break;
              case 'chia':
                echo "Chia";
                break;
              default:
                echo "Phép tính không hợp lệ";
                break;
            }

            ?>
          </td>
        </tr>
        <tr>
          <td class="numlbl">Số thứ nhất :</td>
          <td><input readonly type="text" name="num1" value=<?php echo isset($_GET['num1']) ? $_GET['num1'] : ''; ?> />
          </td>
        </tr>
        <tr>
          <td class="numlbl">Số thứ nhì :</td>
          <td><input readonly type="text" name="num2" value=<?php echo isset($_GET['num2']) ? $_GET['num2'] : ''; ?> />
          </td>
        </tr>
        <tr>
          <td class="numlbl">Kết quả :</td>
          <td><input readonly type="text" name="result" value=<?php

          if (isset($_GET['calc'])) {
            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];

            if (is_numeric($num1) && is_numeric($num2)) {
              switch ($op) {
                case 'cong':
                  echo $num1 + $num2;
                  break;
                case 'tru':
                  echo $num1 - $num2;
                  break;
                case 'nhan':
                  echo $num1 * $num2;
                  break;
                case 'chia':
                  if ($num2 != 0) {
                    echo $num1 / $num2;
                  } else {
                    backToPreviousPage();
                  }
                  break;
                default:
                  backToPreviousPage();
                  break;
              }
            } else {
              backToPreviousPage();
            }
          }

          ?> /></td>
        </tr>
        <tr>
          <td class="" style="text-align: center;" colspan="2">
            <a href="javascript:window.history.back(-1);">Quay lại trang trước</a>
          </td>
        </tr>
      </table>
    </form>
  </div>
</body>

</html>