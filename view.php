<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sistem Rumah Sakit</title>
  </head>
  
  <body>
    <nav class="navbar navbar-light" style="background-color: #e3f2fd;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Rumah Sakit Cepat Sembuh</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>

      <h1 style="text-align: center;" : > Informasi Data Pasien Rumah Sakit </h1>
      <div class="container">
    <br>
    <br>
    <form class="form-horizontal" action="/action_page.php">
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Nama:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="email" placeholder="Masukkan Nama">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">No Rekam Medis:</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="email">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Tanggal Lahir:</label>
        <div class="col-sm-4">
          <input type="date" class="form-control" id="email">
        </div>
        <label class="control-label col-sm-2" for="pwd">Umur:</label>
        <div class="col-sm-4">
          <input type="text" class="form-control" id="pwd" placeholder="Masukkan Umur">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Jenis Kelamin:</label>
        <div class="col-sm-10">
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
          <label class="form-check-label" for="inlineCheckbox1" style="margin-right:1.1cm">Perempuan</label>
          <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
          <label class="form-check-label" for="inlineCheckbox2">Laki-Laki</label>
        </div>
      </div>
      </div>
      
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Alamat:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="pwd" placeholder="Masukkan Umur">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Status:</label>
        <div class="col-sm-10">
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1" style="margin-right:2cm">Kawin</label>
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Belum Kawin</label>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Keluhan:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="pwd" placeholder="Masukkan Umur">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Diagnosa Awal:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="pwd" placeholder="Masukkan Umur">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Tanggal Registrasi:</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="pwd" placeholder="Masukkan Umur">
        </div>
      </div>

  </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Submit</button>
        </div>
      </div>
    </form>
  </div>

      <style>
      body {
        font-size: 15px;
        color: #343d44;
        font-family: "segoe-ui", "open-sans", tahoma, arial;
        padding: 0;
        margin: 0;
      }
      
      h1 {
        margin: 25px auto 0;
        text-align: center;
        text-transform: uppercase;
        font-size: 17px;
      }

      </style>
       <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>