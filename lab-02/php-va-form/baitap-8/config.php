<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  echo "Bạn đã nhập thành công, dưới đây là những thông tin bạn đã nhập: <br>";
  echo "Họ tên: " . $_GET['fullname'] . "<br>";
  echo "Address: " . $_GET['address'] . "<br>";
  echo "Phone: " . $_GET['phone'] . "<br>";
  echo "Gender: " . $_GET['gender'] . "<br>";
  echo "Country: " . $_GET['country'] . "<br>";
  echo "Study: " . implode(", ", $_GET['study']) . "<br>";
  echo "Note: " . $_GET['note'] . "<br>";
  echo "<a href='javascript:window.history.back(-1);'>Quay lại trang trước</a>";
  ?>
</body>

</html>