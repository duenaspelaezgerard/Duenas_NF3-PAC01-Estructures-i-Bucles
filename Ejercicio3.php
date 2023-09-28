<?php

$mes = date('n');

$primavera_inicio = 3;
$primavera_fin = 5;
$verano_inicio = 6;
$verano_fin = 8;
$otoño_inicio = 9;
$otoño_fin = 11;
$invierno_inicio = 12; 
$invierno_fin = 2; 

if ($mes >= $primavera_inicio && $mes <= $primavera_fin) {
    $mensaje = "¡Bienvenida Primavera!";
} elseif ($mes >= $verano_inicio && $mes <= $verano_fin) {
    $mensaje = "¡Bienvenido Verano!";
} elseif ($mes >= $otoño_inicio && $mes <= $otoño_fin) {
    $mensaje = "¡Bienvenido Otoño!";
} else {
    $mensaje = "¡Bienvenido Invierno!";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje Estacional</title>
</head>
<body>
    <p><?php echo $mensaje; ?></p>
</body>
</html>
