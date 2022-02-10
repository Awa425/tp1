<?php 
    function longueur_chaine(string $chaine)
    {
        $i = 0;
        while ($chaine[$i]) {
           $i++;
        }
        return $i;
    }
    function supprime_espace_unutil($chaine)
    {  
        $trm = trim($chaine);
        // $res = preg_replace('/[0-9\@\.\;\" "]+/', '', $chaine);
        return $resultat = preg_replace('/\s+/', ' ', $trm);

    }
    function tablaux_resultats(string $chaine)
    {
        trim($chaine);
        preg_replace('/\s+/', ' ',$chaine);
        $decouper=explode(". ", $chaine); 
        foreach ($decouper as $key => $value) {
            if (preg_match('/^[A-Za-z0-9]/',$value) && !preg_match('/[!@#$%^&*()]/',$value) && strlen($value)>=10) {
                $resultat[$key]=$value; 
                // echo "<br>";
                // echo($resultat[$key])."<br>"; 
            }
        }
        
         return $resultat;
    }
    // print_r(tablaux_resultats("Svp decSDFJKDSJFLK. Pour sav@oir. Le nombrty ertyu. "));
    
?>