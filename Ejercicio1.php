<?php
date_default_timezone_set('Europe/Madrid');
$hoy = new DateTime();

$antesdeayer = clone $hoy;
$antesdeayer->modify('-2 days');

$mesQueViene = clone $hoy;
$mesQueViene->modify('first day of next month');

$queFalta = $mesQueViene->diff($hoy)->days;

$nochevieja = new DateTime(date('Y-12-31'));
$mesesParaAcabar = $nochevieja->diff($hoy)->m;

echo "Antes de ayer " . $antesdeayer->format('Y-m-d') . ".<br>";
echo "El mes que viene " . $mesQueViene->format('F') . ".<br>";
echo "Faltan " . $queFalta . " dias para acabar el mes.<br>";
echo "Faltan " . $mesesParaAcabar . " meses para acabar este año.";
?>
