<?php 

    function longueur_chaine(string $chaine)
    {
        $i = 0;
        while ($chaine[$i]) {
           $i++;
        }
        return $i;
    }
   
    function verifie_telephone($chaine)
    {
        // $chaine=explode(" ", $chaine); 
        $cpt1=0;
        $cpt2=0;
        $cpt3=0;   
        $cpt4=0;
        // $chaine2=array();
        // $chaine3=array();
        foreach ($chaine as $value) 
        {
            if (preg_match('\'^[7][7][0-9]{7}\'', $value) && longueur_chaine($value)==9) {
               $cpt1++;
               $chaine2[]=$value;  
            } 
            elseif (preg_match('\'^[7][6][0-9]{7}\'', $value) && longueur_chaine($value)==9) {
                $cpt2++;
                $chaine2[]=$value;
             } 
             elseif (preg_match('\'^[7][8][0-9]{7}\'', $value) && longueur_chaine($value)==9) {
                $cpt3++;
                $chaine2[]=$value;
             } 
             elseif (preg_match('\'^[7][5][0-9]{7}\'', $value) && longueur_chaine($value)==9) {
                $cpt4++;
                $chaine2[]=$value;
             } 
            
            }

        // var_dump($chaine2); echo $cpt1; die;
         return $chaine2;
    }
    // verifie_telephone('790127653 773564265 7865356784587 7795342167');

?>




