<?php
echo "<header> <div style='background-color: #000000; color: white; width: 100%; text-align: center; font-size: 36px; margin-bottom: 100px;'> Atividade 30 - Calculadora de Juros Compostos </header>";
?>

<form method="post">
    <div style="text-align: center; margin: 20px;">
        <div style="margin: 10px;">
            <label for="capital">Capital Inicial (R$):</label>
            <input type="number" step="0.01" name="capital" required>
        </div>
        <div style="margin: 10px;">
            <label for="taxa">Taxa de Juros Mensal (%):</label>
            <input type="number" step="0.01" name="taxa" required>
        </div>
        <div style="margin: 10px;">
            <label for="tempo">Tempo (meses):</label>
            <input type="number" name="tempo" required>
        </div>
        <input type="submit" value="Calcular">
    </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $capital = $_POST['capital'];
    $taxa = $_POST['taxa'] / 100; // Convertendo porcentagem para decimal
    $tempo = $_POST['tempo'];
    
    if ($capital <= 0 || $taxa <= 0 || $tempo <= 0) {
        echo "<h2 style='color: red; text-align: center;'>Por favor, insira valores válidos maiores que zero.</h2>";
    } else {
        $montante = $capital * pow(1 + $taxa, $tempo);
        $juros = $montante - $capital;
        
        echo "<div style='text-align: center; margin-top: 30px;'>";
        echo "<h2>Resultado do Investimento:</h2>";
        echo "<div style='background-color: #f0f0f0; padding: 20px; border-radius: 5px; display: inline-block;'>";
        echo "<p>Capital Inicial: R$ " . number_format($capital, 2, ',', '.') . "</p>";
        echo "<p>Taxa Mensal: " . number_format($_POST['taxa'], 2, ',', '.') . "%</p>";
        echo "<p>Período: " . $tempo . " meses</p>";
        echo "<p>Juros Acumulados: R$ " . number_format($juros, 2, ',', '.') . "</p>";
        echo "<p>Montante Final: R$ " . number_format($montante, 2, ',', '.') . "</p>";
        echo "</div>";
        echo "</div>";
    }
}
?> 