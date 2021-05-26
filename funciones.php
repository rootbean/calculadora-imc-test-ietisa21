<?php

/**
 * Calcular IMC de un usuario
 * @param int $estatura
 * @param int $peso
 * @return int resultado IMC
 * @author Ruber Rodríguez <ruber19@gmail.com>
 * @version 1.0
 */
function calcularImc ($estatura, $peso) {

    if($estatura == 0) {
        throw new Exception('Error división!');
    }

    $resultado = round($peso / ($estatura * $estatura),2);
    return $resultado;
}


?>