<?php 
  session_start();
  
  if (isset($_POST['envoyer'])) {
    $_SESSION['lang']=$_POST['lang'];
    
    header('location:index.php'); 
  }
  
?>