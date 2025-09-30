<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="post">
    <table border="1">
      <tr>
        <td colspan="2" style="text-align: center">
          <h3>Tinh tich ds</h3>
        </td>
      </tr>
      <tr>
        <td>Nhap day so</td>
        <td><input type="text" name="value" value=<?php if (isset($_POST["value"]))
          echo $_POST["value"]; ?>> </td>
      </tr>
      <tr>
        <td colspan="2" style="text-align: center"> <input type="submit" name="calc">
        </td>
      </tr>
      <tr>
        <td>Ket qua</td>
        <td><?php
        if (isset($_POST["calc"])) {
          $_arr = explode(",", $_POST["value"]);
          $_tich = $_arr[0];
          for ($i = 1; $i < count($_arr); $i++)
            $_tich *= $_arr[$i];

          echo $_tich;
        }
        ?></td>
      </tr>

    </table>
  </form>

</body>

</html>