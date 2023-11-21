<?php

require_once 'Calculadora.php';

$num1 = $_POST['v1'] ?? 0;
$num2 = $_POST['v2'] ?? 0;
$op = $_POST['op'] ?? '';
$r = 0;

$calculadora = new Calculadora();
$r = $calculadora->calcular($num1, $num2, $op);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Calculadora UERJ-ZO</title>
</head>

<main>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <label for="v1">Digite o primeiro valor</label>
        <input name="v1" id="v1" value="<?= $num1 ?>" required>

        <label for="v2">Digite o segundo número</label>
        <input name="v2" id="v2" value="<?= $num2 ?>" required>

        <label for="iop">Operação</label>
        <input type="text" name="op" id="iop" list="lstop" value="<?= $op ?>">

        <datalist id="lstop">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x">x</option>
            <option value=":">:</option>
            <option value="**">**</option>
        </datalist>

        <input type="submit" value="Calcular">
    </form>
</main>

<section>
    <h2>Resultado do cálculo</h2>
    <ul>
        <li>O resultado encontrado entre <?= number_format($num1, 2, ",", ".") ?> <?=$op?> <?= number_format($num2, 2, ",", ".") ?> valores é <?= number_format($r, 2, ",", ".")  ?>👩🏿🖥️</li>
    </ul>
</section>

</body>
</html>
