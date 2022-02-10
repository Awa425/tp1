<?php 
/**
 * @param  string chaine (optional)
 * @return length chaine
 */
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
    function somme($x, $y)
    {
       
           return $x + $y;
       
    } 
    function exponentiel($x)
    {
        return exp($x);
    } 
    function difference($x, $y)
    {
        if ($x>=$y) {
            return $x-$y;
        }
        else {
            return -1*($y-$x);
        }
    } 
    function produit($x, $y)
    {
        return $x*$y;
    } 
    function modulo($x, $y)
    {
        if($y!=0)
            return $x%$y; 
    } 
    function division($x, $y)
    {
        if($y!=0)
            return $x/$y;
    } 
    function carre($x)
    {
        return $x*$x;
    } 
   
?>