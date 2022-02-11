<?php 
    session_start();
    require_once('fonction.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/TP/tp1/css/style10.css">

    <title>Document</title>
</head>
<body>
    <div class="liens">
            <a href="/TP/tp1/">Menu</a>
            <!-- <a href="/TP/tp1/exercice2">Suivant</a> -->
    </div>
    <div class="container">
        <div class="">
            <form action="controller.php" method="POST">
                <div class="input">
                    <span>Nombre :</span> <input type="text" name="nombre" value="<?php if (isset($_SESSION['nombre'])) {
                       echo $_SESSION['nombre'];
                    }?>"> <br>
                </div>
                <div class="btn">
                    <input type="submit" name="envoyer" >
                </div> 
            </form>
        </div> 
        <div class="resultat">
            <ul>
                    <?php if (isset($_SESSION['nombre']) && is_numeric($_SESSION['nombre']) && $_SESSION['nombre']>0) {

                            for ($i=1; $i <= $_SESSION['nombre']; $i++) 
                            { ?>
                               <input type="text" value="<?php echo "Champ ".$i;?>">    
                           <?php }
                      
                    } else {
                        echo "Veuillez revoir votre saisi";
                    }?>
            </ul>
        
        </div> 
       
</body>
</html>
<?php
    // unset($_SESSION);
    session_destroy($_SESSION);
?>