<?php

include 'functions.php';

$user = query("SELECT * FROM user");

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
                <a href="users.php" class="active">
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
            <h1>Daftar Pengguna</h1>
          </div>
          <div class="card-body" id="container">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Username</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1 ?>
                <?php foreach ($user as $row) : ?>
                  <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['email']; ?></td>
                    <td><?= $row['username']; ?></td>
                    <td>
                      <a href="EditUser.php?id=<?= $row['id']; ?>">
                        <button class="warning">
                          <i class="fas fa-edit"></i>
                        </button>
                      </a>
                      <a href="DeleteUser.php?id=<?= $row['id']; ?>" onclick="return confirm('apakah yakin mau dihapus ?');">
                        <button class="delete">
                          <i class="fas fa-trash"></i>
                        </button>
                      </a>
                    </td>
                  </tr>
                  <?php $i++; ?>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>
