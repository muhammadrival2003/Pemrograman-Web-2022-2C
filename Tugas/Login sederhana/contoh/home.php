<?php
    session_start();
    if(empty($_SESSION['password'])){
        header('location:login.html');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo 'Ini halaman Home ' . $_SESSION['password'];
    ?>
    <a href="logout.php">LOGOUT</a>
</body>
</html>