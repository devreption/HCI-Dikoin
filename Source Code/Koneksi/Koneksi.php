<?php
$koneksi = mysqli_connect("localhost", "root", "", "dikoin");
if (!$koneksi) {
    echo "Koneksi Bermasalah";
}
