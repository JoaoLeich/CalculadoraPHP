<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
<form action="" method="get" id="CalcForm" name="CalcForm">

    <label for="Numero1">Numero: </label>
    <input type="number" name="Numero1" id="Numero1">

    <label for="Operacao">Selecione a Operacao: </label>

    <select name="Operacao" id="Operacao" form="CalcForm">
        <option value="-">Subtração</option>
        <option value="+">Adição</option>
        <option value="*">Multiplicação</option>
        <option value="/">Divisão</option>
        <option value="!">Fatoração</option>
        <option value="^">Potenciação</option>
    </select>

    <label for="Numero2">Numero: </label>
    <input type="number" name="Numero2" id="Numero2">

    <input type="submit" value="Oper">
    <input type="submit" name="memoria" value="Memória">
</form>
<h2>Histórico de Cálculos</h2>
    <ul>
        <?php foreach ($_SESSION['historico'] as $calculo): ?>
            <li><?php echo $calculo; ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>


<?php 

    require_once 'Operacao.php';
    
    $val1 = $_GET['Numero1'];    
    
    $val2 = $_GET['Numero2'];

    echo Oper($_GET['Operacao'],$val1,$val2); 

?>
