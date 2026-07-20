<?php
include '../config/koneksi.php';
include '../includes/header.php';

$id = $_GET['id'];

$data = mysqli_query($koneksi, "SELECT * FROM inventaris WHERE id='$id'");
$d = mysqli_fetch_assoc($data);
?>

<h2 class="mb-4">Edit Data Inventaris</h2>

<form action="proses_edit.php" method="POST">

    <input type="hidden" name="id" value="<?= $d['id']; ?>">

    <div class="mb-3">
        <label class="form-label">Kode Inventaris</label>
        <input type="text" name="kode_inventaris" class="form-control"
            value="<?= $d['kode_inventaris']; ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control"
            value="<?= $d['nama_barang']; ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Kategori Barang</label>

        <select name="kategori_barang" class="form-select">

            <?php
            $kategori = [
                "Komputer",
                "Monitor",
                "Keyboard",
                "Mouse",
                "Printer",
                "Proyektor",
                "Lainnya"
            ];

            foreach($kategori as $k){
                $selected = ($d['kategori_barang']==$k) ? "selected" : "";
                echo "<option value='$k' $selected>$k</option>";
            }
            ?>

        </select>

    </div>

    <div class="mb-3">
        <label class="form-label">Jumlah Barang</label>
        <input type="number" name="jumlah_barang" class="form-control"
            value="<?= $d['jumlah_barang']; ?>" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Kondisi Barang</label>

        <select name="kondisi_barang" class="form-select">

            <option value="Baik"
            <?= ($d['kondisi_barang']=="Baik") ? "selected" : "" ?>>
            Baik
            </option>

            <option value="Rusak"
            <?= ($d['kondisi_barang']=="Rusak") ? "selected" : "" ?>>
            Rusak
            </option>

        </select>

    </div>

    <div class="mb-3">
        <label class="form-label">Lokasi Penyimpanan</label>
        <input type="text"
               name="lokasi_penyimpanan"
               class="form-control"
               value="<?= $d['lokasi_penyimpanan']; ?>"
               required>
    </div>

    <button class="btn btn-success">
        Update
    </button>

    <a href="../index.php" class="btn btn-secondary">
        Kembali
    </a>

</form>

<?php
include '../includes/footer.php';
?>
