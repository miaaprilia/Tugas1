<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <title>Form Nilai Siswa</title>


  <!-- Bootstrap core CSS -->
  <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  <meta name="theme-color" content="#7952b3">


  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="https://getbootstrap.com/docs/5.0/examples/checkout/form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

  <div class="container">
    <main>
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://s-media-cache-ak0.pinimg.com/originals/40/1e/6c/401e6ce81c674e75a47683ed4d8c4db6.jpg" alt="" width="72">
        <h2>Form Nilai Mahasiswa</h2>

      </div>

      <div class="row">

        <div class="col-md-12">
          <form action="table.php" method="POST">
            <div class="row g-3">
              <div class="col-sm-12">
                <label for="firstName" class="form-label">NIM</label>
                <input id="NIM" required="" name="NIM" placeholder="Masukan NIM" type="text" class="form-control">

              </div>
              <div class="col-sm-12">
                <label for="firstName" class="form-label">Nama Lengkap</label>
                <input id="nama_lengkap" required="" name="nama_lengkap" placeholder="Masukan Nama Lengkap" type="text" class="form-control">

              </div>

              <div class="col-sm-12">
                <label for="firstName" class="form-label">Mata Kuliah</label>
                <select required="" name="matkul" class="form-control">
                  <option value="">Pilih Matkul</option>
                  <option>Pemrograman Web 2</option>
                  <option>Bahasa Inggris</option>
                  <option>Statistik dan Probabilitas</option>
                  <option>Pancasila dan Pendidikan Kewarganegaraan</option>
                  <option>Keterampilan Komunikasi</option>
                  <option>User Interface & Experience</option>
                  <option>Jaringan Komputer</option>
                  <option>Basis Data</option>
                </select>

              </div>

              <div class="col-sm-12">
                <label for="firstName" class="form-label">Nilai UTS</label>
                <input id="nilai_uts" required="" name="nilai_uts" placeholder="Masukan Nilai UTS" type="number" class="form-control">

              </div>

              <div class="col-sm-12">
                <label for="firstName" class="form-label">Nilai UAS</label>
                <input id="nilai_uas" required="" name="nilai_uas" placeholder="Masukan NIlai UAS" type="number" class="form-control">

              </div>

              <div class="col-sm-12">
                <label for="firstName" class="form-label">Nilai Praktik</label>
                <input id="Nilai Praktik" required="" name="nilai_praktik" placeholder="Masukan Nilai Praktik" type="number" class="form-control">

              </div>

              <button class="w-100 btn btn-primary btn-lg" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </main>

    <footer class="my-5 pt-5 text-muted text-center text-small">

    </footer>
  </div>


  <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <script src="form-validation.js"></script>
</body>

</html>