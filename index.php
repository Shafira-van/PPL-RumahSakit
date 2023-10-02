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
      <br>
      <br>
      
      <div class="table-responsive">
        <div class="container">
        <table class="data-table">
          <caption class="title">
            Data Pasien Rumah Sakit
          </caption>
          <thead>
            <tr>
              <th>No.Rekam Medis</th>
              <th>Nama</th>
              <th>Tanggal Lahir</th>
              <th>Jenis Kelamin</th>
              <th>Umur</th>
              <th>Alamat</th>
              <th>Status</th>
              <th>Keluhan</th>
              <th>Diagnosa Awal</th>
              <th>Tanggal Registrasi</th>
              <th>Opsi</th>
            </tr>
          </thead>
          <?php
            include_once 'koneksi.php';
            $no=1;
            $data=mysqli_query($koneksi,"select * from pasien");
            while ($d=mysqli_fetch_array($data)) {
          ?>
          <tbody>
            <tr>
              <td><?php echo $d['rekam_medis']; ?></td>
              <td><?php echo $d['nama']; ?></td>
              <td><?php echo $d['tanggal_lahir']; ?></td>
              <td><?php echo $d['jenis_kelamin']; ?></td>
              <td><?php echo $d['umur']; ?></td>
              <td><?php echo $d['alamat']; ?></td>
              <td><?php echo $d['status']; ?></td>
              <td><?php echo $d['keluhan']; ?></td>
              <td><?php echo $d['diagnosa_awal']; ?></td>
              <td><?php echo $d['tanggal_regis']; ?></td>
              <td>
                <div class="d-grid gap-1 d-md-block">
                    <button class="btn btn-primary btn-sm" type="button">View</button>
                    <a href="hapus.php?rekam_medis=<?php echo $d['rekam_medis']; ?>" <button onclick="" class="btn btn-primary btn-sm" type="button" >Delete</button></a>
                </div>
              </td>
            </tr>
          </tbody>
          <?php
    }
    ?>
        </table>
        </div>     
      </div>
    
    <style>
      body {
        font-size: 15px;
        color: #343d44;
        font-family: "segoe-ui", "open-sans", tahoma, arial;
        padding: 0;
        margin: 0;
      }
      table {
        margin: auto;
        font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
        font-size: 8px;
      }

    
      h1 {
        margin: 25px auto 0;
        text-align: center;
        text-transform: uppercase;
        font-size: 17px;
      }
  
      table td {
        transition: all 0.5s;
      }
  
      /* Table */
      .data-table {
        border-collapse: collapse;
        font-size: 12px;
        min-width: 537px;
      }
  
      .data-table th,
      .data-table td {
        border: 1px solid #e1edff;
        padding: 7px 10px;
      }
      .data-table caption {
        margin: 7px;
      }
  
      /* Table Header */
      .data-table thead th {
        background-color: #508abb;
        color: #ffffff;
        border-color: #6ea1cc !important;
        text-transform: uppercase;
      }
  
      /* Table Body */
      .data-table tbody td {
        color: #353535;
      }
      .data-table tbody td:first-child,
      .data-table tbody td:nth-child(4),
      .data-table tbody td:last-child {
        text-align: right;
      }
  
      .data-table tbody tr:nth-child(odd) td {
        background-color: #f4fbff;
      }
      .data-table tbody tr:hover td {
        background-color: #ffffa2;
        border-color: #ffff0f;
      }
  
      /* Table Footer */
      .data-table tfoot th {
        background-color: #e5f5ff;
        text-align: right;
      }
      .data-table tfoot th:first-child {
        text-align: left;
      }
      .data-table tbody td:empty {
        background-color: #ffcccc;
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