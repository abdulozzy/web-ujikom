<?php
    require_once 'init.php';
    require 'index.php';
    $id=$_GET['id'];
    $datas=$siswa->getdataSingle($id);
    if($_POST){
        if($_POST>0){
            $siswa->data=[$_POST['id'],$_POST['nis'],$_POST['nama'],$_POST['kelas'],$_POST['jurusan'],$_POST['alamat']];
            $siswa->table='tb_siswa';
            $siswa->update();
            header('Location: datasiswa.php');
        }else{
            echo "Gagal Ubah Data";
        }
    }
?>

<div class="container">
    <div class="konten">
        <h3 class="text-center mt-3">Ubah Data Siswa</h3>
        <div class="card">
            <div class="card-header text-bg-success">
                <a class="btn btn-sm btn-secondary float-end" href="datasiswa.php">Kembali</a>
            </div>
            <div class="card-body">

    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?=$datas["id"];?>">
    <table border="0">
        <tr>
            <tr>
            <td>id</td>
            <td><input type="text" name="id" id="id" required="" value="<?= $datas['id'];?>"></td>
            </tr>
            <tr>
            <td>nis</td>
            <td><input type="text" name="nis" id="nis" required="" value="<?= $datas['nis'];?>"></td>
            </tr>
            <tr>
            <td>nama</td>
            <td><input type="text" name="nama" id="nama"  required="" value="<?= $datas["nama"];?>"></td>
            <tr>
            <td>kelas</td>
            <td><input type="text" name="kelas" id="kelas"  required="" value="<?= $datas["kelas"];?>"></td>
            </tr>
            <tr>
            <td>jurusan</td>
            <td><input type="text" name="jurusan" id="jurusan"  required="" value="<?= $datas["jurusan"];?>"></td>
            </tr>
            <tr>
            <td>alamat</td>
            <td><input type="text" name="alamat" id="alamat"  required="" value="<?= $datas["alamat"];?>"></td>
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