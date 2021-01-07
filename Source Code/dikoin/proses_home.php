<?php
include('Koneksi/Koneksi.php');


require'proses_transaksipengeluaran.php' ;
require'proses_transaksi.php';


$koneksi = mysqli_connect("localhost","root","","dikoin");
$bisa = $_SESSION['pengguna'];


$result = mysqli_query($koneksi, "SELECT * FROM datapemasukan WHERE id_pengguna =  $bisa") ;

$result1 = mysqli_query($koneksi, "SELECT * FROM datapengeluaran WHERE id_pengguna =  $bisa") ;

    



?>