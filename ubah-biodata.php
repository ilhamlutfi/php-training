<?php

$title = 'Ubah Biodata';

include 'layout/header.php';

require 'controller/biodatacontroller.php';

// ambil data berdasarkan id_pendaftar
$id_pendaftar = (int)$_GET['id_pendaftar'];

// query data biodata berdasarkan id_pendaftar
$biodata = query("SELECT * FROM data_pendaftar WHERE id_pendaftar = $id_pendaftar")[0];

// cek apakah tombol submit sudah di tekan atau belum
if (isset($_POST['submit'])) {
  // masukkan data id_pendaftar ke dalam $_POST
  $_POST['id_pendaftar'] = $id_pendaftar;

  // lempar data ke function update_biodata
  if (update_biodata($_POST) > 0) {
    echo "<script>
            alert('Data berhasil disimpan');
            document.location.href = 'biodata.php';
          </script>";
  } else {
    echo "<script>
            alert('Data gagal disimpan');
            document.location.href = 'ubah-biodata.php?id_pendaftar='.$id_pendaftar;
          </script>";
  }
}

?>

<div class="container card shadow-sm my-5">
  <div class="mt-3 mb-3 text-center">
    <h1>Formulir Pendaftaran: <?= $id_pendaftar; ?></h1>
  </div>

  <form action="" method="post">
    <div class="mb-3">
      <label for="nama">Nama</label>
      <input type="text" name="nama" id="nama" class="form-control" value="<?= $biodata['nama']; ?>" required />
    </div>

    <div class="mb-3">
      <label for="">Agama</label>
      <select name="agama" id="" class="form-select">
        <option value="islam" <?= $biodata['agama'] == 'islam' ? 'selected' : null; ?>>Islam</option>
        <option value="kristen" <?= $biodata['agama'] == 'kristen' ? 'selected' : null; ?>>kristen</option>
        <option value="budha" <?= $biodata['agama'] == 'budha' ? 'selected' : null; ?>>Budha</option>
      </select>
    </div>

    <div class="mb-3">
      <label for="">Umur</label>
      <input type="number" name="umur" min="0" class="form-control" value="<?= $biodata['umur']; ?>" required />
    </div>

    <div class="mb-3">
      <label for="">Tanggal Lahir</label>
      <input type="date" name="tanggal_lahir" class="form-control" value="<?= $biodata['tanggal_lahir']; ?>" required />
    </div>

    <div class="mb-3">
      <label for="">Alamat</label>
      <textarea name="alamat" id="alamat" class="form-control" required><?= $biodata['alamat']; ?></textarea>
    </div>

    <div class="mb-3">
      <label for="">Email</label>
      <input type="email" name="email" class="form-control" value="<?= $biodata['email']; ?>" required />
    </div>

    <div class="float-end mb-3">
      <a href="biodata.php" class="btn btn-secondary">Kembali</a>
      <button type="submit" class="btn btn-primary" title="Tombol Kirim" name="submit">Kirim</button>
    </div>

  </form>
</div>

<?php include 'layout/footer.php'; ?>
