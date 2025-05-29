<?php
echo "<header> <div style='background-color: #000000; color: white; width: 100%; text-align: center; font-size: 36px; margin-bottom: 100px;'> Atividade 25 - if e else para verificar se uma pessoa pode votar </header>";
?>

<form method="post">
    <label for="idade">Informe a idade:</label>
    <input type="number" name="idade" required>
    <input type="submit" value="Enviar">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idade = $_POST['idade'];
    if ($idade >= 16) {
        echo "<h2 style='text-align: center; font-size: 32px; margin-top: 200px;'>Você pode votar</h2>";
    } else {
        echo "<h2 style='text-align: center; font-size: 32px; margin-top: 200px;'>Você não pode votar</h2>";
        $diasParaVotar = (16 - $idade) * 365;
        echo "<h3 style='text-align: center; font-size: 24px;'>Faltam aproximadamente $diasParaVotar dias para você poder votar</h3>";
    }
}
?>