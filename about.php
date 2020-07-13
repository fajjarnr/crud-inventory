<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

include 'functions.php'


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aplikasi Inventory Barang | Tugas Besa Pemrograman Web</title>
  <link rel="stylesheet" href="./assets/css/style.css" />
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
              <a href="about.php" class="active">
                <span class="icon"><i class="fas fa-address-card"></i></span>
                <span class="list">About</span>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <div class="container">
        <div class="card" style="height: 500px;">
          <div class="card-body" style="text-align: center; margin: 125px 0;">
            <h1>
              Aplikasi Barang Inventory
            </h1>
            <h3 style="margin-top: 10px;">
              Menggunakan bahasa pemrograman PHP dan Database Mysql
            </h3>
            <p style="margin-top: 5px;">
              dibuat untuk memenuhi tugas besar mata kuliah pemrograman web
            </p>
            <p style="margin-top: 10px;">Anggota Kelompok :</p>
            <ol start="1" type="1" style="margin-top: 10px; font-size: 20px;">
              <li>
                <p>
                  <strong style="color: red;">17102175</strong> Fajar Nur
                  Rohman
                </p>
              </li>
              <li>
                <p>
                  <strong style="color: red;">17102176</strong> Galih Wahyu
                  Nur Syamsudin
                </p>
              </li>
              <li>
                <p>
                  <strong style="color: red;">17102181</strong> Mendi Nurroyan
                </p>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="script.js"></script>
</body>

</html>