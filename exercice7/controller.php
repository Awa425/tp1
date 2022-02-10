<?php 
    session_start();
    include_once('fonction.php');
    $test = '';

    if (  (isset($_POST['valider']))) 
    {
        if ((!empty($_POST['jour'])) && (!empty($_POST['mois'])) && (!empty      ($_POST['annee']))) {
            $j = $_POST['jour'];
            $m = $_POST['mois'];
            $an = $_POST['annee'];
            $_SESSION['jour']=$j;
            $_SESSION['mois']=$m;
            $_SESSION['annee']=$an;
            if ($_POST['valider']=='Suivant') {
                $test = 'suivant';
                header('location:index.php?suivant='.$test);
            }
            elseif ($_POST['valider']=='Precedant') {
                $test = 'precedent';
                header('location:index.php?prec='.$test);
            }
        }
        else {
            $msg = 'Tout les champs dois etre saisi';
            header('location:index.php?erreur='.$msg);
        }
    }      
?>