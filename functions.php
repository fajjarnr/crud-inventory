<?php

// connection
$conn = mysqli_connect("localhost", "root", "", "inventory");

function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

// barang
function tambahBarang($data)
{
	global $conn;

	$nama = htmlspecialchars($data['nama']);
	$jumlah = htmlspecialchars($data['jumlah']);
	$harga = htmlspecialchars($data['harga']);

	// upload image
	$image = upload();
	if (!$image) {
		return false;
	};

	// insert data
	$query = "INSERT INTO barang VALUES(NULL,'$nama','$jumlah','$harga','$image')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function upload()
{
	$namaFile =  $_FILES['image']['name'];
	$ukuranFile = $_FILES['image']['size'];
	$error = $_FILES['image']['error'];
	$tmpName = $_FILES['image']['tmp_name'];

	// cek jika tidak ada gambar
	if ($error === 4) {
		echo "<script>
				alert('Pilih Gambar !!!');
			</script>";
		return false;
	}

	//cek ektensi file
	$ektensiGambarValid = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ektensiGambarValid)) {
		echo "<script>
				alert('yang di upload bukan gambar !!!');
			</script>";
		return false;
	}

	// cek ukuran file
	if ($ukuranFile > 5000000) {
		echo "<script>
				alert('ukuran file terlalu besar !!!');
			</script>";
		return false;
	}

	// upload file
	$namaFileBaru = uniqid();
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;

	move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

	return $namaFileBaru;
}

function editBarang($data)
{
	global $conn;
	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$jumlah = htmlspecialchars($data["jumlah"]);
	$harga = htmlspecialchars($data["harga"]);
	$imageLama = htmlspecialchars($data["imageLama"]);

	if ($_FILES['image']['error'] === 4) {
		$image = $imageLama;
	} else {
		$image = upload();
	}

	$query = "UPDATE barang SET nama = '$nama', jumlah = '$jumlah', harga = '$harga', image = '$image' WHERE id = $id ";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function deleteBarang($id)
{
	global $conn;
	$query = "DELETE FROM barang where id = $id";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function tambahAgen($data)
{
	global $conn;

	$nama = htmlspecialchars($data['nama']);
	$tlp = htmlspecialchars($data['tlp']);
	$alamat = htmlspecialchars($data['alamat']);

	// insert data
	$query = "INSERT INTO agen VALUES(NULL,'$nama','$tlp','$alamat')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function editAgen($data)
{
	global $conn;
	$id = $data["id"];
	$nama = htmlspecialchars($data['nama']);
	$tlp = htmlspecialchars($data['tlp']);
	$alamat = htmlspecialchars($data['alamat']);

	$query = "UPDATE agen SET nama = '$nama', tlp = '$tlp', alamat = '$alamat' WHERE id = $id ";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function deleteAgen($id)
{
	global $conn;
	$query = "DELETE FROM agen where id = $id";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function editUser($data)
{
	global $conn;
	$id = $data["id"];
	$nama = htmlspecialchars($data['nama']);
	$email = htmlspecialchars($data['email']);
	$username = htmlspecialchars($data['username']);

	$query = "UPDATE user SET nama = '$nama', email = '$email', username = '$username' WHERE id = $id ";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function deleteUser($id)
{
	global $conn;
	$query = "DELETE FROM user where id = $id";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function registrasi($data)
{
	global $conn;
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$confirm_password = mysqli_real_escape_string($conn, $data["password2"]);

	// cek user sudah ada apa belum
	$query = "SELECT username FROM user WHERE username = '$username'";
	$result = mysqli_query($conn, $query);

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
			alert('username sudah terdaftar');
		</script>";
		return false;
	}

	if ($password !== $confirm_password) {
		echo "
		<script>
			alert('konfirmasi password salah');
		</script>
		";
		return false;
	}

	// enkripsi password
	$password = password_hash($password, PASSWORD_DEFAULT);

	// tambah ke database
	$query = "INSERT INTO user VALUES(NULL,'$nama','$email','$username','$password')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function search($keyword)
{
	$query = "SELECT * FROM barang WHERE nama LIKE '%$keyword%' OR jumlah LIKE '%$keyword%' OR harga LIKE '%$keyword%'";

	return query($query);
}
