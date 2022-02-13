<?php 
    function suite_valeur($x)
    {
        if (is_numeric($x)) {
            $tab = array();
            for ($i=1; $i <= $x; $i++) { 
               $tab[$i]=$i;
            }
            return($tab);
        }
        
    }

    function nombre_premier($x)
    {   
       $chaine=array();
       
        if (is_numeric($x)) 
        {   $k=0;
            $cptp=0;
            for ($i=2; $i <= $x; $i++) 
            { 
                $cpt=0;
                for ($j=1; $j <= $i-1; $j++) 
                { 
                    if ($i%$j==0) 
                    {
                        $cpt++;
                    }
                }
                if ($cpt==1) 
                {
                    $k++;
                   $chaine[$k] = $i;
                }
            }
           
             return $chaine;
        }
        
    }
    
    // echo nombre_premier(17);
    function moyenne($x)
    {
        if (is_numeric($x)) 
        {
            $som=0;
            for ($i=1; $i<=$x ; $i++) 
            { 
                $som+=$i;   
            } 
        return  intdiv($som,$x);
        }
    }
    function sup_moy($x)
    {
        for ($i=1; $i < $x; $i++) { 
            if ($i>moyenne($x)) {
                echo $i."  ";
            }
        }
    }
    function inf_moy($x)
    {
        for ($i=1; $i < $x; $i++) { 
            if ($i<moyenne($x)) {
                echo $i."  ";
            }
        }
    }
    // var_dump(nombre_premier(30))."<br>";
    // var_dump(nombre_premier(20));
    // echo moyenne(20)."<br>";
    // echo sup_moy(20)."<br>";
    // echo inf_moy(20);
    // var_dump(suite_valeur(10)) ;
   
?>