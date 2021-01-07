<?php
  session_start();
  include('Koneksi/Koneksi.php');

  if(!isset($_SESSION['pengguna'])){
    header("location:Login.php");
    exit();
  }else{
    $id = $_SESSION['pengguna'];
    $sql = mysqli_query($koneksi,"SELECT * FROM pengguna WHERE id_pengguna = '$id'");
    $data = mysqli_fetch_array($sql);
  } 
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
<link rel="stylesheet" href="css/styleprofil.css">
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
            <div class="page-content" id="page-content">
                <div class="padding">
                    <div class="row container d-flex justify-content-center">
                        <div class="col-xl-6 col-md-12">
                            <div class="card">
                                <div class="row m-l-0 m-r-0">
                                    <div class="col-sm-4 bg-c-lite-green user-profile">
                                        <div class="card-block text-center text-white">
                                            <div class="m-b-25"> <img src="images/icondikoin.ico" class="img-radius" alt="User-Profile-Image"> </div>
                                            <h6 class="f-w-600"><?= $data['nama_pengguna']; ?></h6>
                                            <p><?php echo $data['pekerjaan_pengguna']; ?></p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="card-block">
                                            <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Informasi</h6>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Alamat Email</p>
                                                    <h6 class="text-muted f-w-400"><?php echo $data['email_pengguna']; ?></h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Nomor Telepon</p>
                                                    <h6 class="text-muted f-w-400"><?php echo $data['telepon_pengguna']; ?></h6>
                                                </div>
                                            </div>
                                            <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Tanggal Akun Dibuat</h6>
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <h6 class="text-muted f-w-400"><?php echo $data['datecreate_pengguna']; ?></h6>
                                                </div>
                                                <div style="padding: 0px;" class="col-sm-6">
                                                  <a class="text-muted f-w-400" href="Logout.php"><img style="width: 20%;" src="images/iconlogout.png" alt=""><span style="font-family: 'Baloo 2', cursive; font-size: 20px;">Keluar</span> </a>
                                                </div>
                                            </div>
                                        </div>
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
         <a href="Home.php"> <img src="images/icondikoin.ico" style="width: 5%" alt=""><span style="font-family: 'Baloo 2' , cursive; font-size: 20px;"> Dikoin </span></a>.
            </p>
              </p>
            <p class="text-start"> <i>Version 1.0</i>
            </p>
          </div>


        </div>
      </div>
</footer>
</html>














