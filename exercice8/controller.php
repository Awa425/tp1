<?php 
    session_start();
    require_once('fonction.php');
    if (isset($_POST['envoyer'])) 
    {
        $_SESSION['nombre'] = $_POST['nombre'];
        // echo $_SESSION['nombre'];
        header('location:index.php');
    }
?>