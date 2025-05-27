<form method="post">
    <label for="salario">Informe seu salário:</label>
    <input type="number"  name="salario" required>
    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $salario = $_POST['salario'];
    $salario = $salario * 1.3;

    echo "<h2>O salário informado +30%: R$ $salario</h2>";
}
?>

