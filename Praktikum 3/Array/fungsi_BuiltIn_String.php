<?php 
    $str = "Belajar PHP ternyata menyenangkan";
    echo strtolower($str); //Ubah huruf ke kecil semua
    echo "<br>";
    echo strtoupper($str); //Ubah huruf ke besar
    echo "<br>";
    echo str_replace("Menyenangkan", "mudah lho", $str);
    echo "<br>";
?>