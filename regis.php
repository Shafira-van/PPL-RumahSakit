<?php 
include_once 'koneksi.php';

$query = "SHOW TABLE STATUS LIKE 'pasien'";
$result = $koneksi->query($query);

if ($result) {
    $row = $result->fetch_assoc();
    $nextPrimaryKey = $row['Auto_increment'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="container">
    <h2>Form Registrasi Pasien</h2>
    <p>Rumah Sakit Cepat Sembuh</p>
    <form class="form-horizontal" action="regis_proses.php" method="post">
      <div class="form-group">
        <label class="control-label col-sm-2">Nama:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="nama" id="email" placeholder="Masukkan Nama">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">No Rekam Medis:</label>
        <div class="col-sm-10">
          <input type="number" placeholder="Nomor rekam medis" class="form-control" disabled value="<?= $nextPrimaryKey ?>" name="rekam_medis">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="tanggal_lahir">Tanggal Lahir:</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="jenis_kelamin">Jenis Kelamin:</label>
        <div class="col-sm-10">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jenis_kelamin" value="Laki-Laki" id="jenis_kelamin">
          <label class="form-check-label" for="jenis_kelamin1">
            Laki-Laki
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin">
          <label class="form-check-label" for="jenis_kelamin">
            Perempuan
          </label>
        </div>
        </div>
      </div>
      
      <div class="form-group">
        <label class="control-label col-sm-2" for="alamat">Alamat:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="status">Status:</label>
        <div class="col-sm-10">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="status" value="Kawin" id="status">
          <label class="form-check-label" for="status">
            Kawin
          </label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="status" value="Belum Kawin" id="status">
          <label class="form-check-label" for="status">
            Belum Kawin
          </label>
        </div>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="keluhan">Keluhan:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="keluhan" id="keluhan" placeholder="Masukkan Keluhan">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="diagnosa_awal">Diagnosa Awal:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="diagnosa_awal" placeholder="Masukkan Diagnosa Awal">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="tanggal_registrasi">Tanggal Registrasi:</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="tanggal_registrasi" value="<?= date('Y-m-d')?>" placeholder ="Masukkan Tanggal registrasi">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
    </form>
  </div>

</body>

</html>