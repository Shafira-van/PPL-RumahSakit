<?php
include_once 'koneksi.php';

$query = "SHOW TABLE STATUS LIKE 'pasien'";
$result = $koneksi->query($query);

if ($result) {
  $row = $result->fetch_assoc();
  $nextPrimaryKey = $row['Auto_increment'];
}
?>

<a class="btn btn-secondary" href="index.php">← Kembali</a>
<h2>Form Registrasi Pasien</h2>
<p>Rumah Sakit Cepat Sembuh</p>
<form action="regis_proses.php" method="post">
  <input type="hidden" name="tambah" value="tambah">
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">Nama:</label>
    <div class="col-sm-10">
      <input type="text" required class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label">No Rekam Medis:</label>
    <div class="col-sm-10">
      <input type="number" placeholder="Nomor rekam medis" class="form-control" disabled value="<?= $nextPrimaryKey ?>" name="rekam_medis">
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label" for="tanggal_lahir">Tanggal Lahir:</label>
    <div class="col-sm-10">
      <input type="date" required class="form-control" name="tanggal_lahir" id="tanggal_lahir">
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label" for="jenis_kelamin">Jenis Kelamin:</label>
    <div class="col-sm-10">
      <div class="form-check form-check-inline">
        <input class="form-check-input" required type="radio" name="jenis_kelamin" value="Laki-Laki" id="jenis_kelamin">
        <label class="form-check-label" for="jenis_kelamin1">
          Laki-Laki
        </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" required type="radio" name="jenis_kelamin" value="Perempuan" id="jenis_kelamin">
        <label class="form-check-label" for="jenis_kelamin">
          Perempuan
        </label>
      </div>
    </div>
  </div>

  <div class="row mb-3">
    <label class="col-sm-2 col-form-label" for="alamat">Alamat:</label>
    <div class="col-sm-10">
      <input type="text" required class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat">
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label" for="status">Status:</label>
    <div class="col-sm-10">
      <div class="form-check form-check-inline">
        <input class="form-check-input" required type="radio" name="status" value="Kawin" id="status">
        <label class="form-check-label" for="status">
          Kawin
        </label>
      </div>
      <div class="form-check form-check-inline">
        <input class="form-check-input" required type="radio" name="status" value="Belum Kawin" id="status">
        <label class="form-check-label" for="status">
          Belum Kawin
        </label>
      </div>
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label" for="keluhan">Keluhan:</label>
    <div class="col-sm-10">
      <input type="text" required class="form-control" name="keluhan" id="keluhan" placeholder="Masukkan Keluhan">
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label" for="diagnosa_awal">Diagnosa Awal:</label>
    <div class="col-sm-10">
      <input type="text" required class="form-control" id="diagnosa_awal" name="diagnosa_awal" placeholder="Masukkan Diagnosa Awal">
    </div>
  </div>
  <div class="row mb-3">
    <label class="col-sm-2 col-form-label" for="tanggal_regis">Tanggal Registrasi:</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="tanggal_regis" value="<?= date('Y-m-d') ?>" name="tanggal_regis" placeholder="Masukkan Tanggal registrasi">
    </div>
  </div>
  <div class="row mb-3 mt-3">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</div>