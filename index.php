<?php  

// koneksi ke db
$db = mysqli_connect("localhost", "root", "", "php_basic");

// cek koneksi
if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Basic</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
  </head>

  <body>
    <div class="container card shadow-sm my-5">
      <div class="mt-3 mb-3 text-center">
        <h1>Formulir Pendaftaran</h1>
      </div>

      <form action="">
        <div class="mb-3">
          <label for="nama">Nama</label>
          <input type="text" name="nama" id="nama" class="form-control" />
        </div>

        <div class="mb-3">
          <label for="">Agama</label>
          <select name="agama" id="" class="form-select">
            <option value="" hidden>- pilih -</option>
            <option value="islam">Islam</option>
            <option value="kristen">kristen</option>
            <option value="budha">Budha</option>
          </select>
        </div>

        <div class="mb-3">
          <label for="">Umur</label>
          <input type="number" name="umur" min="0" class="form-control" />
        </div>

        <div class="mb-3">
          <label for="">Tanggal Lahir</label>
          <input type="date" name="tanggal_lahir" class="form-control" />
        </div>

        <div class="mb-3">
          <label for="">Kata Sandi</label>
          <input type="password" name="kata_sandi" class="form-control" />
        </div>

        <div class="mb-3">
          <label for="">Email</label>
          <input type="email" name="email" class="form-control" />
        </div>

        <div class="float-end">
            <button type="submit" class="btn btn-primary mb-2" title="Tombol Kirim">Kirim</button>
        </div>
        
      </form>
    </div>

    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
