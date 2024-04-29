<?php 

    function Oper($operacao,$num1,$num2){

        if(strcasecmp($operacao,"+") == 0){

            $val =  Soma($num1,$num2);
            return "{$num1} {$operacao} {$num2} = {$val}";

        }
        else if(strcasecmp($operacao,"-") == 0){
            
            $val =  Subtracao($num1,$num2);
            return "{$num1} {$operacao} {$num2} = {$val}";

        }
        if(strcasecmp($operacao,"*") == 0){
         
            $val =  Multiplicacao($num1,$num2);
            return "{$num1} {$operacao} {$num2} = {$val}";
        }
        if(strcasecmp($operacao,"/") == 0){
        
            $val =  Divisao($num1,$num2);
            return "{$num1} {$operacao} {$num2} = {$val}";

        }
        if(strcasecmp($operacao,"!") == 0){
        
            $val =  Fatoração($num1,$num2);
            return "{$num1} {$operacao} {$num2} = {$val}";

        }
        if(strcasecmp($operacao,"^") == 0){

            $val =  Potenciação($num1,$num2);
            return "{$num1} {$operacao} {$num2} = {$val}";

        }
        
    }

    function Soma($x,$y){

        return $x + $y;

    }
    
    function Subtracao($x,$y){

        return $x - $y;

    }
    
    function Divisao($x,$y){
     
        return round( $x / $y,2);

    }
    
    function Multiplicacao($x,$y){

        return $x * $y;

    }
    
    function Fatoração($x,$y){


        
    }
    
    function Potenciação($x,$y){

        return pow($x,$y);

    }

?>