<?php
    require_once 'init.php';
    require 'index.php';
    $id=$_GET['id'];
    $s=$sekolah->getdataSingle($id);
    if($_POST){
        if($_POST>0){
            $sekolah->data=[$_POST['id'],$_POST['nama_sekolah'],$_POST['alamat_sekolah'],$_POST['kategori_sekolah']];
            $sekolah->table='tb_sekolah';
            $sekolah->update();
            header('Location: datasekolah.php');
        }else{
            echo "Gagal Ubah Data";
        }
    }
?>

<div class="container">
    <div class="konten">
        <h3 class="text-center mt-3">Ubah Data sekolah</h3>
        <div class="card">
            <div class="card-header text-bg-success">
                <a class="btn btn-sm btn-secondary float-end" href="datasekolah.php">Kembali</a>
            </div>
            <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$s["id"];?>">
    <table border="0">
        <tr>
            <tr>
            <td>id</td>
            <td><input type="text" name="id" id="id" required="" value="<?= $s['id'];?>"></td>
            </tr>
            <tr>
            <td>nama_sekolah</td>
            <td><input type="text" name="nama_sekolah" id="nama_sekolah" required="" value="<?= $s['nama_sekolah'];?>"></td>
            </tr>
            <tr>
            <td>alamat_sekolah</td>
            <td><input type="text" name="alamat_sekolah" id="alamat_sekolah"  required="" value="<?= $s["alamat_sekolah"];?>"></td>
            <tr>
            <td>kategori_sekolah</td>
            <td><input type="text" name="kategori_sekolah" id="kategori_sekolah"  required="" value="<?= $s["kategori_sekolah"];?>"></td>
            </tr>
            <tr>
                <td><button type="submit">Simpan</td>
            </tr>
        </tr>
    </table>
    </form>
            </div>
        </div>
</section>
    </div>