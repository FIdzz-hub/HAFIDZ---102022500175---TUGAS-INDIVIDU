<?php
// koneksi database

require 'koneksi.php';

//mekanik tombol simpan
$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$kategori = $_POST['kategori'];
$spesifikasi = $_POST['spesifikasi'];
$satuan = $_POST['satuan'];
$stok = $_POST['stok'];
$keterangan = $_POST['keterangan'];


$query = "INSERT INTO barang
          (kode_barang, nama_barang, kategori, spesifikasi, satuan, stok, keterangan)
          VALUES
          ('$kode_barang',
           '$nama_barang',
           '$kategori',
           '$spesifikasi',
           '$satuan',
           '$stok',
           '$keterangan')";


$result = mysqli_query($koneksi, $query);


if ($result) {

    header("Location: index.php");
} else {

    echo "Data gagal disimpan: " . mysqli_error($koneksi);
}
