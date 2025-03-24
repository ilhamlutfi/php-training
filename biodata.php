<?php

// koneksi ke db
$db = mysqli_connect("localhost", "root", "", "php_basic");

// cek koneksi
if (!$db) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST['submit'])) {

  // ambil data dari formulir
  $nama         = $_POST['nama']; // $_POST['nama'] adalah name dari inputan
  $agama        = $_POST['agama'];
  $umur         = $_POST['umur'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $alamat       = $_POST['alamat'];
  $email        = $_POST['email'];

  // query insert data
  $query = "INSERT INTO data_pendaftar VALUES (null, '$nama', '$agama', '$umur', '$tanggal_lahir', '$alamat', '$email', now())";

  // eksekusi query
  $result = mysqli_query($db, $query);

  // cek query
  if ($result) {
    echo "<script>
            alert('Data berhasil disimpan');
            document.location.href = 'index.php';
          </script>";
  } else {
    echo "<script>
            alert('Data gagal disimpan');
            document.location.href = 'index.php';
          </script>";
  }
}

include 'layout/header.php';

?>

  <div class="container card shadow-sm my-5">
    <div class="mt-3 mb-3 text-center">
      <h1>Formulir Pendaftaran</h1>
    </div>

    <form action="" method="post">
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
        <label for="">Alamat</label>
        <textarea name="alamat" id="alamat" class="form-control"></textarea>
      </div>

      <div class="mb-3">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control" />
      </div>

      <div class="float-end">
        <button type="submit" class="btn btn-primary mb-2" title="Tombol Kirim" name="submit">Kirim</button>
      </div>

    </form>
  </div>

  <?php include 'layout/footer.php'; ?>
