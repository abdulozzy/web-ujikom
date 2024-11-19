<?php
require 'init.php';
require 'index.php';
$data_guru=$guru->getdata();
if(isset($_POST['Cari'])){
    $data_guru= $guru->Cari($_POST["keyword"]);
}
?>
<section class="konten">
    <h3 class="text-center mt-3">DAFTAR guru</h3>
    <a class="btn btn-sm btn-primary float-end" href="tambahguru.php">Tambah guru</a>
    <a class="btn btn-sm btn-warning" href="printsemua.php?id_data=<?= 2; ?>"> PRINT SEMUA</a>
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
        <th>Nama Guru</th>
        <th>Alamat Guru</th>
        <th>Kategori Guru</th>
        <th>Aksi</th>
    </tr>
<?php
    foreach($data_guru as $row) :?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['nama_guru']; ?></td>
        <td><?= $row['alamat_guru']; ?></td>
        <td><?= $row['kategori_guru']; ?></td>
    <td>
        <a class="btn btn-sm btn-warning" href="updateguru.php?id=<?=$row["id"];?>">ubah</a>
        <a class="btn btn-sm btn-danger" href="hapus.php?id_table=<?= 2; ?>&id_data=<?= $row['id']; ?>" onclick="return confirm('Yakin Hapus Kenangan?');">Hapus</a>
        <a class="btn btn-sm btn-warning" href="printsingledata.php?id_data=<?= 2; ?>&id_single_data=<?= $row['id']; ?>"> PRINT </a>
     
    </td>
    </tr>
<?php
endforeach;?>
</table>
</section>