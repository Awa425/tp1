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
    <link rel="stylesheet" href="/TP/tp1/css/style12.css">
    <title>Document</title>
</head>
<body>
    <div class="liens">
            <a href="/TP/tp1/">Menu</a>
            <!-- <a href="/TP/tp1/exercice2">Suivant</a> -->
    </div>
   <div class="container">
        <div class="main">
            <div class="choix">
                <form action="controller.php" method="POST">
                    <div class="input">
                        <label for="francais">Francais</label>
                        <input type="radio" name="lang" value="francais" id="francais">
                    </div>
                    <div class="input">
                        <label for="anglais">Anglais</label>
                        <input type="radio" name="lang" value="anglais" id="anglais">
                    </div>
                    <div class="input">
                        <input type="submit" name="envoyer" value="envoyer" class="btn">
                    </div>
                </form>
            </div>
            <div class="mois"> 
                <h1>Calendrier</h1>
                <table class="table">
                    <?php 
                     if (!isset($_SESSION['lang']) && ($_SESSION['lang']<>'anglais' || $_SESSION['lang']<>'francais')) { 
                        $mois=mois_francais(); echo "debut";
                        $a=0;
                        for ($i=0; $i <= 2 ; $i++) {  ?>
                            <tr>
                                <?php 
                                     
                                    while ($a < 4) { ?>
                                        <td>
                                            <?php echo $mois[$a]; $a++;?>
                                        </td>
                                        
                                   <?php  }
                                ?>
                            </tr> 
                            <tr>   
                                <?php 
                                    while ($a >= 4 && $a<8) { ?>
                                        <td>
                                            <?php echo $mois[$a]; $a++;?>
                                        </td>
                                   <?php }
                                ?>
                            </tr> 
                            <tr>   
                                <?php 
                                    while ($a >= 8 && $a<12) { ?>
                                        <td>
                                            <?php echo $mois[$a]; $a++;?>
                                        </td>
                                   <?php }
                                ?>
                            </tr>
                       <?php  }
                    }
                        if (isset($_SESSION['lang']) && $_SESSION['lang']=='francais') { 
                            $mois=mois_francais(); 
                            $a=0;
                            for ($i=0; $i <= 2 ; $i++) {  ?>
                                <tr>
                                    <?php 
                                         
                                        while ($a < 4) { ?>
                                            <td>
                                                <?php echo $mois[$a]; $a++;?>
                                            </td>
                                            
                                       <?php  }
                                    ?>
                                </tr> 
                                <tr>   
                                    <?php 
                                        while ($a >= 4 && $a<8) { ?>
                                            <td>
                                                <?php echo $mois[$a]; $a++;?>
                                            </td>
                                       <?php }
                                    ?>
                                </tr> 
                                <tr>   
                                    <?php 
                                        while ($a >= 8 && $a<12) { ?>
                                            <td>
                                                <?php echo $mois[$a]; $a++;?>
                                            </td>
                                       <?php }
                                    ?>
                                </tr>
                           <?php  }
                        }
                        elseif (isset($_SESSION['lang']) && $_SESSION['lang']=='anglais') {
                            $mois=mois_anglais(); 
                            $a=0;
                            for ($i=0; $i <= 2 ; $i++) {  ?>
                                <tr>
                                    <?php 
                                         
                                        while ($a < 4) { ?>
                                            <td>
                                                <?php echo $mois[$a]; $a++;?>
                                            </td>
                                            
                                       <?php  }
                                    ?>
                                </tr> 
                                <tr>   
                                    <?php 
                                        while ($a >= 4 && $a<8) { ?>
                                            <td>
                                                <?php echo $mois[$a]; $a++;?>
                                            </td>
                                       <?php }
                                    ?>
                                </tr> 
                                <tr>   
                                    <?php 
                                        while ($a >= 8 && $a<12) { ?>
                                            <td>
                                                <?php echo $mois[$a]; $a++;?>
                                            </td>
                                       <?php }
                                    ?>
                                </tr>
                           <?php  }
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>    
</body>
<?php
    session_destroy($_SESSION);
?>
</html>
