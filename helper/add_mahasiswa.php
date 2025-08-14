<?php
include 'koneksi.php';
//mengambil nilai post

$nama_mahasiswa = $_POST['nama_mahasiswa'];
$nim = $_POST['nim'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$program_studi = $_POST['program_studi'];
$tanggal_lahir = $_POST['tanggal_lahir'];

//query
$query_simpan = "INSERT INTO mahasiswa (nama_mahasiswa, nim, jenis_kelamin, program_studi, tanggal_lahir) 
				values ('$nama_mahasiswa', '$nim', '$jenis_kelamin', '$program_studi', '$tanggal_lahir') ";

$simpan = mysqli_query($db, $query_simpan);

//cek
if ($simpan) {
	header("location: ../index.php");
} else {
	echo "gagal";
}
