<?php

$title = 'Tambah Biodata';

include 'layout/header.php';

require 'controller/biodatacontroller.php';

// cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST['submit'])) {
  // lempar data ke function store_biodata
  if (store_biodata($_POST) > 0) {
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

?>

<div class="container card shadow-sm my-5">
  <div class="mt-3 mb-3 text-center">
    <h1>Formulir Pendaftaran</h1>
  </div>

  <form action="" method="post">
    <div class="mb-3">
      <label for="nama">Nama</label>
      <input type="text" name="nama" id="nama" class="form-control" required />
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
      <input type="number" name="umur" min="0" class="form-control" required />
    </div>

    <div class="mb-3">
      <label for="">Tanggal Lahir</label>
      <input type="date" name="tanggal_lahir" class="form-control" required />
    </div>

    <div class="mb-3">
      <label for="">Alamat</label>
      <textarea name="alamat" id="alamat" class="form-control" required></textarea>
    </div>

    <div class="mb-3">
      <label for="">Email</label>
      <input type="email" name="email" class="form-control" required />
    </div>

    <div class="float-end">
      <button type="submit" class="btn btn-primary mb-2" title="Tombol Kirim" name="submit">Kirim</button>
    </div>

  </form>
</div>

<?php include 'layout/footer.php'; ?>
