<?php

// koneksi database

require 'koneksi.php';

//mekanik update setelah edit
$id = $_POST['id'];

$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$kategori = $_POST['kategori'];
$spesifikasi = $_POST['spesifikasi'];
$satuan = $_POST['satuan'];
$stok = $_POST['stok'];
$keterangan = $_POST['keterangan'];

$query = "UPDATE barang SET

    kode_barang='$kode_barang',
    nama_barang='$nama_barang',
    kategori='$kategori',
    spesifikasi='$spesifikasi',
    satuan='$satuan',
    stok='$stok',
    keterangan='$keterangan'

    WHERE id='$id'
";

$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: index.php");
} else {
    echo "Data gagal diupdate: " . mysqli_error($koneksi);
}

?>