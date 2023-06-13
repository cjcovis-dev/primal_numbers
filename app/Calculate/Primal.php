<?php

namespace App\Calculate;

class Primal
{
    
    static function createList ($number)
    {
        $primal_numbers = [];

        $i = $number; 
        
        while ($i >= 2) {
        
            $res = Primal::isPrimal($i);
            
            if ($res)
            {
                array_push($primal_numbers, $i);
            }

            $i--;
        }

        return json_encode($primal_numbers);
    }

    static function isPrimal ($number)
    {
        for ($i = 2; $i < $number; $i++) {
            
            if (($number % $i) == 0) {
                
                // No es primo 
                return false;
            }
        }
        
        // Es primo 
        return true;
    }



}