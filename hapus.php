<?php
// require 'database.php';
require 'init.php';
 $id_table = $_GET['id_table'];
 $id_data = $_GET['id_data'];

 $current_data;
 $backlink;

 switch ($id_table) {
    case 0:
        $current_data = $siswa;
        $backlink = "datasiswa.php";
        break;
    case 1:
        $current_data = $sekolah;
        $backlink = "datasekolah.php";
        break;
    case 2:
        $current_data = $guru;
        $backlink = "dataguru.php";
        break;
    
    default:
        # code...
        break;
 }


if($current_data->delete($id_data) == true){
    header('Location: '.$backlink.'');
}
 ?>