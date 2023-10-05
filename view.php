<?php
include_once 'koneksi.php';

$rekam_medis = $_GET['rekam_medis'];
$query = "SELECT * FROM pasien WHERE rekam_medis = '$rekam_medis'";
$result = $koneksi->query($query);
$row = $result->fetch_assoc();
if (!$row) {
  header("Location: index.php");
}

function calculateAge($birthDate)
{
  $birthDateTime = new DateTime($birthDate);
  $currentDate = new DateTime();

  $interval = $birthDateTime->diff($currentDate);

  // Return the age
  return $interval->y;
}

$row['umur'] = calculateAge($row['tanggal_lahir']);
?>

<a class="btn btn-secondary" href="index.php">← Kembali</a>
<div class="row mb-3">
  <label class="col-sm-2 col-form-label">Nama:</label>
  <div class="col-sm-10">
    <input type="text" disabled value="<?= $row['nama'] ?>" class="form-control" name="nama" id="email" placeholder="Masukkan Nama">
  </div>
</div>
<div class="row mb-3">
  <label class="col-sm-2 col-form-label">No Rekam Medis:</label>
  <div class="col-sm-10">
    <input type="number" disabled value="<?= $row['rekam_medis'] ?>" placeholder="Nomor rekam medis" class="form-control" disabled value="<?= $nextPrimaryKey ?>" name="rekam_medis">
  </div>
</div>
<div class="row mb-3">
  <label class="col-sm-2 col-form-label" for="tanggal_lahir">Tanggal Lahir:</label>
  <div class="col-sm-10">
    <input type="date" disabled value="<?= $row['tanggal_lahir'] ?>" class="form-control" name="tanggal_lahir" id="tanggal_lahir">
  </div>
</div>
<div class="row mb-3">
  <label class="col-sm-2 col-form-label" for="umur">Umur:</label>
  <div class="col-sm-10">
    <input type="number" disabled value="<?= $row['umur'] ?>" class="form-control" name="umur" id="umur">
  </div>
</div>
<div class="row mb-3">
  <label class="col-sm-2 col-form-label" for="jenis_kelamin">Jenis Kelamin:</label>
  <div class="col-sm-10">
    <div class="form-check form-check-inline">
      <input class="form-check-input" <?= $row['jenis_kelamin'] == 'Laki-Laki' ? 'checked' : '' ?> disabled type="radio" name="jenis_kelamin" value="Laki-Laki" id="jenis_kelamin">
      <label class="form-check-label" for="jenis_kelamin1">
        Laki-Laki
      </label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" <?= $row['jenis_kelamin'] == 'Perempuan' ? 'checked' : '' ?> disabled type="radio" name="jenis_kelamin" id="jenis_kelamin">
      <label class="form-check-label" for="jenis_kelamin">
        Perempuan
      </label>
    </div>
  </div>
</div>

<div class="row mb-3">
  <label class="col-sm-2 col-form-label" for="alamat">Alamat:</label>
  <div class="col-sm-10">
    <input type="text" disabled value="<?= $row['alamat'] ?>" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat">
  </div>
</div>
<div class="row mb-3">
  <label class="col-sm-2 col-form-label" for="status">Status:</label>
  <div class="col-sm-10">
    <div class="form-check form-check-inline">
      <input class="form-check-input" <?= $row['status'] == 'Kawin' ? 'checked' : '' ?> disabled type="radio" name="status" value="Kawin" id="status">
      <label class="form-check-label" for="status">
        Kawin
      </label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" <?= $row['status'] == 'Belum Kawin' ? 'checked' : '' ?> disabled type="radio" name="status" value="Belum Kawin" id="status">
      <label class="form-check-label" for="status">
        Belum Kawin
      </label>
    </div>
  </div>
</div>
<div class="row mb-3">
  <label class="col-sm-2 col-form-label" for="keluhan">Keluhan:</label>
  <div class="col-sm-10">
    <input type="text" disabled value="<?= $row['keluhan'] ?>" class="form-control" name="keluhan" id="keluhan" placeholder="Masukkan Keluhan">
  </div>
</div>
<div class="row mb-3">
  <label class="col-sm-2 col-form-label" for="diagnosa_awal">Diagnosa Awal:</label>
  <div class="col-sm-10">
    <input type="text" disabled value="<?= $row['diagnosa_awal'] ?>" class="form-control" id="diagnosa_awal" name="diagnosa_awal" placeholder="Masukkan Diagnosa Awal">
  </div>
</div>
<div class="row mb-3">
  <label class="col-sm-2 col-form-label" for="tanggal_registrasi">Tanggal Registrasi:</label>
  <div class="col-sm-10">
    <input type="date" disabled value="<?= $row['tanggal_regis'] ?>" class="form-control" id="tanggal_registrasi" placeholder="Masukkan Tanggal registrasi">
  </div>
</div>