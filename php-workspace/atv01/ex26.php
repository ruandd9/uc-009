<?php
echo "<header> <div style='background-color: #000000; color: white; width: 100%; text-align: center; font-size: 36px; margin-bottom: 100px;'> Atividade 26 - negativo ou positivo  </header>";
?>

<form method="post">
    <label for="n1">Informe um numero:</label>
    <input type="number"  name="n1" required>
    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['n1'];
    if ($num > 0) {
        echo "<h2>O numero informado e positivo</h2>";
        
    } else  if ($num < 0){
        echo "<h2>O numero informado e negativo</h2>";
    } else {
        echo "<h2>O numero informado e 0</h2>";
        
    }
    

}
?>

