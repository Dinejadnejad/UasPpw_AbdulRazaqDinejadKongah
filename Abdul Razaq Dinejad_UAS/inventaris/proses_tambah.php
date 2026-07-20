<?php

include '../config/koneksi.php';

$kode = $_POST['kode_inventaris'];
$nama = $_POST['nama_barang'];
$kategori = $_POST['kategori_barang'];
$jumlah = $_POST['jumlah_barang'];
$kondisi = $_POST['kondisi_barang'];
$lokasi = $_POST['lokasi_penyimpanan'];

$query = "INSERT INTO inventaris
(kode_inventaris, nama_barang, kategori_barang, jumlah_barang, kondisi_barang, lokasi_penyimpanan)

VALUES

('$kode','$nama','$kategori','$jumlah','$kondisi','$lokasi')";

mysqli_query($koneksi, $query);

header("Location: ../index.php");

?>