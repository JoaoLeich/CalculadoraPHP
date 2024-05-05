<?php 
    session_start();

    if (!isset($_SESSION['num1'])) {
        $_SESSION['num1'] = '';
    }
    if (!isset($_SESSION['num2'])) {
        $_SESSION['num2'] = '';
    }
    if (!isset($_SESSION['operacao'])) {
        $_SESSION['operacao'] = '';
    }
    if (!isset($_SESSION['historico'])) {
        $_SESSION['historico'] = [];
    }
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
            $num2 = 0;
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
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numero1 = $_POST['num1'];
        $numero2 = $_POST['num2'];
        $operacao = $_POST['operacao'];
    
        if (isset($_POST['memoria'])) {
            $_SESSION['num1'] = $numero1;
            $_SESSION['num2'] = $numero2;
            $_SESSION['operacao'] = $operacao;
        } else {
            $resultado = Oper($num1, $num2, $operacao);
            $historico = $_SESSION['historico'];
            $historico[] = "$numero1 $operacao $num2 = $resultado";
            $_SESSION['historico'] = $historico;
        }
    }
    
?>
