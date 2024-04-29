<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="teste.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <div id ="mae">
    <div id= "calc1">
    <form action="" method="get" id="CalcForm" name="CalcForm">

        <label for="Numero1">Numero 1: </label>
        <input type="number" name="Numero1" id="Numero1">


        <select name="Operacao" id="Operacao" form="CalcForm">
            <option value="-">Subtração</option>
            <option value="+">Adição</option>
            <option value="*">Multiplicação</option>
            <option value="/">Divisão</option>
            <option value="!">Fatoração</option>
            <option value="^">Potenciação</option>
        </select>

        <label for="Numero2">Numero 2: </label>
        <input type="number" name="Numero2" id="Numero2">

        <input type="submit" value="">

    </form>
    <p id="x"></p>
    <script>

      window.onkeydown = function() {detect(event);}
       window.onkeypress = function() {res(event);}
       var act = false;
       function detect(event) {
           if(event.ctrlKey) {
              act = true;
           }
           else
               act = false;
       }
        function res(event) {
            if(act) {
                document.getElementById("x").innerHTML = "ctrl " + String.fromCharCode(event.which);
            }
            else
                document.getElementById("x").innerHTML = String.fromCharCode(event.which);
        }
    
    </script>
    </div>

    <div id= "calc2">

        <p>kpsfjkpdakp</p>

    </div>
    </div>
    </body>

    </html>


    <?php 

    require_once 'Operacao.php';
    
    $val1 = $_GET['Numero1'];    
    
    $val2 = $_GET['Numero2'];

    echo Oper($_GET['Operacao'],$val1,$val2); 

?>