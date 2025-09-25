<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bài tập 2</title>
</head>

<body>
  <form action="check-form.php" method="GET">
    <table>
      <tr>
      <tr colspan="2">
        <h2>Registration</h2>
      </tr>
      <tr>
        <td>
          <label for="fullname">Full Name</label>
          <br>
          <input type="text" name="fullname" required>
        </td>
        <td>
          <label for="username">Username</label>
          <br>
          <input type="text" name="username" required>
        </td>
      </tr>

      <tr>
        <td>
          <label for="email">Email</label>
          <br>
          <input type="email" name="email" required>
        </td>
        <td>
          <label for="phone_number">Phone Number</label>
          <br>
          <input type="tel" name="phone_number" required>
        </td>
      </tr>
      <tr>
        <td>
          <label for="password">Password</label>
          <br>
          <input type="password" name="password" required>
        </td>
        <td>
          <label for="confirm_password">Confirm Password</label>
          <br>
          <input type="password" name="confirm_password" required>
        </td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center;">
          <h2>Gender</h2>
        </td>
      </tr>
      <tr>
        <td>
          <input id="male" type="radio" name="gender" value="male" required> <label for="male">Male</label>
        </td>
        <td>
          <input id="female" type="radio" name="gender" value="female" required> <label for="female">Female</label>
        </td>
        <td>
          <input id="prefer_not_to_say" type="radio" name="gender" value="prefer_not_to_say" required> <label
            for="prefer_not_to_say">Prefer
            not to say</label>
        </td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center;">
          <input type="submit" value="Register" name="btn_send">
        </td>
      </tr>
    </table>
  </form>
</body>

</html>