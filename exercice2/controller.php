<?php
    session_start();
    require('fonction.php');

    $lg=rand(1,50);
    $la=rand(1,50);
    
    $_SESSION['surface']=surface($lg, $la);
    $_SESSION['perimetre']=perimetre($lg, $la);
    $_SESSION['diagonal']=diagonal($lg, $la);
    header('location:index.php');
?>