<?php

include_once('funciones.php');
include_once('./persistencia/resultados-imc.php');

$estatura = 0;
$peso = 0;

if (isset($_POST['estatura']) && isset($_POST['peso'])) {

    $estatura = strip_tags($_POST['estatura']);
    $peso = strip_tags($_POST['peso']);

    try {
        $resultado = calcularImc($estatura, $peso);

        registrarIMC($estatura, $peso);

    } catch (Exception $e) {
        die('Error: '.$e->GetMessage());
    }

    echo 'IMC es: '.$resultado;
}

?>