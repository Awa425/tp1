<?php 
    function longueur_chaine($chaine)
    {
        $i = 0;
        while ($chaine[$i]) {
           $i++;
        }
        return $i;
    }

    function si_entier($x)
    {
        $j=0;
        for ($i=0; $i <= longueur_chaine($x); $i++) 
        { 
            if ($x[$i]>=-9 && $x[$i]<=9) {
                  return true;
            }
        }
                
    }
    
    
?>

