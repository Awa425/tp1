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
    <link rel="stylesheet" href="/TP/tp1/css/style11.css">
    <title>Document</title>
</head>
<body>
    <div class="liens">
            <a href="/TP/tp1/">Menu</a>
            <!-- <a href="/TP/tp1/exercice2">Suivant</a> -->
    </div>
    <div class="container">
        <div class="form">
            <form action="controller.php" method="post">
                <span>Nombre</span> : <input type="text" class="nombre" name="nombre" value="<?php if (isset($_SESSION['nmbre'])) {
                   echo $_SESSION['nombre'];
                } ?>"> <br>
                <span>Moyenne:</span><input type="text" name="moy" class="moy" value="<?php if (isset($_SESSION['nombre']) && is_numeric($_SESSION['nombre'])) {
                   echo moyenne($_SESSION['nombre']);
                 } else {
                     echo "Saisi un entier";
                 }?>"> 
                <input type="submit" name="valider" value="Valider" class="btn">
            </form>    
        </div>
        <div class="tableau">   
            <table class="table">
                <tbody>
                    <tr>
                        <th>Cles</th>
                        <th>Valeurs</th>
                    </tr>
                    <?php 
                        
                        if (isset($_SESSION['nombre'])) 
                        {   
                            $val=nombre_premier($_SESSION['nombre']);
                            foreach ($val as $key => $value) {?>
                                <tr>
                                    <td><?php echo $key; ?></td>
                                    <td><?php echo $value;?></td>
                                </tr>      
                                
                            <?php  }
                        }?>
                       
                </tbody>
            </table>
            <table class="table">
                    <tr>
                        <th>Cles</th>
                        <th>Valeurs</th>
                    </tr>
                <?php if(isset($_SESSION['nombre'])){
                    $tab=suite_valeur($_SESSION['nombre']);
                    $moy=moyenne($_SESSION['nombre']);
                    foreach ($tab as $key => $value) {   
                        if ($value<$moy) 
                        {?>
                            <tr>
                                <td><?php echo $key?></td>
                                <td><?php echo $value?></td>
                            </tr>
                      <?php }
                    }  }
                ?>
            </table>
            <table class="table">
                <tr>
                        <th>Cles</th>
                        <th>Valeurs</th>
                    </tr>
                <?php 
                if(isset($_SESSION['nombre'])){
                    $tab=suite_valeur($_SESSION['nombre']);
                    $moy=moyenne($_SESSION['nombre']);
                    foreach ($tab as $key => $value) {   
                        if ($value>=$moy) 
                        {?>
                            <tr>
                                <td><?php echo $key?></td>
                                <td><?php echo $value?></td>
                            </tr>
                      <?php }
                    }
                } 
                ?>
            </table>
        </div>
    </div>
</body>
</html>
<?php
 
?>