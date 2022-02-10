<?php
    session_start();
    require_once('fonction.php');
    
    if (isset($_POST['valider'])) {
        $_SESSION['text1']=$_POST['text1'];
        echo tablaux_resultats($_SESSION['text1']); die;
        $_SESSION['text2']=tablaux_resultats($_SESSION['text1']);  
        header('location:index.php');
    }
?>