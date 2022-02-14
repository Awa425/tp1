<?php 
    session_start();
    require_once('fonction.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/TP/tp1/css/style5.css">
    <title>Document</title>
</head>
<body>
    <div class="liens">
            <a href="/TP/tp1/">Menu</a>
            <!-- <a href="/TP/tp1/exercice2">Suivant</a> -->
    </div>
    <div class="container">
        <!-- <div class="header">header</div> -->
        <!-- <div class="main"> -->
            <form action="controller.php" method="post">
                <div class="text">
                    <p>Veuillez saisi un text</p>
                    <textarea name="text1" id="text1" cols="50" rows="20"><?php if(isset($_SESSION['text1'])) echo $_SESSION['text1']; ?></textarea> <br>
                    <input type="submit" name="valider" value="valider" class="btn">
                </div>
                <div class="text">
                    <p>Apres Correction </p>  
                    <textarea name="text2" id="text2" cols="50" rows="20" readonly><?php 
                            if(isset($_SESSION['text2'])){
                                foreach ($_SESSION['text2'] as $key => $value) {
                                   print_r( $value);
                                   echo ". ";
                                }
                            }    
                        ?></textarea>
                </div>
            </form>
        <!-- </div> -->
    </div>
</body>
</html>