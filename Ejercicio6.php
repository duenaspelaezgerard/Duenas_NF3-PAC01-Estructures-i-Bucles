<?php
session_start();

if (isset($_SESSION['visits'])) {
    $_SESSION['visits']++;
} else {
    $_SESSION['visits'] = 1;
}

$visits = $_SESSION['visits'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Visitas</title>
</head>
<body>
    <h1>Contador de Visitas</h1>
    <p>Esta página ha sido visitada <?php echo $visits; ?> veces.</p>
</body>
</html>
