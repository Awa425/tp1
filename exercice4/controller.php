<?php 
    session_start();
    require('fonction.php');

    $_SESSION['a'] = rand(1, 25); 
    $_SESSION['b'] = rand(26, 50);  
    $_SESSION['a1']=$_SESSION['a'];
    $_SESSION['b1']=$_SESSION['b'];


        $temp          = $_SESSION['a'];
        $_SESSION['a'] = $_SESSION['b'];
        $_SESSION['b'] = $temp;

    header('location:index.php');    
?>