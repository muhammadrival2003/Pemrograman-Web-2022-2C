<?php 
    // Script untuk Routing

    if(empty($_GEt['x']==1)){
        header("location:home.php?x=1");
    }elseif($_GET['x']==1){
        header("location:home.php?x=1");
    }elseif($_GET['x']==2){
        header("location:dashboard.php?x=2");
    }elseif($_GET['x']==3){
        header("location:orders.php?x=3");
    }elseif($_GET['x']==4){
        header("location:products.php?x=4");
    }elseif($_GET['x']==5){
        header("location:customers.php?x=5");
    }
?>