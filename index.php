<!DOCTYPE html>
<?php
require_once 'calculadora.php';
$calc = new Calculadora();
?>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Calculadora</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Style/style.css">
</head>

<body>
    <?php

    if (isset($_POST["operação"])) {
        $ope = $_POST["operação"];
        $result = 0;
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];

        if ($ope == "soma") {
            $result = $calc->Soma($n1, $n2);
        } else if ($ope == "subtracao") {
            $result = $calc->Subtração($n1, $n2);
        } else if ($ope == "multiplicacao") {
            $result = $calc->Multiplicação($n1, $n2);
        } else if ($ope == "divisao") {
            $result = $calc->Divisão($n1, $n2);
        }
    }
    ?>

    <div class="corpo">
        <div class="secundaria">
            Selecione a operação: <br>
            <form method="POST" action="">
                <label for="soma">Somar</label>
                <input type="radio" name="operação" value="soma" id="soma"><br>
                <label for="subtracao">Subtrair</label>
                <input type="radio" name="operação" value="subtracao" id="subtracao"><br>
                <label for="multiplicacao">multiplicar</label>
                <input type="radio" name="operação" value="multiplicacao" id="multiplicacao"><br>
                <label for="divisao">dividir</label>
                <input type="radio" name="operação" value="divisao" id="divisao"><br>
                <input type="Number" class="numero" name="n1" required><br>
                <input type="Number" class="numero" name="n2" required><br>
                <input type="submit">
            </form>
        </div>
        <div class="resultado">
            <?php
            if (isset($_POST["operação"]))
                echo "O resultado é: " . $result;
            ?>
        </div>
    </div>
</body>

</html>