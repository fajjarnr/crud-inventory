<?php

include 'functions.php';

$id = $_GET["id"];


if (deleteBarang($id)) {
    echo "

		<script>
			alert('Data Berhasil di Hapus');
			document.location.href = 'barang.php';
		</script>

		";
} else {

    echo "

		<script>
			alert('Data Gagal di Hapus');
			document.location.href = 'barang.php';
		</script>

		";
}
