<?php
include('Koneksi/Koneksi.php');

if (isset($_POST['daftar'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
		$nama = $_POST['nama'];
        $telepon = $_POST['telepon'];
        $pekerjaan = $_POST['pekerjaan'];   
        $datecreate = date("Y/m/d");

        $query = "INSERT INTO pengguna(email_pengguna,password_pengguna,nama_pengguna,telepon_pengguna,pekerjaan_pengguna,datecreate_pengguna) VALUES ('$email','$password','$nama','$telepon','$pekerjaan','$datecreate')";
        
        $cek_email = mysqli_num_rows(mysqli_query($koneksi,"SELECT email_pelanggan FROM pelanggan WHERE email_pelanggan = '$email'"));

        if($cek_email > 0){
            echo "<script> alert('Email sudah terdaftar'); location.href='register.php'; </script>";
        }else{
            if(mysqli_query($koneksi,$query)){
                echo "<script> alert('Berhasil mendaftar'); location.href='login.php'; </script>";
            }else{
                echo "<script> alert('Gagal mendaftar'); location.href='register.php'; </script>";
            }
        }		
    }else{
        header("location:Login.php");
    }
?>    