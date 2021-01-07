<?php

require'proses_kuesioner.php' ;


if (isset($_POST['kirim']) ){
    if(datasatu($_POST) > 0) {
        echo "<script>alert('TERIMAKASIH TELAH MENGISI KUESIONER KAMI!')</script>";
    }
    else{
        echo "<script>alert('Yah :( GAGAL NIH, ISI ULANG KUESIONER KAMI!!!')</script>";
    }
}

$koneksi = mysqli_connect("localhost","root","","dikoin");

$result = mysqli_query($koneksi, "SELECT * FROM kuesioner") ;



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
<link rel="stylesheet" href="css/stylekuesioner.css">
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
      
                

                    <h1>KUESIONER</h1>

                  <div class="card" style="background-color: #9FCDCD">
                  
                        <div class="card-body" style="padding: 20px;">

                            <div class="question-wrapper" style="background-color: #698797; padding: 5px;">



                                <form style="justify-content: start; text-align: left;" action="kuesioner.php" method="post">
                                    <input type="hidden" name="_token" value="">         

                                      <div class="form-group">
                                        <label><h3 style="font-size: 20px;">1. Masukan alamat email Anda  </h3></label>
                                        <input type="email" name="email" placeholder="contoh@email.com" class="form-control" required="required" value="">
                                      </div>
                                      <br/>

                                    <div class="form-group ">
                                        <label><h3 style="font-size: 20px;">2. Apakah tampilan website Dikoin mudah dipahami?</h3></label>
                                        <br/>
                                        <div class="form-check form-check-inline" style="margin-bottom: 0px;">
                                            <input type="radio" name="tampilan" value="tidakmudah"  required="required"/> Tidak Mudah&nbsp;
                                            <input type="radio" name="tampilan" value="netral"  required="required"/> Netral&nbsp;
                                            <input type="radio" name="tampilan" value="mudah" required="required"/> Mudah&nbsp;
                                        </div>
                                    </div>
                                    <br/>

                                    <div class="form-group">
                                        <label><h3 style="font-size: 20px;">3. Apakah Anda menyukai tampilan website Dikoin?</h3></label>
                                        <br/>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="fitur" value="tidaksuka"  required="required"/> Tidak suka&nbsp;
                                            <input type="radio" name="fitur" value="netral"  required="required"/> Netral&nbsp;
                                            <input type="radio" name="fitur" value="suka"  required="required"/> Suka&nbsp;
                                        </div>
                                    </div>
                                    <br/>

                                    <div class="form-group ">
                                        <label><h3 style="font-size: 20px;">4. Seberapa besar tingkat kepuasan Anda terhadap website Dikoin ini?</h3></label>
                                        <br/>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="kepuasan" value="tidakpuas"  required="required"/> Tidak Puas&nbsp;
                                            <input type="radio" name="kepuasan" value="netral"  required="required"/> Netral&nbsp;
                                            <input type="radio" name="kepuasan" value="puas" required="required"/> Puas&nbsp;
                                        </div>
                                    </div>
                                    <br/>

                                    <div class="form-group">
                                        <label><h3 style="font-size: 20px;">5. Beri nilai atas pengembangan sistem informsi berbasis aplikasi website bernama <br> 'Dikoin: Asisten Finansisal Pribadi Anda' yang telah kami lakukan</h3></label>
                                        <br/>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" name="nilai" value="1"  required="required"/> 1&nbsp;
                                            <input type="radio" name="nilai" value="2"  required="required"/> 2&nbsp;
                                            <input type="radio" name="nilai" value="3"  required="required"/> 2&nbsp;
                                            <input type="radio" name="nilai" value="4"  required="required"/> 4&nbsp;
                                            <input type="radio" name="nilai" value="5"  required="required"/> 5&nbsp;
                                            <input type="radio" name="nilai" value="6"  required="required"/> 6&nbsp;
                                            <input type="radio" name="nilai" value="7"  required="required"/> 7&nbsp;
                                            <input type="radio" name="nilai" value="8"  required="required"/> 8&nbsp;
                                            <input type="radio" name="nilai" value="9"  required="required"/> 9&nbsp;
                                            <input type="radio" name="nilai" value="10" required="required"/> 10&nbsp;
                                        </div>
                                    </div>
                                    <br/>
                                    
                                    <div class="form-group">
                                        <label><h3 style="font-size: 20px;">6. Beri kami kritik dan saran, demi perkembangan website Dikoin</h3></label>
                                        <textarea name="kritik" id="" rows="5" class="form-control" required="required" placeholder="tulis kritik atau saran"></textarea> 
                                        <div class="text-center"><h3><button type="submit" value="Kirim" name="kirim">KIRIM</button></h3></div>   
                                    </div> 

                                </form>
                                      
                        </div>
                  
                  </div>
                
                  
    </div>
    
</section>
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