<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = mysqli_connect("localhost", "root", "", "db_web2022");
    $hasil = mysqli_query($conn, "insert into akun_login(username, password)
        values('$username', '$password')");    
?>