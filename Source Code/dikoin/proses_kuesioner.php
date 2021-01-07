<?php
include('Koneksi/Koneksi.php');


function datasatu($data) {
    global $koneksi;
    $email   = $data['email'];
    $tampilan = $data['tampilan'];
    $fitur   = $data['fitur'];
    $kepuasan   = $data['kepuasan'];
    $nilai  = $data['nilai'];
    $kritik  = $data['kritik'];
  
    

    $query  = "INSERT INTO `kuesioner` VALUES ('$email','$tampilan','$fitur','$kepuasan','$nilai', '$kritik')" ;
    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi);
}




?>