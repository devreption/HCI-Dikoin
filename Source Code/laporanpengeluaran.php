<?php

include('Koneksi/Koneksi.php');
session_start();

require'proses_transaksipengeluaran.php' ;


$koneksi = mysqli_connect("localhost","root","","dikoin");
$bisa = $_SESSION['pengguna'];

$result = mysqli_query($koneksi, "SELECT * FROM datapengeluaran WHERE id_pengguna =  $bisa") ;

?>


<!DOCTYPE html>
<html lang="id">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="images/icondikoin.ico" />

<title>Dikoin: Asisten Finansial Pribadi Anda</title>
<link rel="stylesheet" href="css/main.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light ">
      <div class="container">
            <nav class="navbar navbar-light bg-light">
                <a class="navbar-brand" href="Home.php">
                  
                  <img src="images/logodikoin.png" width="220" alt="logo" loading="lazy" style="position: relative; top: -15px;">

                </a>
              </nav>


                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav  ml-auto" style="position: relative; top: -10px;">
            <a class="nav-link active" href="Home.php"  style="cursor: pointer;" > LOBI<span class="sr-only"></span></a>
            <a class="nav-link" href="kuesioner.php">KUESIONER</a>
            <a class="nav-link" href="profilakun.php">PROFIL</a>
          </div>  
        </div>
      </div>
    
    </nav>

<section id="home" class="main-home2">
        
<div class="container">
    <h1>Laporan Pengeluaran</h1>
    <br>
    <div class="d-flex flex-row bd-highlight mb-2">
            <div class="p-2 bd-highlight"> <a href="laporankeuangan.php"> <button type="button" class="btn btn-success">Pemasukan</button></a> </div>
            <div class="p-2 bd-highlight"> <a href="laporanpengeluaran.php"> <button type="button" class="btn btn-danger">Pengeluaran</button></a> </div>
        </div> <br>
        <table class="table " style="background: #992828;  border-radius: 10px; color: white;">
                    <tr>
                      <th>
                          No.
                      </th>
                      <th>
                          Keterangan
                      </th>
                      <th>
                          Jumlah
                      </th>
                    
                  </tr>

                     
                      <?php  foreach( $result as $key => $row) : ?>
                  <tr style=" text-align: center;">
                      <td> <?= $key+1; ?></td>
                      <td> <?= $row["keterangan"];?></td>
                      <td> <?=  "Rp. " . number_format($row ["jumlah"]) . ".00";?></td>
                      <?php $total[] = $row["jumlah"]; ?>
                  </tr>
                    
                      <?php endforeach; ?>
                      <tr>
                        <td>
                          
                        </td>
                        <td>
                            TOTAL
                        </td>
                        <td>
                           <?php if ( empty ($total)  ) {
                             echo 'ANDA BELUM MEMASUKAN DATA' ;
                           }
                           else{
                             echo "Rp. " . number_format(array_sum ($total)) . ".00";
                           }

                              ?>  
                        </td>
                      </tr>
        </table>
   
</div>        
</section>

    

  </body>
  <footer class="site-footer">

      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
         <a href="Home.php"> <img src="images/icondikoin.ico" style="width: 5%" alt=""><span style="font-family: 'Baloo 2' , cursive; font-size: 20px;"> Dikoin </span></a>
            </p>
              </p>
            <p class="text-start"> <i>Version 1.0</i>
            </p>
          </div>


        </div>
      </div>
</footer>
</html>