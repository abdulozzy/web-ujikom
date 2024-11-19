<?php
    require_once 'init.php';
    require 'index.php';
    if($_POST){
        if($_POST>0){
            $siswa->data=[$_POST['id'],$_POST['nis'],$_POST['nama'],$_POST['kelas'],$_POST['jurusan'],$_POST['alamat']];
            $siswa->table='tb_siswa';
            $siswa->save();
            header('Location: datasiswa.php');
        }else{
            echo "Gagal Ubah Data";
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
            <td>id</td>
            <td><input type="text" name="id" id="id"></td>
            </tr>
            <tr>
            <td>nis</td>
            <td><input type="text" name="nis" id="nis"></td>
            <tr>
            <td>nama</td>
            <td><input type="text" name="nama" id="nama"></td>
            </tr>
            <tr>
            <td>Kelas</td>
            <td><input type="text" name="kelas" id="kelas"></td>
            </tr>
            <tr>
            <td>jurusan</td>
            <td><input type="text" name="jurusan" id="jurusan"></td>
            </tr>
            <tr>
            <td>alamat</td>
            <td><input type="text" name="alamat" id="alamat"></td>
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
