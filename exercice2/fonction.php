<?php 
    function perimetre($long, $larg)
        {
            return ($long+$larg)*2 ;
        }
    function surface($long, $larg)
        {
            return $long*$larg ;
        } 
    function diagonal($long, $larg)
        {
            return sqrt(pow($long, 2)*pow($larg, 2));
        }   

        // echo perimetre(3, 5);
?>

