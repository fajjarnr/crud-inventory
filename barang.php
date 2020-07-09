<?php
include 'functions.php';

$barang = query("SELECT * FROM barang ORDER BY id ASC");

if(isset($_POST['search'])){
  $barang = search($_POST["keyword"]);
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
              <a href="barang.php" class="active">
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
        <a href="TambahBarang.php">
          <button class="btn-primary">
            <i class="fas fa-plus"></i> Tambah Barang
          </button>
        </a>
        <div class="card">
          <div class="card-header">
          <h1>Daftar Barang</h1>
          <br>
            <form action="" method="POST">
              <input type="text" name="keyword" id="keyword" class="input-search" placeholder="pencarian..." autocomplete="off" />
              <button type="submit" name="search" class="success" id="btn-search">
                <i class="fas fa-search"></i>
              </button>
            </form>
          </div>
          <div class="card-body" id="container">
            <table class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Barang</th>
                  <th>Jumlah Barang</th>
                  <th>Harga Barang</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1 ?>
                <?php foreach ($barang as $row) : ?>
                  <tr>
                    <td><?= $i; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['jumlah']; ?></td>
                    <td>Rp. <?= $row['harga']; ?></td>
                    <td><img src="assets/img/<?= $row['image']; ?>" width="50px" height="50px"></td>
                    <td style="text-align: center;">
                      <a href="EditBarang.php?id=<?= $row['id']; ?>">
                        <button class="warning">
                          <i class="fas fa-edit"></i>
                        </button>
                      </a>
                      <a href="DeleteBarang.php?id=<?= $row['id']; ?>" onclick="return confirm('apakah yakin mau dihapus ?');">
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
  <script src="./assets/js/script.js"></script>
</body>

</html>