<?php 
    session_start();  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/TP/tp1/css/style3.css">
    <title>Document</title>
</head>
<body>
<div class="menu"> 
        <a href="/TP/tp1/" >Menu</a>
        <a href="/TP/tp1/exercice4">Suivant</a>
        <a href="/TP/tp1/exercice2">Precedant</a>      
    </div>
    <form action="controller.php" method="post">   
        <section>
        <input type="submit" name="valider" value="generer et calculer">
            <span><?php echo "La somme de ".$_SESSION['a']." et de ".$_SESSION['b']." est : " .$_SESSION['som'];?> <br></span>
            <span><?php echo "La difference de ".$_SESSION['a']." et de ".$_SESSION['b']." est : " .$_SESSION['diff'];?> <br></span>
            <span><?php echo "Le produit de ".$_SESSION['a']." et de ".$_SESSION['b']." est : " .$_SESSION['pro'];?> <br></span>
            <span><?php echo "Le modulo de ".$_SESSION['a']." et de ".$_SESSION['b']." est : " .$_SESSION['mod'];?> <br></span>
            <span><?php echo "Le carre de ".$_SESSION['a']." est : " .$_SESSION['carA'];?> <br></span>
            <span><?php echo "Le carre de ".$_SESSION['b']." est : " .$_SESSION['carB'];?> <br></span>
        </section>
    </form>
</body>
</html>