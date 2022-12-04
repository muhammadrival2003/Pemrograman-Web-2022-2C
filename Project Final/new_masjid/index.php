<?php
    session_start();
    if (isset($_GET['x']) && $_GET['x'] == 'beranda') {
        $page = "beranda.php";
        include "main.php";
    } elseif (isset($_GET['x']) && $_GET['x'] == 'kegiatan') {
        $page = "kegiatan.php";
        include "main.php";
    }elseif (isset($_GET['x']) && $_GET['x'] == 'galeri') {
        $page = "galeri.php";
        include "main.php";
    } else {
        $page = "home.php";
        include "main.php";
    }
?>