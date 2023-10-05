<?php
// include database connection file
include_once("koneksi.php");
 
// Get id from URL to delete that user
$rekam_medis = $_GET['rekam_medis'];

 
// Delete user row from table based on given id
$result = mysqli_query($koneksi, "DELETE FROM pasien WHERE rekam_medis=$rekam_medis");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>