<?php
include('Koneksi/Koneksi.php');


function datatiga($data) {
    global $koneksi;
    $string = $data['jumlah'];
    $result = preg_replace("/[^0-9]/", "", $string);
    $jumlah   =  $result;
    $keterangan = $data['keterangan'];
    $kategori   = $data['kategori'];
    $id_pengguna = $_SESSION['pengguna'];
  
  
    

    $query  = "INSERT INTO `datapengeluaran` VALUES ('','$jumlah','$keterangan','$kategori', '$id_pengguna')" ;
    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi);
}


?>