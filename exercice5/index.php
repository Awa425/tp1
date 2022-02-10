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
    <link rel="stylesheet" href="/TP/tp1/css/style5.css">
    <title>Document</title>
</head>
<body>
    <div class="liens">
            <a href="/TP/tp1/">Menu</a>
            <!-- <a href="/TP/tp1/exercice2">Suivant</a> -->
    </div> 
    <form action="controller.php" method="post">   
        <section>
            <input type="submit" name="valider" value="generer et calculer">
            <span><?php echo "La distance entre le point A(".$_SESSION['xa'].",".$_SESSION['ya'].") et B(".$_SESSION['xb'].",".$_SESSION['yb'].") est :<br> ";?> <br></span>
            <span><?php echo $_SESSION['res']; ?></span>
        </section>
    </form>
</body>
</html>