<?php
    include('Koneksi/Koneksi.php');
    
    session_start();

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $login = mysqli_query($koneksi,"SELECT * FROM pengguna WHERE email_pengguna = '$email' AND password_pengguna = '$password'");
        $cek = mysqli_num_rows($login);

        if($cek == 1){
            $data = mysqli_fetch_assoc($login);
            $id = $data['id_pengguna'];
            $_SESSION['pengguna'] = $id;

            echo "<script> alert('Berhasil login');
            location.href='Home.php';</script>";
        }else{
            echo "<script> alert('Gagal login');
            location.href='Login.php';</script>";
        }
    }else{
        header("location:Login.php");
    }
?>