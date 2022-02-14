<?php 
    session_start(); 
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="/TP/tp1/exercice1/css/style.css"> -->
    <link rel="stylesheet" href="/TP/tp1/css/style1.css">
    <title>Document</title>
</head>
<body>
    <div class="liens">
            <a href="/TP/tp1/exercice2">Suivant</a>
            <a href="/TP/tp1/" >Menu</a>
    </div>    
    <form action="controller.php" method="post">  
        <section>
        <input type="submit" name="valider" value="generer et calculer">
            <span><?php if(isset($_SESSION['surface'])) echo "La surface est : " .$_SESSION['surface'];?> <br></span>
            <span><?php if(isset($_SESSION['perimetre'])) echo "Le Perimetre est : " .$_SESSION['perimetre'];?> <br></span>
            <span><?php if(isset($_SESSION['diagonal'])) echo "Le Diagonal est : " .$_SESSION['diagonal'];?> <br></span>
        </section>
    </form>
</body>
</html>