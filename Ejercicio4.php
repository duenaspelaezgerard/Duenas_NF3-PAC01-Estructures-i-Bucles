<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formateador de Texto</title>
</head>
<body>
    <h1>Formateador de Texto</h1>
    <?php
   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtén las preferencias del usuario desde el formulario
        $textColor = $_POST["textColor"];
        $fontSize = $_POST["fontSize"] . "px";
        $fontFamily = $_POST["fontFamily"];
        $inputText = $_POST["inputText"];
    }
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="textColor">Color de Texto:</label>
        <input type="color" id="textColor" name="textColor" value="<?php echo isset($textColor) ? $textColor : '#000000'; ?>"><br><br>

        <label for="fontSize">Tamaño de Fuente:</label>
        <input type="number" id="fontSize" name="fontSize" min="1" max="72" step="1" value="<?php echo isset($fontSize) ? str_replace('px', '', $fontSize) : '16'; ?>"><br><br>

        <label for="fontFamily">Fuente de Texto:</label>
        <select id="fontFamily" name="fontFamily">
            <option value="Arial" <?php echo (isset($fontFamily) && $fontFamily == 'Arial') ? 'selected' : ''; ?>>Arial</option>
            <option value="Times New Roman" <?php echo (isset($fontFamily) && $fontFamily == 'Times New Roman') ? 'selected' : ''; ?>>Times New Roman</option>
            <option value="Verdana" <?php echo (isset($fontFamily) && $fontFamily == 'Verdana') ? 'selected' : ''; ?>>Verdana</option>
            <option value="Courier New" <?php echo (isset($fontFamily) && $fontFamily == 'Courier New') ? 'selected' : ''; ?>>Courier New</option>
            <option value="Georgia" <?php echo (isset($fontFamily) && $fontFamily == 'Georgia') ? 'selected' : ''; ?>>Georgia</option>
        </select><br><br>

        <label for="inputText">Ingresa el Texto:</label><br>
        <textarea id="inputText" name="inputText" rows="5" cols="40"><?php echo isset($inputText) ? $inputText : ''; ?></textarea><br><br>

        <input type="submit" value="Formatear Texto">
    </form>

    <?php
    
    if (isset($textColor) && isset($fontSize) && isset($fontFamily) && isset($inputText)) {
        echo "<div style='color: $textColor; font-size: $fontSize; font-family: $fontFamily;'>$inputText</div>";
    }
    ?>
</body>
</html>
