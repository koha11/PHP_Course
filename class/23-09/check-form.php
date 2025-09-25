<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['btn_send'])) {
    $fullname = $_GET['fullname'];
    $username = $_GET['username'];
    $email = $_GET['email'];
    $phone_number = $_GET['phone_number'];
    $gender = $_GET["gender"];
    $pwd = $_GET['password'];
    $cpwd = $_GET['confirm_password'];
    if ($pwd !== $cpwd) {
      // echo "<a id='redirect' href='register-form.php'></a>";
      echo "<script>window.location = 'http://localhost/class/23-09/register-form.php'</script>";
    } else {
      echo "<h2>" . $fullname . "</h2>";
      echo "<p>Username: " . $username . "</p>";
      echo "<p>Email: " . $email . "</p>";
      echo "<p>Phone Number: " . $phone_number . "</p>";
      echo "<p>Password: " . $pwd . "</p>";
      echo "" . $cpwd . "";
      echo "<p>Gender: " . $gender . "</p>";
    }
  }


  ?>
</body>

</html>