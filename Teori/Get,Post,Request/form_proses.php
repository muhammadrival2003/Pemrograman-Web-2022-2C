<?php
    $user = $_POST['email'];
    $password = $_POST['password'];


    if ($user == 'rival' && $password == "0303"){
        echo "Selamat $user anda berhasil LOGIN!";
        if(isset($_POST['status_mhs'])){
            echo "<br> Anda adalah Mahasiswa Aktif!!!";     
            if(isset($_POST['submit']))
                $pilihan = $_POST['pilihan'];
                echo "<br> KELAS $pilihan";
        }else
            echo "<br>Anda bukan Mahasiswa";
        
        if(isset($_POST['jenis_kelamin']))
            $jenis_kelamin = $_POST['jenis_kelamin'];
            echo "<br> $jenis_kelamin";
    } else
        echo "Username dan password anda salah!!!!"
?>