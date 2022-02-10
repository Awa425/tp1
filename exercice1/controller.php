<?php
    session_start();
    require('fonction.php');
    
    $cote=rand(1,10);
    
    $_SESSION['surface']=surface($cote); 
    $_SESSION['perimetre']=perimetre($cote);
    $_SESSION['diagonal']=diagonal($cote);
    header('location:index.php');
    
?>