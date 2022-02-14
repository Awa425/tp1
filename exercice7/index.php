<?php 
    session_start();
    require 'fonction.php';
    // include '/opt/lampp/htdocs/TP/tp1/index.php';
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/TP/tp1/css/style7.css">
    <title>Date</title>
</head>
<body>
    <!-- <div class="liens"> -->
            <a href="/TP/tp1/">Menu</a>
            <!-- <a href="/TP/tp1/exercice2">Suivant</a> -->
    <!-- </div> -->
    <div class="container">
        <form action="controller.php" method="POST">
            <div class="input">
                <span>jour :</span>  <input type="text" name="jour" value="<?php if (isset($_SESSION['jour'])) {
                    echo $_SESSION['jour'];
                } ?>" > <br>
            </div>
            <div class="input">
                <span>Mois :</span> <input type="text" name="mois" value="<?php if (isset($_SESSION['mois'])) {
                   echo $_SESSION['mois'];
               }?>" >  <br>
            </div>
            <div class="input">
            <span>Annee :</span> <input type="text" name="annee" value="<?php if (isset($_SESSION['annee'])) {
                    echo $_SESSION['annee'];
                } ?>" >  <br>
            </div>
            <div class="btn-group">
                <div class="btn">
                    <input type="submit" name="valider" value="Suivant">
                </div>
                <div class="btn">
                    <input type="submit" name="valider" value="Precedant">
                </div>
            </div>
        </form>

        <div class="resultat">
            <?php 
                if (isset($_SESSION) && isset($_GET['prec'])) 
                { ?>
                    <span><?php echo date_precedent($_SESSION['jour'], $_SESSION['mois'], $_SESSION['annee']) ?> </span>   
                <?php }
                elseif (isset($_SESSION) && isset($_GET['suivant'])) 
                {?>
                    <span><?php echo date_suivant($_SESSION['jour'], $_SESSION['mois'], $_SESSION['annee']) ?> </span>
                <?php }
                 if (isset($_GET['erreur'])) { ?>
                    <p style="color: red;"><?= $_GET['erreur']; ?></p>
                    <?php } 
            ?>
        </div> 
    </div>
</body>
</html>

<?php 
    session_destroy();
?>