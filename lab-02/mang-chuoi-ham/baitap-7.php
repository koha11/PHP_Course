<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <title>Tính năm âm lịch (UI tĩnh)</title>
  <style>
    body {
      font-family: Tahoma, Arial, sans-serif;
      background: #bde4ff;
    }

    .panel {
      width: 520px;
      margin: 26px auto;
      border: 1px solid #4a92c5;
      background: #cce9ff;
      padding: 0 12px 12px;
    }

    .title {
      margin: 0 -12px 12px;
      background: #1875c8;
      color: #fff;
      font-weight: 700;
      text-align: center;
      padding: 8px 10px;
      letter-spacing: .5px;
      font-size: 20px;
      font-style: italic;
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
      color: #000;
      font-weight: 600;
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
      border: 1px solid #666;
      background: #fff09c;
      border-radius: 3px;
      cursor: pointer;
    }

    .out {
      background: #fff3cd;
      color: #c00;
      font-weight: 700;
    }

    .imgbox {
      text-align: center;
      margin-top: 10px;
    }

    img {
      max-width: 400px;
    }
  </style>
</head>

<?php
$year = $_POST["year"];

$error = "";

if (!is_numeric($year) || $year < 1) {
  $error = "Vui lòng nhập năm hợp lệ";
}


$mang_can = array("Quý", "Giáp", "Ất", "Bính", "Đinh", "Ất", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm");

$mang_chi = array("Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất");

$mang_hinh = array("hoi.jpg", "ty.png", "suu.png", "dan.png", "mao.png", "thin.png", "ty2.png", "ngo.png", "mui.png", "than.png", "dau.png", "tuat.png");

$year = $year - 3;
$can = $year % 10;
$chi = $year % 12;
$nam_am_lich = $mang_can[$can] . " " . $mang_chi[$chi];
$hinh = $mang_hinh[$chi];

?>

<body>
  <div class="panel">
    <div class="title">TÍNH NĂM ÂM LỊCH</div>

    <form action="" method="post" name="view-nam-am-lich">
      <table>
        <tr>
          <td style="width:160px;"><label for="solar">Năm dương lịch</label> <input id="solar" type="text" name="year"
              required value="<?php if (isset($_POST["year"]))
                echo $_POST["year"]; ?>" /></td>
          <td style="width:60px; text-align:center;"><button type="submit" class="btn" name="view">=></button></td>
          <td style="width:160px;"> <label for="lunar">Năm âm lịch</label><input id="lunar" class="out" type="text"
              value="<?php
              if (isset($_POST["view"]))
                if ($error == "")
                  echo $nam_am_lich;
                else
                  echo $error;
              ?>" readonly /></td>
        </tr>
      </table>
      <div class="imgbox">
        <img src="<?php if (isset($_POST["view"]))
          echo "12-con-giap/" . $hinh; ?>" alt="<?php if (isset($_POST["view"]))
                echo $hinh; ?>" />
      </div>
    </form>
  </div>
</body>

</html>