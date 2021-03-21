<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <title>Table</title>
</head>

<body>
  <?php

  $nim = $_POST['NIM'];
  $nama = $_POST['nama_lengkap'];
  $matkul = $_POST['matkul'];
  $uts = $_POST['nilai_uts'];
  $uas = $_POST['nilai_uas'];
  $tugas = $_POST['nilai_praktik'];


  $nsNew  = ['NIM' => $nim, 'nama_lengkap' => $nama, 'matkul' => $matkul, 'nilai_uts' => $uts, 'nilai_uas' => $uas, 'nilai_praktik' => $tugas];
  $ns1 = ['NIM' => '01101', 'nama_lengkap' => 'Naufal Nur Hidayat', 'matkul' => 'Matematika', 'nilai_uts' => 80, 'nilai_uas' => 84, 'nilai_praktik' => 78];
  $ns2 = ['NIM' => '01121', 'nama_lengkap' => 'Muhammad Rizky Ramadhan', 'matkul' => 'Matematika', 'nilai_uts' => 70, 'nilai_uas' => 50, 'nilai_praktik' => 68];
  $ns3 = ['NIM' => '01130', 'nama_lengkap' => 'Mia Aprilia Satya', 'matkul' => 'Matematika', 'nilai_uts' => 60, 'nilai_uas' => 86, 'nilai_praktik' => 70];
  $ns4 = ['NIM' => '01134', 'nama_lengkap' => 'SeptianaSari', 'matkul' => 'Matematika', 'nilai_uts' => 90, 'nilai_uas' => 91, 'nilai_praktik' => 82];
  $ns_arr = [$ns1, $ns2, $ns3, $ns4];
  array_push($ns_arr, $nsNew);

  ?>
  <div class="container">
    <div class="data">
      <h1>Data Nilai Mahasiswa</h1>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">NIM</th>
            <th scope="col">Nama Lengkap</th>
            <th scope="col">Mata Kuliah </th>
            <th scope="col">UTS </th>
            <th scope="col">UAS</th>
            <th scope="col">Praktikum</th>
            <th scope="col">Nilai Akhir</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $nomor = 1;
          foreach ($ns_arr as $row) :
          ?>
            <tr>
              <th scope="row"><?= $nomor ?></th>
              <td><?= $row['NIM'] ?></td>
              <td><?= $row['nama_lengkap'] ?></td>
              <td><?= $row['matkul'] ?></td>
              <td><?= $row['nilai_uts'] ?></td>
              <td><?= $row['nilai_uas'] ?></td>
              <td><?= $row['nilai_praktik'] ?></td>
              <td><?= ($row['nilai_uts'] * 30 / 100) + ($row['nilai_uas'] * 35 / 100) + ($row['nilai_praktik'] * 35 / 100) ?></td>
            </tr>
          <?php
            $nomor++;
          endforeach;
          ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>