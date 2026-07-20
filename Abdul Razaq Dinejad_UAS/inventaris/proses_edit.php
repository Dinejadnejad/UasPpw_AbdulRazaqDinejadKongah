```php
<?php

include '../config/koneksi.php';

$id = $_POST['id'];
$kode = $_POST['kode_inventaris'];
$nama = $_POST['nama_barang'];
$kategori = $_POST['kategori_barang'];
$jumlah = $_POST['jumlah_barang'];
$kondisi = $_POST['kondisi_barang'];
$lokasi = $_POST['lokasi_penyimpanan'];

mysqli_query($koneksi, "UPDATE inventaris SET

kode_inventaris='$kode',
nama_barang='$nama',
kategori_barang='$kategori',
jumlah_barang='$jumlah',
kondisi_barang='$kondisi',
lokasi_penyimpanan='$lokasi'

WHERE id='$id'

");

header("Location: ../index.php");

?>
