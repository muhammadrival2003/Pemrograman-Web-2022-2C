<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    $conn = mysqli_connect("localhost", "root", "", "db_web2022");  
    $kolom1 = 'username';
    $kolom2 = 'password';

    $hasil_username = mysqli_query($conn, "select * from akun_login where $kolom1 like '%$username%'");
    $hasil_password = mysqli_query($conn, "select * from akun_login where $kolom2 like '%$password%'");    

    if ($username = mysqli_fetch_array($hasil_username) && $password = mysqli_fetch_array($hasil_password)){
        echo "Selamat anda berhasil LOGIN!";        
    } else
        echo "Anda gagal login";
?>