<?php

// koneksi ke db
$db = mysqli_connect("localhost", "root", "", "php_basic");

// cek koneksi
if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
