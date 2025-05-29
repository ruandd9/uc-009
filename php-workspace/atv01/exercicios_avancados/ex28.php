<?php
session_start();

if (!isset($_SESSION['numero_secreto'])) {
    $_SESSION['numero_secreto'] = rand(1, 100);
    $_SESSION['tentativas'] = 0;
}

echo "<header> <div style='background-color: #000000; color: white; width: 100%; text-align: center; font-size: 36px; margin-bottom: 100px;'> Atividade 28 - Jogo de Adivinhação </header>";
?>

<form method="post">
    <div style="text-align: center; margin: 20px;">
        <label for="palpite">Digite um número entre 1 e 100:</label>
        <input type="number" name="palpite" min="1" max="100" required>
        <input type="submit" value="Tentar">
    </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $palpite = $_POST['palpite'];
    $_SESSION['tentativas']++;
    
    echo "<div style='text-align: center; margin-top: 20px;'>";
    
    if ($palpite < 1 || $palpite > 100) {
        echo "<h2 style='color: red;'>Por favor, digite um número entre 1 e 100!</h2>";
    } else {
        if ($palpite < $_SESSION['numero_secreto']) {
            echo "<h2 style='color: blue;'>Tente um número maior!</h2>";
        } elseif ($palpite > $_SESSION['numero_secreto']) {
            echo "<h2 style='color: blue;'>Tente um número menor!</h2>";
        } else {
            echo "<h2 style='color: green;'>Parabéns! Você acertou em " . $_SESSION['tentativas'] . " tentativas!</h2>";
            echo "<form method='post'><input type='hidden' name='reiniciar' value='1'><input type='submit' value='Jogar Novamente'></form>";
            session_destroy();
        }
    }
    
    echo "<h3>Número de tentativas: " . $_SESSION['tentativas'] . "</h3>";
    echo "</div>";
}

if (isset($_POST['reiniciar'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?> 