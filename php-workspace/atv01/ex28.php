<?php
echo "<header> <div style='background-color: #000000; color: white; width: 100%; text-align: center; font-size: 36px; margin-bottom: 100px;'> Atividade 28 - Verificador de Categoria de Natação </header>";
?>

<form method="post">
    <div style="text-align: center; margin: 20px;">
        <label for="idade">Digite a idade do nadador:</label>
        <input type="number" name="idade" min="0" required>
        <input type="submit" value="Verificar Categoria">
    </div>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idade = $_POST['idade'];
    
    echo "<div style='text-align: center; margin-top: 30px;'>";
    
    if ($idade < 5) {
        echo "<h2 style='color: red;'>Idade inválida para natação.</h2>";
    } elseif ($idade <= 7) {
        echo "<h2 style='color: blue;'>Categoria: Infantil A</h2>";
    } elseif ($idade <= 10) {
        echo "<h2 style='color: blue;'>Categoria: Infantil B</h2>";
    } elseif ($idade <= 13) {
        echo "<h2 style='color: blue;'>Categoria: Juvenil A</h2>";
    } elseif ($idade <= 17) {
        echo "<h2 style='color: blue;'>Categoria: Juvenil B</h2>";
    } else {
        echo "<h2 style='color: blue;'>Categoria: Adulto</h2>";
    }
    
    // Mostra a tabela de categorias
    echo "<div style='background-color: #f0f0f0; padding: 20px; border-radius: 5px; display: inline-block; margin-top: 20px;'>";
    echo "<h3>Tabela de Categorias:</h3>";
    echo "<p>Menor que 5 anos: Idade inválida para natação</p>";
    echo "<p>De 5 a 7 anos: Infantil A</p>";
    echo "<p>De 8 a 10 anos: Infantil B</p>";
    echo "<p>De 11 a 13 anos: Juvenil A</p>";
    echo "<p>De 14 a 17 anos: Juvenil B</p>";
    echo "<p>18 anos ou mais: Adulto</p>";
    echo "</div>";
    
    echo "</div>";
}
?> 