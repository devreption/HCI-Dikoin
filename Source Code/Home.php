<?php
    include('Koneksi/Koneksi.php');
    session_start();

    require'proses_home.php';

    if(!isset($_SESSION['pengguna'])){
        header("location:Login.php");
        exit();
    }else{
        $id = $_SESSION['pengguna'];
        $sql = mysqli_query($koneksi,"SELECT * FROM pengguna WHERE id_pengguna = '$id'");
        $data = mysqli_fetch_array($sql);

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

    <section id="home" class="main-home">
     
    <div class="container">
          <div class="row">
              <h1>Selamat Datang <span> <?php echo $data['nama_pengguna']; ?></span> <br>
              Sudah Catat Pengeluaran Hari Ini? </h1>
            </div>
            <br>
            <br>
    
     
      
            <div class="row" style="margin-left: 130px;">
                <div class="col-md-6 kiri">
                    <div class="row">
                      <div class="card-body bg-light" style="border-radius:15px; border: none;">
                            <div class="text-start">
                              <h5 class="mr-auto" style="color: black; font-family: 'Baloo 2', cursive; color: #406264;">Pemasukan : <span class="text-end" style="color: #067518;"><?php foreach( $result as $key => $row) {
                                                                                                                                              $total[] = $row["jumlah"]; 
                                                                                                                                              } if ( empty ($total)  ) {
                                                                                                                                                echo 'ANDA BELUM MEMASUKAN DATA PEMASUKAN' ;
                                                                                                                                              }
                                                                                                                                              else{
                                                                                                                                                echo "Rp. " . number_format(array_sum ($total)) . ".00";
                                                                                                                                              }

                                                                                                                                                  ?></span> </h5> 
                              <h5 class="mr-auto" style="color: black; font-family: 'Baloo 2', cursive; color: #406264;">Pengeluaran :<span style=" color:  #8D0606;">  <?php foreach( $result1 as $key => $row) {
                                                                                                                                              $total1[] = $row["jumlah"]; 
                                                                                                                                              } if ( empty ($total1)  ) {
                                                                                                                                                echo 'ANDA BELUM MEMASUKAN DATA PENGELUARAN' ;
                                                                                                                                              }
                                                                                                                                              else{
                                                                                                                                                echo "Rp. " . number_format(array_sum ($total1)) . ".00";
                                                                                                                                              }

                                                                                                                                                  ?>  </span> </h5> 
                                 <h5 class="mr-auto" style="color: black; font-family: 'Baloo 2', cursive; color: #406264;">Saldo :<span style="text-align: right; color:  #006093;">  <?php  foreach( $result1 as $key => $row) 
                                                                                                                                                                                                        $saldo = array_sum ($total) - array_sum ($total1);
                                                                                                                                                                                                        if (empty ($saldo)) {
                                                                                                                                                                                                          echo ' ANDA BELUM MEMASUKAN DATA';
                                                                                                                                                                                                        } 
                                                                                                                                                                                                        else {
                                                                                                                                                                                                        echo "Rp. " . number_format ($saldo) . ".00";
                                                                                                                                                                                                        }

                                                                                                                                                  ?>  </span> </h5>                                                                                                                   
                            </div>
                              <div class="text-center">
                              <a href="transaksi.php" class="btn btn-primary" style="background: linear-gradient(180deg, #698797 42.19%, #84A7B8 94.79%); box-shadow: 0px 9px 13px #7A98AF; border-radius: 15px; border: 0px;">Perbarui Catatan</a>
                              </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 kanan">
                    <div class="row">
                      <div class="">
                        <div class="row">
                          <div class="col-md-3">
                              <a href="transaksi.php" class="btn btn-secondary" style="background: white; width: 150px; height: 150px; border-radius:15px; border: none;  margin-left:20px;"> <img src="images/icontransaksi.png" alt=""><br> <span style="color: #405764;">Transaksi</span> </a>
                          </div>
                          <div class="col-md-3">
                              <a href="laporankeuangan.php" class="btn btn-secondary"  style="background: white; width: 150px; height: 150px; border-radius:15px; border: none; margin-left:50px;"><img src="images/iconlaporankeuangan.png" alt=""><br><span style="color: #405764;">Laporan Keuangan</span> </a>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
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
            <p class="text-start"> <i>Version 1.0</i>
            </p>
          </div>

          <div class="text-center">
            <a href="https://www.instagram.com/arieefrahman/"> Arief Rahman </a>
            <a href="https://www.instagram.com/arwnumr24">| M. Arwani Umar |</a>
            <a href="https://www.instagram.com/arga.samudera/"> Arga Widya Samudera</a>
          </div>


        </div>
      </div>
</footer>
</html>

<?php
    }
?>
