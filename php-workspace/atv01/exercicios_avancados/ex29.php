<?php
echo "<header> <div style='background-color: #000000; color: white; width: 100%; text-align: center; font-size: 36px; margin-bottom: 100px;'> Atividade 29 - Gerador de Senha Segura </header>";
?>

<form method="post">
    <div style="text-align: center; margin: 20px;">
        <label for="tamanho">Tamanho da senha (8-32 caracteres):</label>
        <input type="number" name="tamanho" min="8" max="32" value="12" required>
        <br><br>
        <input type="checkbox" name="maiusculas" id="maiusculas" checked>
        <label for="maiusculas">Incluir letras maiúsculas</label>
        <br>
        <input type="checkbox" name="numeros" id="numeros" checked>
        <label for="numeros">Incluir números</label>
        <br>
        <input type="checkbox" name="especiais" id="especiais" checked>
        <label for="especiais">Incluir caracteres especiais</label>
        <br><br>
        <input type="submit" value="Gerar Senha">
    </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tamanho = $_POST['tamanho'];
    $maiusculas = isset($_POST['maiusculas']) ? true : false;
    $numeros = isset($_POST['numeros']) ? true : false;
    $especiais = isset($_POST['especiais']) ? true : false;
    
    $minusculas = 'abcdefghijklmnopqrstuvwxyz';
    $letras_maiusculas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeros_str = '0123456789';
    $caracteres_especiais = '!@#$%^&*()_+-=[]{}|;:,.<>?';
    
    $caracteres = $minusculas;
    if ($maiusculas) $caracteres .= $letras_maiusculas;
    if ($numeros) $caracteres .= $numeros_str;
    if ($especiais) $caracteres .= $caracteres_especiais;
    
    $senha = '';
    $tamanho_caracteres = strlen($caracteres);
    
    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[rand(0, $tamanho_caracteres - 1)];
    }
    
    echo "<div style='text-align: center; margin-top: 20px;'>";
    echo "<h2>Sua senha gerada:</h2>";
    echo "<div style='background-color: #f0f0f0; padding: 10px; border-radius: 5px; display: inline-block;'>";
    echo "<h3 style='margin: 0;'>" . $senha . "</h3>";
    echo "</div>";
    echo "</div>";
}
?> 