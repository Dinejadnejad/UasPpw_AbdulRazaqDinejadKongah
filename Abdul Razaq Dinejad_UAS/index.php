<?php
include 'config/koneksi.php';
include 'includes/header.php';

// Statistik
$total = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM inventaris"));
$baik = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM inventaris WHERE kondisi_barang='Baik'"));
$rusak = mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM inventaris WHERE kondisi_barang='Rusak'"));
?>

<h2 class="mb-3">Dashboard Inventaris</h2>

<p>
    Website ini digunakan untuk mengelola seluruh inventaris Laboratorium Komputer STTI NIIT.
</p>

<a href="inventaris/tambah.php" class="btn btn-primary mb-4">
    + Tambah Data Inventaris
</a>

<div class="row">

    <div class="col-md-4">
        <div class="card text-bg-primary shadow mb-4">
            <div class="card-body">
                <h5>Total Inventaris</h5>
                <h2><?= $total ?></h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-bg-success shadow mb-4">
            <div class="card-body">
                <h5>Kondisi Baik</h5>
                <h2><?= $baik ?></h2>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card text-bg-danger shadow mb-4">
            <div class="card-body">
                <h5>Kondisi Rusak</h5>
                <h2><?= $rusak ?></h2>
            </div>
        </div>
    </div>

</div>

<div class="card shadow">

    <div class="card-header bg-dark text-white">
        <h4 class="mb-0">Data Inventaris</h4>
    </div>

    <div class="card-body">

        <table class="table table-bordered table-hover">

            <thead class="table-primary">

                <tr>

                    <th>No</th>
                    <th>Kode</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Jumlah</th>
                    <th>Kondisi</th>
                    <th>Lokasi</th>
                    <th width="170">Aksi</th>

                </tr>

            </thead>

            <tbody>

                <?php

                $no = 1;

                $data = mysqli_query($koneksi, "SELECT * FROM inventaris ORDER BY id DESC");

                while($d = mysqli_fetch_assoc($data)){

                ?>

                <tr>

                    <td><?= $no++ ?></td>

                    <td><?= $d['kode_inventaris'] ?></td>

                    <td><?= $d['nama_barang'] ?></td>

                    <td><?= $d['kategori_barang'] ?></td>

                    <td><?= $d['jumlah_barang'] ?></td>

                    <td>

                        <?php

                        if($d['kondisi_barang']=="Baik"){

                            echo "<span class='badge bg-success'>Baik</span>";

                        }else{

                            echo "<span class='badge bg-danger'>Rusak</span>";

                        }

                        ?>

                    </td>

                    <td><?= $d['lokasi_penyimpanan'] ?></td>

                    <td>

                        <a href="inventaris/edit.php?id=<?= $d['id'] ?>" class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="inventaris/hapus.php?id=<?= $d['id'] ?>"
                           class="btn btn-danger btn-sm"
                           onclick="return confirm('Yakin ingin menghapus data ini?')">
                            Hapus
                        </a>

                    </td>

                </tr>

                <?php } ?>

            </tbody>

        </table>

    </div>

</div>

<?php
include 'includes/footer.php';
?>
```
