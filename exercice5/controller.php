<?php 

    session_start();
    require('fonction.php');
    $_SESSION['xa']=rand(1,10);
    $_SESSION['ya']=rand(1,10);
    $_SESSION['xb']=rand(1,10);
    $_SESSION['yb']=rand(1,10);
    $_SESSION['res']=point($_SESSION['xa'],$_SESSION['ya'],$_SESSION['xb'],$_SESSION['yb']);
    header('location:index.php');
?>