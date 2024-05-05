<?php 

    function Oper($operacao,$num1,$num2){

        switch ($operacao) {
            case '+':
                return $num1 + $num2;
            case '-':
                return $num1 - $num2;
            case '*':
                return $num1 * $num2;
            case '/':
                if ($num2 != 0) {
                    return $num1 / $num2;
                } else {
                    return 'Erro: Divisão por zero';
                }
            case "!":                
            $resultado = 1;
            while ($num1 != 1)
            {
                $resultado = $resultado * $num1;
                $num1 = $num1 - 1;
            }
            return $resultado;
            case "^": 
            return pow($num1,$num2);

            default:
                return 'Erro: Operação inválida';
        }
    }

?>
