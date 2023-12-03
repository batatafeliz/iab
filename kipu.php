<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--Efetue um código PHP que calcule e imprima o salário reajustado de um funcionário
de acordo com a seguinte regra:
• salários até 300, reajuste de 50%
• salários maiores que 300, reajuste de 30%-->
<body>
<form method="post">
    <label for="salario">Insira seu salário</label>
    <input type="float" name="salario" id="salario" required><br/>
    <input type="submit" value="magic"><br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $salario = floatval($_POST["salario"]);
    }
        if ($salario <= 300) {
            $total = $salario + ($salario * 0.5);
            $dif = $total - $salario;
            echo "Seu salário atual: $salario<br>";
            echo "Seu salário reajustado será: $total<br>";
            echo "A diferença é de: $dif<br>";
        } else {
            if ($salario > 300){
                $total = $salario + ($salario * 0.3);
                $dif = $total - $salario;
                echo "Seu salário atual: $salario<br>";
                echo "Seu salário reajustado será: $total<br>";
                echo "A diferença é de: $dif<br>";
            }
        }


?>
</body>
</html>