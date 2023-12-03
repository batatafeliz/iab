.+<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comparação</title>
</head>
<body>
    
    <form method="post">
        <label for="A">Insira o valor de A</label>
        <input type="number" name="A" id="A" required><br/>
        <label for="B">Insira o valor de B</label>
        <input type="number" name="B" id="B" required><br/>
        <label for="C">Insira o valor de C</label>
        <input type="number" name="C" id="C" required><br/>
        <label for="D">Insira o valor de D</label>
        <input type="number" name="D" id="D" required><br/>
        <input type="submit" value="magic">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $A = floatval($_POST["A"]);
        $B = floatval($_POST["B"]);
        $C = floatval($_POST["C"]);
        $D = floatval($_POST["D"]);
    }
        if ($A + $C > $B * $D) {
            echo "A+C maior que B*D";
        } else {
            if($A + $C < $B * $D) {
                echo "A+C menor que B*D";
            } elseif ($A + $C == $B * $D) {
                echo "A+C igual o valor de B*D";
            }
        }

    ?>

</body>
</html>