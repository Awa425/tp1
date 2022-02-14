<?php 
    session_start();
    if (isset($_POST['btn'])) { 
              
        if (isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['role']) && !empty($_POST['role']) && isset($_POST['pass']) && !empty($_POST['pass']) && isset($_POST['confpass']) && !empty($_POST['confpass'])) {
            if ($_POST['pass']==$_POST['confpass']) {
                if ($_POST['role']=='admin'|| $_POST['role']=='visiteur') {  
                    if (preg_match ( " /^.+@.+\.[a-zA-Z]{2,}$/ " , $_POST['login'] )) {
                        $_SESSION['nom']=$_POST['nom'];
                        $_SESSION['prenom']=$_POST['prenom'];
                        $_SESSION['login']=$_POST['login'];
                        $_SESSION['pass']=$_POST['pass']; 
                        $_SESSION['confpass']=$_POST['pass']; 
                        $_SESSION['role']=$_POST['role'];  
                        if (isset($_SESSION['nom']) && isset($_SESSION['prenom']) && isset($_SESSION['login']) && isset($_SESSION['pass']) && isset($_SESSION['confpass']) && isset($_SESSION['role'])) { 
                            $tab=array(                            
                                    'nom' => $_SESSION['nom'],
                                    "prenom"=>$_SESSION['prenom'],
                                    "login"=>$_SESSION['login'],
                                    "pass"=>$_SESSION['pass'],
                                    "confpass"=>$_SESSION['confpass'],
                                    "role"=>$_SESSION['role']
                                    );  
                                         //Verifie s' il s'agit du premier enregistrement du fichier json
                                    if (filesize("fichier.json")==0) { 
                                        $search = 0;
                                        $firstRecord=array($tab); 

                                         //Maintenant on affecte l'enregistrement dans un varible pour une utilisation ulterieur
                                        $save=$firstRecord;
                                    }  
                                        /*si ce n'est pas le premier enregistrement et qu'il y a des messages dans le fichier, nous devons extraire tous ces anciens
                                        messages afin de pouvoir ajouter un nouveau message et aussi si ce n'est pas le premier enregistrement et qu'il y a des messages 
                                        dans le fichier, nous devons extraire tous ces anciens messages afin de pouvoir ajouter         */ 
                                    else {   
                                            $old_record = json_decode(file_get_contents("fichier.json"),true);
                                            $search = 0;
                                            foreach ($old_record as $value) {
                                                if ($value['login'] == $tab['login']) {
                                                    $search = 1; break;
                                                    
                                                }
                                            }
                                            if ($search == 0) {
                                                array_push($old_record, $tab);
                                                $save=$old_record;
                                            }
                                          
                                        }
                                        //En fin on enregistre le message dans le fichier .json
                                        if ($search != 0 || !file_put_contents("fichier.json", json_encode($save, JSON_PRETTY_PRINT), LOCK_EX)) {
                                            $_SESSION['erreur_stockage'] = "enregistrement non reussi";
                                            header('location:../view/register.html.php');
                                            }  
                                        else {
                                            $success="Enregistrement reussi";
                                            if ($_SESSION['role']=='admin') { 
                                                header('location:../view/accueil.admin.html.php');
                                                }
                                            elseif($_SESSION['role']=='visiteur') {   
                                                header('location:../view/accueil.visiteur.html.php');
                                                }
                                        } 
                        }
                        else {
                            // echo "revoir les champs";
                            $_SESSION['errChamps']="revoir les saisi";
                            header('location:../view/register.html.css');
                        }
                    }
                    else {
                        $_SESSION['errMail']="Revoir le mail";
                        header('location:../view/register.html.php');
                    }
                }
                else {
                     $_SESSION['errRole']="Revoir le champs role";
                    header('location:../view/register.html.php');
                } 
            }
            else {
                $_SESSION['errMotdepass']="pass errone";
                header('location:../view/register.html.php');
            } 
        }          
        else {
            $_SESSION['champsVide']="Veuillez saisir tous les champs";
            header('location:../view/register.html.php');
        }        
    }
      
if (isset($_POST['connecter'])) {
    $bool=0;
    $_SESSION['pass']=$_POST['pass'];
    $_SESSION['login']=$_POST['login'];
    $fiche=json_decode(file_get_contents("fichier.json"),true);
    foreach ($fiche as $value) {
        if ($value['pass']==$_SESSION['pass'] && $value['login']==$_SESSION['login']) {
           $bool=1;
           $_SESSION['nom']=$value['nom'];
           $_SESSION['prenom']=$value['prenom'];
           $_SESSION['role']=$value['role'];
        }
    }
    if ($bool==1) {
        if ($_SESSION['role']=='admin') {
            header('location:../view/accueil.admin.html.php');
        }
        elseif ($_SESSION['role']=='visiteur') {
            header('location:../view/accueil.visiteur.html.php');

        }
    }
    else {
       $_SESSION['errAuthentification']="Erreur d'authentification";
       header('location:../view/login.html.php');
    }
}
    
?>