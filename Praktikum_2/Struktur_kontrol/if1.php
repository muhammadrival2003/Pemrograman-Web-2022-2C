<?php
date_default_timezone_set('Asia/Jakarta'); // date_default_timezone_set digunakan untuk mengubah zona waktu
$d = date("D"); 
$date = date("d-m-Y H:i:s");
if ($d == "Mon") {
    $d = "Senin";
    echo "Selamat belajar <br>";
}else
    echo "Ini hari $d <br>";
echo $d . " " . $date;
?>