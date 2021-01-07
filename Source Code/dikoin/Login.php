<?php
include('Koneksi/Koneksi.php');
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

<title>Selamat Datang di Dikoin</title>
<link rel="stylesheet" href="css/stylelogin.css">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@700&display=swap" rel="stylesheet">

</head>
<body>


<section id="home" class="main-home parallax-section">
     <div class="overlay"></div>
     <div id="particles-js"></div>
     <div class="container">
          <div class="row">
               <div class="login-page">
               <h1 style="font-family: 'Baloo 2', cursive; font-size: 30px; text-align: center; color: #FFFFFF; margin-bottom: 0px;">Selamat Datang di Dikoin</h1>
               <p style="font-family: 'Baloo 2', cursive; font-size: 15px; text-align: center; color: #D8F1FF; margin-top: 0px;">Gunakan Aplikasi Dikoin dan segera wujudkan <br>
               Tujuan Keuangan Anda</p>
                    <div class="form">  
                    <form style="font-family:'Baloo 2' cursive;" class="login-form" action="proses_Login.php" method="POST">
                        <input name="email" type="text" placeholder="Alamat Email"/>
                        <input name="password" type="password" placeholder="Kata Sandi"/>
                        <button name="login" type="submit">login</button>
                        <p class="message">Belum Punya Akun Dikoin? <a href="register.php">Daftar</a></p>
                    </form>
                    </div>
                </div>
          </div>
     </div>
</section>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/particles.min.js"></script>
<script src="js/app.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>
</html>