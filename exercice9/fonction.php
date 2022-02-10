<?php 
    function table_multiplication($nombre)
    {   $p=1;
        if (is_numeric($nombre) && $nombre>0) {
            for ($i=1; $i <= 10; $i++) { 
                echo $i." * ".$nombre." = ".$nombre*$i."<br>";
            }
        }
        else {
            echo "Veuillez revoir votre saisi";
        }
    }
    
    
?>