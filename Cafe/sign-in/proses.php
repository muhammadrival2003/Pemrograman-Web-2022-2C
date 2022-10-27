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
        session_start();
        $connect = mysqli_connect("localhost", "root", "", "db_web2022");

        $username = $_POST['username'];
        $password = ($_POST['password']);

        if(empty($username) || empty($password)){
            echo "<script>alert('Username dan password tidak boleh kosong!');
            window.location='index.html';
            </script>"; 
        }else{
            $query = mysqli_query($connect,"SELECT*FROM akun_login WHERE username='$username' && password='$password'");
            $data = mysqli_fetch_array($query);
            //print_r($data);

            if($data){
                $_SESSION['password'] = $password;
                header('location:../home.php?x=1');            
            }else{
                echo "<script>alert('Anda gagal');
                window.location='index.html';
                </script>";            
            }
        }
    ?>
</body>
</html>