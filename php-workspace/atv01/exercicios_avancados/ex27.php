<?php
echo "<header> <div style='background-color: #000000; color: white; width: 100%; text-align: center; font-size: 36px; margin-bottom: 100px;'> Atividade 27 - Calculadora de IMC </header>";
?>

<form method="post">
    <div style="margin: 20px;">
        <label for="peso">Peso (kg):</label>
        <input type="number" step="0.01" name="peso" required>
    </div>
    <div style="margin: 20px;">
        <label for="altura">Altura (m):</label>
        <input type="number" step="0.01" name="altura" required>
    </div>
    <input type="submit" value="Calcular IMC">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    
    if ($peso <= 0 || $altura <= 0) {
        echo "<h2 style='color: red; text-align: center;'>Por favor, insira valores válidos maiores que zero.</h2>";
    } else {
        $imc = $peso / ($altura * $altura);
        $categoria = "";
        
        if ($imc < 18.5) {
            $categoria = "Abaixo do peso";
        } elseif ($imc < 25) {
            $categoria = "Peso normal";
        } elseif ($imc < 30) {
            $categoria = "Sobrepeso";
        } elseif ($imc < 35) {
            $categoria = "Obesidade Grau I";
        } elseif ($imc < 40) {
            $categoria = "Obesidade Grau II";
        } else {
            $categoria = "Obesidade Grau III";
        }
        
        echo "<div style='text-align: center; margin-top: 30px;'>";
        echo "<h2>Seu IMC é: " . number_format($imc, 2) . "</h2>";
        echo "<h3>Categoria: " . $categoria . "</h3>";
        echo "</div>";
    }
}
?> 