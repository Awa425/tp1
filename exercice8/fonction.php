<?php 
    function nombre_1_a_N($nombre)
    {   
        if (is_int($nombre)) {
            for ($i=1; $i <= $nombre; $i++) 
            { 
                echo $i." ";
            }
        }
            
    }
?>