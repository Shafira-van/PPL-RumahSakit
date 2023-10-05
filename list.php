<h1 class="text-center mb-3">Informasi Data Pasien Rumah Sakit</h1>
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
            function calculateAge($birthDate)
            {
                $birthDateTime = new DateTime($birthDate);
                $currentDate = new DateTime();

                $interval = $birthDateTime->diff($currentDate);

                // Return the age
                return $interval->y;
            }

            include_once 'koneksi.php';
            $no = 1;
            $data = mysqli_query($koneksi, "select * from pasien");
            while ($d = mysqli_fetch_array($data)) {
                $d['umur'] = calculateAge($d['tanggal_lahir']);
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
                                <a class="btn btn-primary btn-sm" type="button" href="index.php?page=view&rekam_medis=<?= $d['rekam_medis'] ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a href="hapus.php?rekam_medis=<?php echo $d['rekam_medis']; ?>" <button onclick="" class="btn btn-danger btn-sm" type="button"><i class="fa fa-trash" aria-hidden="true"></i></a>
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