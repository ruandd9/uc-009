<?php
echo "<header> <div style='background-color: #000000; color: white; width: 100%; text-align: center; font-size: 36px; margin-bottom: 100px;'> Atividade 24 - Multiplicação </header>";
?>

<form method="post">
    <label for="numero1">Informe o numero:</label>
    <input type="number"  name="numero1" required>
    <input type="submit" value="Enviar">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n1 = $_POST['numero1'];
    $dobro = $n1 + $n1;
    $triplo = $n1 + $n1 + $n1;

    echo "<h2>O dobro do numero informado: $dobro</h2><h2>O triplo do numero informado: $triplo</h2>";
    
}
?>

