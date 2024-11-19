<?php
    require_once 'init.php';
    require 'index.php';
    $id=$_GET['id'];
    $g=$guru->getdataSingle($id);
    if($_POST){
        if($_POST>0){
            $guru->data=[$_POST['id'],$_POST['nama_guru'],$_POST['alamat_guru'],$_POST['kategori_guru']];
            $guru->table='tb_guru';
            $guru->update();
            header('Location: dataguru.php');
        }else{
            echo "Gagal Tambah Data";
        }
    }
?>
<div class="container">
    <div class="konten">
        <h3 class="text-center mt-3">Ubah Data Guru</h3>
        <div class="card">
            <div class="card-header text-bg-success">
                <a class="btn btn-sm btn-secondary float-end" href="dataguru.php">Kembali</a>
            </div>
            <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_guru" value="<?=$g["id_guru"];?>">
    <table border="0">
        <tr>
            <tr>
            <td>id</td>
            <td><input type="text" name="id" id="id" required="" value="<?= $g['id'];?>"></td>
            </tr>
            <tr>
            <td>nama_guru</td>
            <td><input type="text" name="nama_guru" id="nama_guru" required="" value="<?= $g['nama_guru'];?>"></td>
            </tr>
            <tr>
            <td>alamat_guru</td>
            <td><input type="text" name="alamat_guru" id="alamat_guru"  required="" value="<?= $g["alamat_guru"];?>"></td>
            <tr>
            <td>kategori_guru</td>
            <td><input type="text" name="kategori_guru" id="kategori_guru"  required="" value="<?= $g["kategori_guru"];?>"></td>
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