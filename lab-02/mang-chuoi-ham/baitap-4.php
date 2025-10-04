<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8" />
  <title>Tìm kiếm</title>
  <style>
    body {
      font-family: Tahoma, Arial, sans-serif;
      background: #eef6f3;
    }

    .panel {
      width: 620px;
      margin: 26px auto;
      border: 1px solid #9aa7a2;
      background: #d8e7e2;
      padding: 0 12px 12px;
    }

    .title {
      margin: 0 -12px 12px;
      background: #6aa395;
      color: #fff;
      font-weight: 700;
      text-align: center;
      padding: 8px;
      letter-spacing: .5px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    td {
      padding: 6px;
      vertical-align: middle;
    }

    label {
      color: #333;
    }

    input[type="text"] {
      width: 100%;
      box-sizing: border-box;
      padding: 6px 8px;
      border: 1px solid #7f8c87;
      border-radius: 2px;
      background: #fff;
    }

    .btn {
      padding: 6px 12px;
      border: 1px solid #7f8c87;
      border-bottom-color: #5f6a66;
      border-right-color: #5f6a66;
      background: #cde1f8;
      cursor: pointer;
      border-radius: 3px;
    }

    .out {
      background: #fff;
    }

    .result {
      background: #f9c7c7;
      color: #b31a1a;
      font-weight: 700;
    }

    .note {
      margin-top: 8px;
      text-align: center;
      font-size: 13px;
      color: #4d5a56;
    }
  </style>
</head>

<?php
function tim_kiem($arr, $target)
{
  $vi_tri = -1;

  foreach ($arr as $index => $value) {
    if ($value == $target) {
      $vi_tri = $index;
      break;
    }
  }

  return $vi_tri;
}

function check_num_arr($arr)
{
  foreach ($arr as $value) {
    if (!is_numeric($value)) {
      return false;
    }
  }

  return true;
}
?>

<body>
  <div class="panel">
    <div class="title">TÌM KIẾM</div>

    <form action="" method="post" name="tim-kiem">
      <table>
        <tr>
          <td style="width:150px;"><label for="arrIn">Nhập mảng:</label></td>
          <td><input id="arrIn" type="text" name="arrIn" required value="<?php if (isset($_POST['arrIn']))
            echo $_POST['arrIn']; ?>" /></td>
        </tr>
        <tr>
          <td><label for="target">Nhập số cần tìm:</label></td>
          <td>
            <div style="display:flex; gap:10px;">
              <input id="target" type="text" name="target" required value="<?php if (isset($_POST['target']))
                echo $_POST['target']; ?>" style="max-width:120px;" />
              <button type="submit" class="btn" name="find">Tìm kiếm</button>
            </div>
          </td>
        </tr>
        <tr>
          <td><label for="arrOut">Mảng:</label></td>
          <td><input id="arrOut" class="out" type="text" value="<?php if (isset($_POST['arrIn']))
            echo $_POST['arrIn']; ?>" readonly /></td>
        </tr>
        <tr>
          <td><label for="result">Kết quả tìm kiếm:</label></td>
          <td><input id="result" class="result" type="text" value="<?php
          if (isset($_POST['find'])) {
            $arr = explode(",", $_POST['arrIn']);


            if (count($arr) != 0 && check_num_arr($arr)) {
              $target = $_POST['target'];

              if (is_numeric($target)) {
                $vi_tri = tim_kiem($arr, $target);

                if ($vi_tri != -1) {
                  echo "Đã tìm thấy $target tại vị trí thứ $vi_tri của mảng";
                } else {
                  echo "Không tìm thấy $target trong mảng";
                }
              } else {
                echo "Vui lòng nhập số cần tìm hợp lệ";
              }
            } else
              echo "Vui lòng nhập mảng hợp lệ";
          }
          ?>" readonly style="background-color: aquamarine;" />
          </td>
        </tr>
      </table>

      <div class="note">(Các phần tử trong mảng sẽ cách nhau bằng dấu “,”)</div>
    </form>
  </div>
</body>

</html>