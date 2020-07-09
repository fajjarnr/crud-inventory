<?php

include 'functions.php';

$id = $_GET["id"];


if (deleteAgen($id)) {
    echo "

		<script>
			alert('Data Berhasil di Hapus');
			document.location.href = 'agen.php';
		</script>

		";
} else {

    echo "

		<script>
			alert('Data Gagal di Hapus');
			document.location.href = 'agen.php';
		</script>

		";
}
