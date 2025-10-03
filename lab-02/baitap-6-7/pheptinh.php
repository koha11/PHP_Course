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

<body>
  <div class="card">
    <div class="title">PHÉP TÍNH TRÊN HAI SỐ</div>

    <form method="get" action="ketquapheptinh.php">
      <table>
        <tr>
          <td class="lbl">Chọn phép tính :</td>
          <td class="ops">
            <label class="cong"><input type="radio" name="op" value="cong" checked /> Cộng</label>
            <label class="tru"><input type="radio" name="op" value="tru" /> Trừ</label>
            <label class="nhan"><input type="radio" name="op" value="nhan" /> Nhân</label>
            <label class="chia"><input type="radio" name="op" value="chia" /> Chia</label>
          </td>
        </tr>
        <tr>
          <td class="numlbl">Số thứ nhất :</td>
          <td><input type="text" name="num1" value="" /></td>
        </tr>
        <tr>
          <td class="numlbl">Số thứ nhì :</td>
          <td><input type="text" name="num2" value="" /></td>
        </tr>
        <tr>
          <td class="actions" style="text-align: center;" colspan="2">
            <button type="submit" name="calc">Tính</button>
          </td>
        </tr>
      </table>
    </form>
  </div>
</body>

</html>