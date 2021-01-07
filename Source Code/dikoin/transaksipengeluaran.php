<?php
include('Koneksi/Koneksi.php');
session_start();

require'proses_transaksipengeluaran.php' ;


if (isset($_POST['kirim']) ){
    if(datatiga($_POST) > 0) {
        echo "<script>alert('DATA PENGELUARAN BERHASIL DI INPUT')</script>";
    }
    else{
        echo "<script>alert('DATA PENGELUARAN GAGAL DI INPUT')</script>";
    }
}

$koneksi = mysqli_connect("localhost","root","","dikoin");

$result = mysqli_query($koneksi, "SELECT * FROM datapengeluaran") ;



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
    <h1>Transaksi</h1>
    <br>
        <div class="d-flex flex-row bd-highlight mb-2">
            <div class="p-2 bd-highlight"> <a href="transaksi.php"> <button type="button" class="btn btn-success">Pemasukan</button></a> </div>
            <div class="p-2 bd-highlight"> <a href="transaksipengeluaran.php"> <button type="button" class="btn btn-danger">Pengeluaran</button></a> </div>
        </div>
    
        <form action="transaksipengeluaran.php" method="post">
            <div class="card-body" style="background: #992828;  border-radius: 15px;">
                <div class="row mb-3">
                    <label  class="col-sm-2 col-form-label" style="text-align: left; padding-left: 50px">Jumlah</label>
                    <div class="col-sm-10">
                    <input  id="decoy1"   oninput="decoywkwk(this, event)" onkeydown="return numbersonly(this, event);" onkeyup="javascript:tandaPemisahTitik(this);" name="jumlah"  required="required"  type="jumlah" class="form-control"  placeholder="Rp.0">

                  </div>
                </div>
                <div class="row mb-3">
                    <label  class="col-sm-2 col-form-label" style="text-align: left; padding-left: 50px" >Keterangan</label>
                    <div class="col-sm-10">
                    <input  name="keterangan" required="required" type="keterangan" value="" type="keterangan" class="form-control"  placeholder="Keterangn Pemasukan" >
                    </div>
                </div>
                <div class="input-group mb-3">
                    <label class="col-sm-2 col-form-label" style="text-left: right; margin-right: 5px; padding-right: 80px; padding-left: 23px;">Kategori</label>
                    <select name="kategori" class="form-select" id="inputGroupSelect01" style="padding-left: 15px; border-radius: 5px;">
                        <option selected>Pilih Kategori...</option>
                        <option name="kategori" required="required" value="konsumtif">Pengeluaran Konsumtif</option>
                        <option name="kategori" required="required" value="pengeluaran_investasi">Pengeluaran Investasi</option>
                        <option name="kategori" required="required" value="bayar_utang">Bayar Utang</option>
                        <option name="kategori" required="required" value="lainnya">Pengeluaran Lainnya</option>
                    </select>
                </div>
                          <div class="text-end">
                              <button class="btn btn-primary" type="submit"  value="Kirim" name="kirim" style="background: #8D0606; border-radius: 10px; border: 0px; font-family: 'Baloo 2', cursive;" > Perbarui Pengeluaran</button>
                          </div>
            </div>
        </form>
</div>        
</section>

    <script src="js/my.js"></script>

  
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