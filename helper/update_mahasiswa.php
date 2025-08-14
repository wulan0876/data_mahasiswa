<?php
include 'koneksi.php';

//mengambil Nilai Post
$id = $_POST['id'];
$nama_mahasiswa = $_POST['nama_mahasiswa'];
$nim = $_POST['nim'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$program_studi = $_POST['Program_studi'];
$tanggal_lahir = $_POST['tanggal_lahir'];

//query 
$query_update = "UPDATE mahasiswa SET 
				nama_mahasiswa='$nama_mahasiswa',
				nim='$nim',
				jenis_kelamin='$jenis_kelamin',
				Program_studi='$program_studi',
				tanggal_lahir='$tanggal_lahir'
				WHERE id='$id'";
$update = mysqli_query($db, $query_update);

if ($update) {
	header("location: ../index.php");
} else {
	echo "gagal";
}

