<?php
include '../config/koneksi.php';
include '../includes/header.php';
?>

<h2 class="mb-4">Tambah Data Inventaris</h2>

<form action="proses_tambah.php" method="POST">

    <div class="mb-3">
        <label class="form-label">Kode Inventaris</label>
        <input type="text" name="kode_inventaris" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Kategori Barang</label>
        <select name="kategori_barang" class="form-select" required>
            <option value="">-- Pilih Kategori --</option>
            <option>Komputer</option>
            <option>Monitor</option>
            <option>Keyboard</option>
            <option>Mouse</option>
            <option>Printer</option>
            <option>Proyektor</option>
            <option>Lainnya</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Jumlah Barang</label>
        <input type="number" name="jumlah_barang" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Kondisi Barang</label>
        <select name="kondisi_barang" class="form-select" required>
            <option value="">-- Pilih Kondisi --</option>
            <option>Baik</option>
            <option>Rusak</option>
        </select>
    </div>

    <div class="mb-3">
        <label class="form-label">Lokasi Penyimpanan</label>
        <input type="text" name="lokasi_penyimpanan" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-success">
        Simpan
    </button>

    <a href="../index.php" class="btn btn-secondary">
        Kembali
    </a>

</form>

<?php
include '../includes/footer.php';
?>