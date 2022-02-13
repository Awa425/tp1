<?php 
    session_start();
   
    if (isset($_POST['btn'])) {  
          
        if (isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['role']) && !empty($_POST['role']) && isset($_POST['pass']) && !empty($_POST['pass']) && isset($_POST['confpass']) && !empty($_POST['confpass'])) {
            if ($_POST['pass']==$_POST['confpass']) {
                $_SESSION['pass']=$_POST['pass']; 
                $_SESSION['confpass']=$_POST['pass']; 
                if ($_POST['role']=='admin'|| $_POST['role']=='visiteur') {  
                    $_SESSION['role']=$_POST['role'];  
                    if (preg_match ( " /^.+@.+\.[a-zA-Z]{2,}$/ " , $_POST['login'] )) {
                        $_SESSION['nom']=$_POST['nom'];
                        $_SESSION['prenom']=$_POST['prenom'];
                        $_SESSION['login']=$_POST['login'];
                        $_SESSION['pass']=$_POST['pass'];
                        if (isset($_SESSION['nom']) && isset($_SESSION['prenom']) && isset($_SESSION['login']) && isset($_SESSION['pass']) && isset($_SESSION['confpass']) && isset($_SESSION['role'])) {   
                            if ($_SESSION['role']=='admin') { 
                                header('location:../view/accueil.admin.html.php');
                            }
                            elseif($_SESSION['role']=='visiteur') {
                                header('location:../view/accueil.visiteur.html.php');
                            }
                        }
                        else {
                            // echo "revoir les champs";
                            // header('location:../view/register.html.css');
                        }
                    }
                    else {
                        header('location:../view/register.html.php');
                    }
                }
                else {
                    header('location:../view/register.html.php');
                } 
            }
            else {
                header('location:../view/register.html.php');
            } 
        }          
        else {
            $_SESSION['saisi']="Veuillez saisir tous les champs";
            header('location:../view/register.html.php');
        }        
    }
      

    
?>