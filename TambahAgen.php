<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
}

include 'functions.php';

if (isset($_POST["save"])) {

  if (tambahAgen($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'agen.php';
        </script>";
  } else {
    echo "<script>
            alert('data gagal ditambahkan');
            document.location.href = 'agen.php';
        </script>";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aplikasi Inventory Barang | Tugas Besa Pemrograman Web</title>
  <link rel="stylesheet" href="./assets/css/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
</head>

<body>
  <div class="wrapper">
    <div class="top_navbar">
      <div class="logo">
        <a href="#">Inventory</a>
      </div>
      <div class="top_menu">
        <div class=""></div>
        <div class="home_link">
          <a href="logout.php">
            <span class="icon">
              <i class="fas fa-sign-out-alt"></i>
              <span>Logout</span>
            </span>
          </a>
        </div>
      </div>
    </div>

    <div class="main_body">
      <div class="sidebar_menu">
        <div class="inner__sidebar_menu">
          <ul>
            <li>
              <a href="index.php">
                <span class="icon"> <i class="fas fa-border-all"></i></span>
                <span class="list">Dashboard</span>
              </a>
            </li>
            <li>
              <a href="barang.php">
                <span class="icon"><i class="fas fa-warehouse"></i></span>
                <span class="list">Daftar Barang</span>
              </a>
            </li>
            <li>
              <a href="agen.php">
                <span class="icon"><i class="fas fa-building"></i></span>
                <span class="list">Daftar Agen</span>
              </a>
            </li>
            <li>
              <a href="users.php">
                <span class="icon"><i class="fas fa-users"></i></span>
                <span class="list">Pengguna</span>
              </a>
            </li>
            <li>
              <a href="about.php">
                <span class="icon"><i class="fas fa-address-card"></i></span>
                <span class="list">About</span>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="container">
        <div class="card">
          <div class="card-header">
            <h1>Tambah Agen</h1>
          </div>
          <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data" class="form">
              <div class="form-group">
                <label for="nama">Nama Agen</label>
                <input type="text" name="nama" class="input-text" placeholder="Masukan Nama Agen" required />
              </div>
              <div class="form-group">
                <label for="jumlah">No. Telepon</label>
                <input type="text" name="tlp" class="input-text" placeholder="Masukan No. Telepon" required />
              </div>
              <div class="form-group">
                <label for="nama">Alamat Agen</label>
                <input type="text" name="alamat" class="input-text" placeholder="Masukan Alamat Agen" required />
              </div>
              <button type="submit" name="save" class="btn-success" style="width: 97%; margin: 10px 10px;">
                Simpan
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
</body>

</html>