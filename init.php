<?php require 'database.php';

$siswa=new database();
$siswa->table='tb_siswa';
$siswa->field=['id','nis','nama','kelas','jurusan','alamat'];
$siswa->typetable = 0;
$current_table;

$sekolah=new database();
$sekolah->table='tb_sekolah';
$sekolah->field=['id','nama_sekolah','alamat_sekolah','kategori_sekolah'];
$sekolah->typetable = 1;
$current_table;

$guru=new database();
$guru->table='tb_guru';
$guru->field=['id','nama_guru','alamat_guru','kategori_guru'];
$guru->typetable = 2;
$current_table;

$user=new database();
$user->table='tb_guru';
$user->field=['username','password'];
?>