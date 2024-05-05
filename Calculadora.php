<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
<form action="" method="get" id="CalcForm" name="CalcForm">

    <label for="num1">Numero: </label>
    <input type="number" name="num1" id="num1">

    <label for="Operacao">Selecione a Operacao: </label>

    <select name="Operacao" id="Operacao" form="CalcForm">
        <option value="-">Subtração</option>
        <option value="+">Adição</option>
        <option value="*">Multiplicação</option>
        <option value="/">Divisão</option>
        <option value="!">Fatoração</option>
        <option value="^">Potenciação</option>
    </select>

    <label for="num2">Numero: </label>
    <input type="number" name="num2" id="num2">

    <input type="submit" name= "Oper" value="Calcular">
    <input type="submit" name="memoria" value="Memória">
</form>
<h2>Histórico de Cálculos</h2>
    <ul>
        <?php
        foreach ($_SESSION['historico'] as $calculo): 
            echo $calculo;
        endforeach; ?>
    </ul>
</body>

</html>


<?php 

    require_once 'Operacao.php';

    if ('num1' != "" ) {
        $val1 = $_GET['num1'];
        $val2 = $_GET['num2'];
        echo Oper($_GET['Operacao'],$val1,$val2); 
    }
?>
