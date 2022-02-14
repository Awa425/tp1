<?php 
    session_start();
    require('fonction.php');
    if (isset($_POST['valider'])) {
        
    
    $_SESSION['a']=rand(1, 10);
    $_SESSION['b']=rand(1,20);
    $_SESSION['som'] = somme($_SESSION['a'], $_SESSION['b']);
    $_SESSION['diff'] = difference($_SESSION['a'], $_SESSION['b']);
    $_SESSION['pro'] = produit($_SESSION['a'], $_SESSION['b']);
    $_SESSION['mod'] = modulo($_SESSION['a'], $_SESSION['b']);
    $_SESSION['carA'] = carre($_SESSION['a']);
    $_SESSION['carB'] = carre($_SESSION['b']);
   
    header('location:index.php');}
?>