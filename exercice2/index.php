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
    <link rel="stylesheet" href="/TP/tp1/css/style2.css">
    <title>Document</title>
</head>
<body>
    <div class="menu"> 
        <a href="/TP/tp1/" >Menu</a>
        <a href="/TP/tp1/exercice3">Suivant</a>
        <a href="/TP/tp1/exercice1">Precedant</a>      
    </div>
    
    <form action="controller.php" method="post">   
        <section>
        <input type="submit" name="valider" value="generer et calculer">
            <span><?php echo "La surface est : " .$_SESSION['surface'];?> <br></span>
            <span><?php echo "Le Perimetre est : " .$_SESSION['perimetre'];?> <br></span>
            <span><?php echo "Le Diagonal est : " .$_SESSION['diagonal'];?> <br></span>
        </section>
    </form>
</body>
</html>