<?php
include 'functions.php';

$keyword = $_GET['keyword'];

$query = "SELECT * FROM barang WHERE nama LIKE '%$keyword%' OR jumlah LIKE '%$keyword%' OR harga LIKE '%$keyword%'";

$barang = query($query);

?>

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
                <td><img src="img/<?= $row['image']; ?>" width="50px" height="50px"></td>
                <td>
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