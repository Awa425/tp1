<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/TP/tp1/css/style14.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="controller.php" method="post">
            <textarea name="champ1" id="champ1" cols="50" rows="40"><?php if (isset($_SESSION['champ1']) && isset($_SESSION['post'])) {
                echo $_SESSION['champ1']."\n\n";
                           echo "Il ya ". $_SESSION['orange']." operateur orange \n";
                           echo "Il ya ". $_SESSION['tigo']." operateur tigo \n";
                           echo "Il ya ". $_SESSION['expresso']." operateur expresso \n";
                           echo "Il ya ". $_SESSION['kirene']." operateur kirene \n";
                           
            }?></textarea>
            <input type="submit" name="valider" value="Valider" id="btn">
            <div class="champs">
                <textarea name="champ2" id="champ1" cols="50" rows="20"><?php if ($_SESSION['champcorec1']) {
                    foreach ($_SESSION['champcorec1'] as $value) {
                        echo $value."\n";
                    } 
                }?></textarea>    
                <textarea name="champ3" id="champ1" cols="50" rows="20" class="c2"><?php if ($_SESSION['champcorec2']) {
                   foreach ($_SESSION['champcorec2'] as $value) {
                    echo $value."\n";
                }
                }?></textarea>    
            </div>
            
        </form>
    </div>
</body>
</html>
<?php
    session_destroy();
?>