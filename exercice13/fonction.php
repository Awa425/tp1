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
        $resultat=array();
        $eliminEspace=trim($chaine);
        $eliminEspace=preg_replace('/\s+/', ' ', $eliminEspace);
        $eliminEspace=explode(". ", $eliminEspace); 
        foreach ($eliminEspace as $key => $value) 
        {
            $patern1="#^[A-Z0-9]#";
            $patern2="#[\@\#\$\%\^\&]#";

            if (preg_match($patern1 ,$value) && !preg_match($patern2 ,$value)) 
            {    
                $resultat[]=$value;
            }
        }
         return $resultat;
    }
?>