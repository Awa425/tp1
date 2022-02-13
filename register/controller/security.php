<?php 
    session_start();
    if (isset($_POST['btn'])) { 
              
        if (isset($_POST['nom']) && !empty($_POST['nom']) && isset($_POST['prenom']) && !empty($_POST['prenom']) && isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['role']) && !empty($_POST['role']) && isset($_POST['pass']) && !empty($_POST['pass']) && isset($_POST['confpass']) && !empty($_POST['confpass'])) {
            if ($_POST['pass']==$_POST['confpass']) {
                if ($_POST['role']=='admin'|| $_POST['role']=='visiteur') {  
                    if (preg_match ( " /^.+@.+\.[a-zA-Z]{2,}$/ " , $_POST['login'] )) {
                        $_REQUEST['nom']=$_POST['nom'];
                        $_REQUEST['prenom']=$_POST['prenom'];
                        $_REQUEST['login']=$_POST['login'];
                        $_REQUEST['pass']=$_POST['pass']; 
                        $_REQUEST['confpass']=$_POST['pass']; 
                        $_REQUEST['role']=$_POST['role'];  
                        if (isset($_REQUEST['nom']) && isset($_REQUEST['prenom']) && isset($_REQUEST['login']) && isset($_REQUEST['pass']) && isset($_REQUEST['confpass']) && isset($_REQUEST['role'])) { 
                            $tab=array(                            
                                    'nom' => $_REQUEST['nom'],
                                    "prenom"=>$_REQUEST['prenom'],
                                    "login"=>$_REQUEST['login'],
                                    "pass"=>$_REQUEST['pass'],
                                    "confpass"=>$_REQUEST['confpass'],
                                    "role"=>$_REQUEST['role']
                                    );  
                                         //Verifie s' il s'agit du premier enregistrement du fichier json
                                    if (filesize("fichier.json")==0) { 
                                        $firstRecord=array($tab); 

                                         //Maintenant on affecte l'enregistrement dans un varible pour une utilisation ulterieur
                                        $save=$firstRecord;
                                    }  
                                        /*si ce n'est pas le premier enregistrement et qu'il y a des messages dans le fichier, nous devons extraire tous ces anciens
                                        messages afin de pouvoir ajouter un nouveau message et aussi si ce n'est pas le premier enregistrement et qu'il y a des messages 
                                        dans le fichier, nous devons extraire tous ces anciens messages afin de pouvoir ajouter         */ 
                                    else {   
                                            $old_record = json_decode(file_get_contents("fichier.json"));

                                            array_push($old_record, $tab);
                                            $save=$old_record;
                                        }
                                        //En fin on enregistre le message dans le fichier .json
                                        if (!file_put_contents("fichier.json", json_encode($save, JSON_PRETTY_PRINT), LOCK_EX)) {
                                            $erreur_stockage= "enregistrement non reussi"; var_dump($tab); die;
                                            }  
                                        else {
                                            $success="Enregistrement reussi";
                                        } 
                            if ($_REQUEST['role']=='admin') { 
                                header('location:../view/accueil.admin.html.php');
                                }
                            elseif($_REQUEST['role']=='visiteur') {   
                                header('location:../view/accueil.visiteur.html.php');
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
      

    
?>