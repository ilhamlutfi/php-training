<?php

// fungsi untuk mengambil data
function query($query) {
    global $db;

    $result = mysqli_query($db, $query);
    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// fungsi untuk menyimpan data biodata
function store_biodata($data) {
    global $db;

    // ambil data dari formulir
    $nama         = $data['nama']; // $data['nama'] adalah name dari inputan
    $agama        = $data['agama'];
    $umur         = $data['umur'];
    $tanggal_lahir = $data['tanggal_lahir'];
    $alamat       = $data['alamat'];
    $email        = $data['email'];

    // query insert data
    $query = "INSERT INTO data_pendaftar VALUES (null, '$nama', '$agama', '$umur', '$tanggal_lahir', '$alamat', '$email', now())";

    // eksekusi query
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

// fungsi untuk menghapus data biodata
function delete_biodata($id_pendaftar) {
    global $db;

    // query delete data
    $query = "DELETE FROM data_pendaftar WHERE id_pendaftar = $id_pendaftar";

    // eksekusi query
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
