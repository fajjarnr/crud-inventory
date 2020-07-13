<?php

session_start();

if (isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}

include 'functions.php';

if (isset($_POST["register"])) {
  if(registrasi ($_POST) > 0) {
    echo "

		<script>
			alert('User Berhasil dibuat');
		</script>

		";
  } else {
    echo mysqli_error($conn);
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Register</title>
  <link rel="stylesheet" href="./assets/css/style.css" type="text/css">
</head>

<body style="height: 110vh;">
  <div class="container">
  <div class="register-box">
    <img src="images/avatar.png" class="avatar" />
    <h1 class="login-title">Aplikasi Inventory Barang</h1>
    <h3 class="auth-title">Register</h3>
    <form action="" method="POST">
      <div class="form-group-register">
        <label for="nama">Nama</label>
        <input type="text" class="input-register-text" name="nama" placeholder="Masukan Nama Anda" required />
      </div>
      <div class="form-group-register">
        <label for="email">Email</label>
        <input type="email" class="input-register-text" name="email" placeholder="Masukan Email Anda" required />
      </div>
      <div class="form-group-register">
        <label for="username">Username</label>
        <input type="text" class="input-register-text" name="username" placeholder="Masukan Username Anda" required />
      </div>
      <div class="form-group-register">
        <label for="password">Password</label>
        <input type="password" class="input-register-text" name="password" placeholder="Masukan Password Anda" required />
      </div>
      <div class="form-group-register">
        <label for="password2">Confirm Password</label>
        <input type="password" class="input-register-text" name="password2" placeholder="Masukan Confirm Password Anda" required />
      </div>
      <button class="btn-auth" type="submit" name="register" value="register">
        Register
      </button>
    </form>
    <div style="margin-top: 25px; text-align:center;">
      <p>Sudah punya akun ? <a href="login.php">Login</a></p>
    </div>
  </div>
  </div>
</body>

</html>