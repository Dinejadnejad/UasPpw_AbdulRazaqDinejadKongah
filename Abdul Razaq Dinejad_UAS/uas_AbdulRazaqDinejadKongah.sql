CREATE TABLE inventaris (
    id INT AUTO_INCREMENT PRIMARY KEY,
    kode_inventaris VARCHAR(20) NOT NULL,
    nama_barang VARCHAR(100) NOT NULL,
    kategori_barang VARCHAR(50) NOT NULL,
    jumlah_barang INT NOT NULL,
    kondisi_barang ENUM('Baik','Rusak') NOT NULL,
    lokasi_penyimpanan VARCHAR(100) NOT NULL
);

create database inventaris_lab;