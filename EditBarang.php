<?php
include 'functions.php';

$id = $_GET["id"];

$data = query("SELECT * FROM barang WHERE id = $id")[0];

if (isset($_POST["save"])) {

  if (editBarang($_POST) > 0) {
    echo "<script>
            alert('data berhasil di edit');
            document.location.href = 'barang.php';
        </script>";
  } else {
    echo "<script>
            alert('data gagal di edit');
            document.location.href = 'barang.php';
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
            <h1>Tambah Barang</h1>
          </div>
          <div class="card-body">
            <form action="" method="POST" enctype="multipart/form-data" class="form">
              <input type="hidden" name="id" value="<?= $data["id"] ?>">
              <input type="hidden" name="imageLama" value="<?= $data["image"] ?>">
              <div class="form-group">
                <label for="nama">Nama Barang</label>
                <input type="text" name="nama" value="<?= $data["nama"] ?>" class="input-text" placeholder="Masukan Nama Barang" required />
              </div>
              <div class="form-group">
                <label for="jumlah">Jumlah Barang</label>
                <input type="number" min="0" name="jumlah" value="<?= $data["jumlah"] ?>" class="input-text" placeholder="Masukan jumlah Nama Barang" required />
              </div>
              <div class="form-group">
                <label for="nama">Harga Barang</label>
                <input type="text" name="harga" value="<?= $data["harga"] ?>" class="input-text" placeholder="Masukan Harga Barang" required />
              </div>
              <div class="form-group">
                <label for="nama">Image Barang</label>
                <img src="img/<?= $data["image"] ?>" width="50px" height="50px"><br>
                <input type="file" name="image" required />
              </div>
              <button type="submit" name="save" class="btn-success" style="width: 97%; margin: 10px 10px;">
                Update
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