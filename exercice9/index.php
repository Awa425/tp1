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
    <link rel="stylesheet" href="/TP/tp1/css/style9.css">

    <title>Document</title>
</head>
<body>
    <div class="liens">
            <a href="/TP/tp1/">Menu</a>
            <!-- <a href="/TP/tp1/exercice2">Suivant</a> -->
    </div>
    <div class="container">
        <div>
            <form action="controller.php" method="POST">
                <div class="input">
                    <span>Entrer un nombre  :</span> <input type="text" name="nombre" value="<?php if (isset($_SESSION['nombre'])) {
                       echo $_SESSION['nombre'];
                    }?>"> <br>
                </div>
                <div class="btn">
                    <input type="submit" name="envoyer" >
                </div> 
            </form>
        </div> 
        <div class="resultat"><p><b>Table de Multiplication</b></p>
            <?php if (isset($_SESSION['nombre'])) {
               table_multiplication($_SESSION['nombre']);
            }?>
        </div>    
</body>
</html>
<?php
    
    // session_destroy($_SESSION);
?>