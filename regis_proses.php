<?php
if(isset($_POST['tambah'])){
	include_once 'koneksi.php';
	$rekam_medis = $_POST['rekam_medis'];
	$nama = $_POST['nama'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
    // $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $status = $_POST['status'];
    $keluhan = $_POST['keluhan'];
    $diagnosa_awal = $_POST['diagnosa_awal'];
	$input = mysqli_query($koneksi,"insert into pasien (rekam_medis, nama, tanggal_lahir, jenis_kelamin, alamat, status, keluhan, diagnosa_awal, tanggal_regis) values ('$rekam_medis','$nama','$tanggal_lahir','$jenis_kelamin','$alamat','$status','$keluhan','$diagnosa_awal','$tanggal_regis')");
	
	if($input){
		echo "<h3>data berhasil ditambahkan</h3>";
		echo "<script>window.location='index.php'</script>";
	}
	else {
		echo "gagal menambahkan data";
		echo "<a href = 'regis.php'>kembali</a>";
	}
}

else{
	echo "<script>window.history.back()</script>";
}

?>