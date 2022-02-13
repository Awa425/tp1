<?php 
    session_start();
    require_once 'fonction.php';
        $chaine2=array();
        $chaine3=array();

    if (isset($_POST['valider']) && !empty($_POST['champ1']) ) 
    {
        $_SESSION['post']=$_POST['valider'];
        $_SESSION['champ1']=$_POST['champ1'];
        $chaine=explode(" ", $_SESSION['champ1']); 
        $cpt1=0;
        $cpt2=0;
        $cpt3=0;   
        $cpt4=0;  
        $_SESSION['orange']=$_SESSION['tigo']=$_SESSION['expresso']=$_SESSION['kirene']=0;
        foreach ($chaine as $value) 
        {
            if (longueur_chaine($value)==9) 
            {
                if (preg_match('\'^[7][7,6,0,5][0-9]{7}\'', $value) )
                {
                    if (preg_match('\'^[7][7][0-9]{7}\'', $value)) {
                        $cpt1++;
                        $_SESSION['orange']++;
                    }
                    elseif(preg_match('\'^[7][6][0-9]{7}\'', $value)) {
                        $cpt2++;
                        $_SESSION['tigo']++;
                    }
                    elseif(preg_match('\'^[7][0][0-9]{7}\'', $value)) {
                        $cpt3++;
                        $_SESSION['expresso']++;
                    }
                    elseif(preg_match('\'^[7][5][0-9]{7}\'', $value)) {
                        $cpt4++;
                        $_SESSION['kirene']++;
                    }

                    $chaine2[]=$value;    
                }
            }
                else 
                {
                    $chaine3[]=$value;
                }
        } 
        $_SESSION['champcorec1']=$chaine2;
        $_SESSION['champcorec2']=$chaine3;
    }
    // var_dump($_SESSION['champcorec1']); echo "<br>";
    // var_dump($_SESSION['champcorec2']); die;
    header('location:index.php');
    
?>