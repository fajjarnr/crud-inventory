<?php

include 'functions.php';

if (isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];
  // $query = "SELECT * FROM user WHERE username = '$username'";
  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

  if (mysqli_num_rows($result) === 1) {
    // cek password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row['password'])) {
      header("location: index.php");
      exit;
    };
  }

  $error = true;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="./assets/css/style.css" />
</head>

<body>
  <div class="login-box">
    <img src="images/avatar.png" class="avatar" />
    <h1 class="login-title">Aplikasi Inventory Barang</h1>
    <h3 class="auth-title">Login</h3>
    <form action="" method="POST">
      <div class="form-group-register">
        <label for="username">Username</label>
        <input type="text" class="input-register-text" name="username" placeholder="Masukan Username Anda" required />
      </div>
      <div class="form-group-register">
        <label for="password">Password</label>
        <input type="password" class="input-register-text" name="password" placeholder="Masukan Password Anda" required />
      </div>
      <button class="btn-auth" type="submit" name="login">
        Login
      </button>
    </form>
    <div style="margin-top: 25px; text-align:center;">
      <p>Belum punya akun ? <a href="register.php">Register</a></p>
    </div>
  </div>
</body>

</html>