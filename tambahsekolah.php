<?php
    require_once 'init.php';
    require 'index.php';
    if($_POST){
        if($_POST>0){
            $sekolah->data=[$_POST['id_sekolah'],$_POST['nama_sekolah'],$_POST['alamat_sekolah'],$_POST['kategori_sekolah']];
            $sekolah->table='tb_sekolah';
            $sekolah->save();
            header('Location: datasekolah.php');
        }else{
            echo "Gagal Tambah Data";
        }
    }
?>

<div class="container">
    <div class="konten">
        <h3 class="text-center mt-3">Tambah Data Sekolah</h3>
        <div class="card">
            <div class="card-header text-bg-success">
                <a class="btn btn-sm btn-secondary float-end" href="datasekolah.php">Kembali</a>
            </div>
            <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
    <table border="0" class="mx-auto">
        <tr>
            <tr>
            <td>id_sekolah</td>
            <td><input type="text" name="id_sekolah" id_sekolah="id_sekolah"></td>
            </tr>
            <tr>
            <td>nama_sekolah</td>
            <td><input type="text" name="nama_sekolah" id="nama_sekolah"></td>
            <tr>
            <td>alamat_sekolah</td>
            <td><input type="text" name="alamat_sekolah" id="alamat_sekolah"></td>
            </tr>
            <tr>
            <td>Kategori Sekolah</td>
            <td><input type="text" name="kategori_sekolah" id="kategori_sekolah"></td>
            </tr>
            <tr>
                <td class="text-center"><button type="submit">Simpan</td>
            </tr>
        </tr>
    </table>
    </form>
    </div>
    </div>
    </section>
    </div>
