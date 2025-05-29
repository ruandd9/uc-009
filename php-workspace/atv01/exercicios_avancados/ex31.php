<?php
echo "<header> <div style='background-color: #000000; color: white; width: 100%; text-align: center; font-size: 36px; margin-bottom: 100px;'> Atividade 31 - Sistema de Notas Escolares </header>";
?>

<form method="post">
    <div style="text-align: center; margin: 20px;">
        <div style="margin: 10px;">
            <label for="nome">Nome do Aluno:</label>
            <input type="text" name="nome" required>
        </div>
        <div style="margin: 10px;">
            <label for="nota1">Nota 1:</label>
            <input type="number" step="0.1" name="nota1" min="0" max="10" required>
        </div>
        <div style="margin: 10px;">
            <label for="nota2">Nota 2:</label>
            <input type="number" step="0.1" name="nota2" min="0" max="10" required>
        </div>
        <div style="margin: 10px;">
            <label for="nota3">Nota 3:</label>
            <input type="number" step="0.1" name="nota3" min="0" max="10" required>
        </div>
        <div style="margin: 10px;">
            <label for="nota4">Nota 4:</label>
            <input type="number" step="0.1" name="nota4" min="0" max="10" required>
        </div>
        <input type="submit" value="Calcular Média">
    </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];
    
    $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
    $situacao = "";
    $cor = "";
    
    if ($media >= 7) {
        $situacao = "Aprovado";
        $cor = "green";
    } elseif ($media >= 5) {
        $situacao = "Recuperação";
        $cor = "orange";
    } else {
        $situacao = "Reprovado";
        $cor = "red";
    }
    
    echo "<div style='text-align: center; margin-top: 30px;'>";
    echo "<h2>Resultado do Aluno:</h2>";
    echo "<div style='background-color: #f0f0f0; padding: 20px; border-radius: 5px; display: inline-block;'>";
    echo "<p>Nome: " . $nome . "</p>";
    echo "<p>Nota 1: " . number_format($nota1, 1) . "</p>";
    echo "<p>Nota 2: " . number_format($nota2, 1) . "</p>";
    echo "<p>Nota 3: " . number_format($nota3, 1) . "</p>";
    echo "<p>Nota 4: " . number_format($nota4, 1) . "</p>";
    echo "<p>Média Final: " . number_format($media, 1) . "</p>";
    echo "<p style='color: " . $cor . "; font-weight: bold;'>Situação: " . $situacao . "</p>";
    echo "</div>";
    echo "</div>";
}
?> 