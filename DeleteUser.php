<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

include 'functions.php';

$id = $_GET["id"];


if (deleteUser($id)) {
	echo "

		<script>
			alert('Data Berhasil di Hapus');
			document.location.href = 'users.php';
		</script>

		";
} else {

	echo "

		<script>
			alert('Data Gagal di Hapus');
			document.location.href = 'users.php';
		</script>

		";
}
