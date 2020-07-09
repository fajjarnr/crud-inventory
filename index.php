<?php
include 'functions.php'
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aplikasi Inventory Barang | Tugas Besa Pemrograman Web</title>
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
    />
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
            <a href="">
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
                <a href="index.php" class="active">
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
          <div class="card" style="background-color: #a2de96; color: white;">
            <p>
              Selamat Datang !!!
            </p>
          </div>
          <div
            class="card"
            style="background-color: #0779e4; color: white; margin-top: 20px;"
          >
            <p>
              Melihat Daftar barang pada menu
              <span style="color: #ffcd3c;">Daftar Barang</span>
            </p>
          </div>
          <div
            class="card"
            style="background-color: #ffcd3c; color: white; margin-top: 20px;"
          >
            <p>
              Jangan sampai salah mengubah data !!!
            </p>
          </div>
          <div
            class="card"
            style="background-color: #fa1616; color: white; margin-top: 20px;"
          >
            <p>
              Hati-Hati dalam menghapus data !!!
            </p>
          </div>
        </div>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
