<?php
    session_start(); // memulai session
    session_destroy(); // menghapus session

    echo "<script>alert('Anda telah logout');location.href='index.php';</script>";
?>