<?php 
    function si_annee_bissextile($annee)
    {
        if (($annee % 4 == 0) && ($annee % 100 <> 0) || ($annee % 400 == 0)) 
        {
            return  true;
        }
        return false;
    }

    /**
     * @param $mois
     * @param $annee
     * @return nombreJourDuMois
     */
    function nombre_jour($mois,$annee)
    {
            if ($mois == 2) {
                if (si_annee_bissextile($annee)) 
                {
                     $nombreJour = 29;
                }
                else 
                {
                     $nombreJour = 28;
                }
            }
            elseif(($mois==4) || ($mois==6) || ($mois==9) || ($mois == 11))
            {
                $nombreJour = 30;
            }
            elseif(($mois==1) || ($mois==3) || ($mois==5) || ($mois == 7) || ($mois == 8) || ($mois == 10) || ($mois == 12))
            {
                $nombreJour = 31;
            }
            // else echo "date invalide";

        return $nombreJour;
    }

    function date_valide($j, $m, $an)
    {

            $nombreJour=nombre_jour($m, $an);
            if ($j>$nombreJour || $j<1) 
            {
               return false;
            }  
            else {
                
                return true;
            }
            
    }
  
    function date_suivant($j, $m, $an)
    {
        if (date_valide($j, $m, $an)) 
        {
            $nombreJour = nombre_jour($m, $an);

           if ($j < $nombreJour) 
           {
                $j++;
           }
           elseif ($m == 12) 
           {
               $j=1;
               $m=1;
               $an++;
           }
           elseif($m==2) {
               $j = 1;
               $m++;
           }

           echo "la date suivant est : ".$j."/".$m."/".$an;
        }
        else echo "date invalide";
        
    }
    
    function date_precedent($j, $m, $an)
    {
        if (date_valide($j, $m, $an)) 
        {
            if ($j==1 && $m>=2) 
            {
                $j = nombre_jour($m-1, $an);
                $m--;
            }
            elseif($j==1 && $m==1)
            {
                $j=nombre_jour(12, $an-1);
                $m=12;
                $an--;
            }
           else 
           {
               $j--;
           }
           return  "la date precedent est : ".$j."/".$m."/".$an;
        }
        return "date invalide";
    }
?>