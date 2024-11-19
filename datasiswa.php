<?php
require 'init.php';
require 'index.php';
$data_siswa=$siswa->getdata();
if(isset($_POST['Cari'])){
    $data_siswa= $siswa->Cari($_POST["keyword"]);
}
?>
<section class="konten">
    <h3 class="text-center mt-3">DAFTAR SISWA</h3>
    <a class="btn btn-sm btn-primary float-end" href="tambahsiswa.php">Tambah siswa</a>
    <a class="btn btn-sm btn-warning" href="printsemua.php?id_data=<?= 0; ?>"> PRINT SEMUA</a>
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
        <th>id</th>
        <th>Nis</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
<?php
    foreach($data_siswa as $row) :?>
    <tr>
        <td><?= $row['id']; ?></td>
        <td><?= $row['nis']; ?></td>
        <td><?= $row['nama']; ?></td>
        <td><?= $row['kelas']; ?></td>
        <td><?= $row['jurusan']; ?></td>
        <td><?= $row['alamat']; ?></td>
    <td>
        <a class="btn btn-sm btn-warning" href="updatesiswa.php?id=<?=$row["id"];?>">ubah</a>
        <a class="btn btn-sm btn-warning" href="printsingledata.php?id_data=<?= 0; ?>&id_single_data=<?= $row['id']; ?>"> PRINT </a>

        <a class="btn btn-sm btn-danger" href="hapus.php?id_table=<?= 0; ?>&id_data=<?= $row['id']; ?>" onclick="return confirm('Yakin Hapus Kenangan?');">Hapus</a>
    </td>
    </tr>
<?php
endforeach;?>
</table>
</section>