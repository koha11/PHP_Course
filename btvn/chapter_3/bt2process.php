<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" and isset($_GET['btnsend'])) {
        $password = $_GET['password'];
        $confirmpassword = $_GET['confirmpassword'];
        if ($password !== $confirmpassword) {
            echo '<meta http-equiv="refresh" content="3;url=bt2form.php">';
        }
    }
    ?>
    <title>Welcome</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" and isset($_GET['btnsend'])) {
        $fullname = $_GET['fullname'];
        $name = $_GET['username'];
        $email = $_GET['email'];
        $phonenumber = $_GET['phonenumber'];
        $password = $_GET['password'];
        $confirmpassword = $_GET['confirmpassword'];
        if ($password === $confirmpassword) {
            echo "<h1>Welcome $name</h1>";
            echo "<p>Your full name is: $fullname</p>";
            echo "<p>Your email is: $email</p>";
            echo "<p>Your phone number is: $phonenumber</p>";
        } else {
            echo "<form action='bt2form.php' method='post' id='myform'>";
            echo "<input name = 'password' value='$password'></input>";
            echo "<input name = 'confirmpassword' value='$confirmpassword'></input>";
            echo "<input name = 'fullname' value='$fullname'></input>";
            echo "<input name = 'username' value='$name'></input>";
            echo "<input name = 'email' value='$email'></input>";
            echo "<input name = 'phonenumber' value='$phonenumber'></input>";
            echo "<input type='hidden' name='error' value='Mật khẩu không trùng khớp'></input>";
            echo "</form>";

            echo "<script>document.getElementById('myform').submit();</script>";
        }
    }
    ?>
</body>

</html>