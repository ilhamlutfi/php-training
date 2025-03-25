<?php

require 'config/database.php';
require 'controller/biodatacontroller.php';

$id_pendaftar = (int)$_GET['id_pendaftar'];

if (delete_biodata($id_pendaftar) > 0) {
    echo "<script>
            alert('Data biodata berhasil dihapus');
            document.location.href = 'biodata.php';
          </script>";
} else {
    echo "<script>
            alert('Data biodata gagal dihapus');
            document.location.href = 'biodata.php';
          </script>";
}
