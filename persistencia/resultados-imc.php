<?php

include_once('./persistencia/conexion-bd.php');

/**
 * Registrar IMC
 * @param float $estatura
 * @param float $peso
 * @author Ruber Rodríguez <ruber19@gmail.com>
 * @version 1.0
 */
function registrarIMC($estatura, $peso) {

    try {
        $con_bd = conexionBD();
        $insert_data = "INSERT INTO resultados_imc(estatura, peso, id_usuario) VALUES (?, ?, ?)";
        $result = $con_bd -> prepare($insert_data);
        $result -> execute(array($estatura, $peso, 2));
    } catch (Exception $e) {
        die('Error: '.$e->GetMessage());
    }

    echo 'El registro se realizó correctamente!';

}



?>