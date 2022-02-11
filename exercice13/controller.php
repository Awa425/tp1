<?php
    session_start();
    require_once('fonction.php');
    
    if (isset($_POST['valider'])) {
        $_SESSION['text1']=$_POST['text1'];
        // echo tablaux_resultats($_SESSION['text1']); 
        $_SESSION['text2']=tablaux_resultats($_SESSION['text1']);
        // var_dump($_SESSION['text2']); die;
        // print_r($_SESSION['text2'])   ; die;
        header('location:index.php');
    }
?>
