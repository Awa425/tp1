<?php


   function validNombre($nbre,string $key,array &$arrError ):void{
    if(estVide($nbre)){
        $arrError[$key]="Veullez saisir une valeur";
    }else{
        if(!estNombre($nbre)){
            $arrError[$key]="Veullez saisir un nombre";
        }
    }
   }
   function estNombre($nbre):bool{
       return is_numeric($nbre); 
   }
   function estVide($nbre):bool{
    return empty($nbre); 
}

function equationSecondDegre(int|float $a,int|float $b,int|float $c){
        $delta=pow($b,2)-4*$c*$a;

        //<- :affectation +>  =
        //== ou ===
        if($delta==0){
            echo "La solution est ".(-1*$b/2*$a);
        }
}