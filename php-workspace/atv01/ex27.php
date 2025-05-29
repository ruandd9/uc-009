<?php
echo "<header> <div style='background-color: #000000; color: white; width: 100%; text-align: center; font-size: 36px; margin-bottom: 100px;'> Atividade 27 - Verificador de Números Pares e Ímpares </header>";
?>

<form method="post">
    <div style="text-align: center; margin: 20px;">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" required>
        <input type="submit" value="Verificar">
    </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero = $_POST['numero'];

    echo "<div style='text-align: center; margin-top: 30px;'>";

    if ($numero % 2 == 0) {
        echo "<h2 style='color: blue;'>O número $numero é PAR</h2>";
        echo "<p>Divisível por 2</p>";
    } else {
        echo "<h2 style='color: red;'>O número $numero é ÍMPAR</h2>";
        echo "<p>Não é divisível por 2</p>";
    }
    echo "</div>";
}
?>