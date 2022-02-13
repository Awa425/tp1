<?php 
    session_start();
    require_once('fonction.php');
    if (isset($_POST['valider'])) {
       $_SESSION['nombre']=$_POST['nombre'];
       header('location:index.php');
    }
?>