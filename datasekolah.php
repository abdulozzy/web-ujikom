<?php
require 'init.php';
require 'index.php';
$data_sekolah=$sekolah->getdata();
if(isset($_POST['Cari'])){
    $data_sekolah= $sekolah->Cari($_POST["keyword"]);
}
?>
<section class="konten">
    <h3 class="text-center mt-3">DAFTAR SEKOLAH</h3>
    <a class="btn btn-sm btn-primary float-end" href="tambahsekolah.php">Tambah sekolah</a>
    <a class="btn btn-sm btn-warning" href="printsemua.php?id_data=<?= 1; ?>"> PRINT SEMUA</a>
<form action="" method="post">
    <div class="row">
        <div class="col-4">
        <input type="text" class="form-control" name="keyword" id="keyword"> 
        </div>
        <div class="col-1">
        <input type="submit" class="btn btn-sm btn-success" name="Cari" value="Cari"><br>
        </div>
    </div>

<table class="table table-hover mt-3">
    <tr>
        <th>Id</th>
        <th>Nama Sekolah</th>
        <th>Alamat Sekolah</th>
        <th>kategori_sekolah</th>
        <th>Aksi</th>
    </tr>
<?php
    foreach($data_sekolah as $row) :?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['nama_sekolah']; ?></td>
        <td><?= $row['alamat_sekolah']; ?></td>
        <td><?= $row['kategori_sekolah']; ?></td>
    <td>
        <a class="btn btn-sm btn-warning" href="updatesekolah.php?id=<?=$row["id"];?>">ubah</a>
        <a class="btn btn-sm btn-danger" href="hapus.php?id_table=<?= 1; ?>&id_data=<?= $row['id']; ?>" onclick="return confirm('Yakin Hapus Kenangan?');">Hapus</a>
        <a class="btn btn-sm btn-warning" href="printsingledata.php?id_data=<?= 1; ?>&id_single_data=<?= $row['id']; ?>"> PRINT </a>

    </tr>
<?php
endforeach;?>
</table>
</section>