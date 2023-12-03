<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<!--Faça um programa que leia 2 notas de um aluno, verifique
se as notas são válidas e exiba na tela a média destas notas.
Uma nota válida deve ser, obrigatoriamente, um valor entre 0 e 10,
onde caso a nota não possua um valor válido, este fato deve ser
informado ao usuário e o programa termina.-->
<body>
<form method="post">
    <label for="nota1">Insira nota 1</label>
    <input type="number" name="nota1" id="nota1" required><br/>
    <label for="nota2">Insira nota 2</label>
    <input type="number" name="nota2" id="nota2" required><br/>
    <input type="submit" value="magic"><br>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $nota1 = floatval($_POST["nota1"]);
        $nota2 = floatval($_POST["nota2"]);
    }
    if ($nota1 >= 0 && $nota1 <= 10 && $nota2 >= 0 && $nota2 <= 10){
        $total = ($nota1 + $nota2) / 2;
    echo "Média: $total";
    } else {
       echo "Alguma das notas é invalida, tente novamente";
        }
?>
</body>
</html>