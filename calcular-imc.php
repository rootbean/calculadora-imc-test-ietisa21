<?php

include_once('funciones.php');

$estatura = 0;
$peso = 0;

$estatura = $_POST['estatura'];
$peso = $_POST['peso'];

try {
    $resultado = calcularImc($estatura, $peso);
} catch (Exception $e) {
    die('Error: '.$e->GetMessage());
}

echo 'IMC es: '.$resultado;

?>