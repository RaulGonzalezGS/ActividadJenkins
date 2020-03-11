<?php

require ("vendor/autoload.php");

    $datos = file_get_contents('php://input');
    $descodificardatos = json_decode($datos, true);

    if ($descodificardatos["cont"] == "insertartab") {
        $ecuacion = new \ecuacion\modelo\EcuacionGrado2($descodificardatos["coeficientea"], $descodificardatos["coeficienteb"], $descodificardatos["coeficientec"]);

        $coeficientex = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
        $result = array();

        for ($i = 0; $i < count($coeficientex); $i++) {
            array_push($result, $ecuacion->ecuacionsegundogrado($i));
        }

        $descodificardatos["resultadotab"] = $result;
        $descodificardatos["encabezadoscoef"] = $coeficientex;

        $resultado = json_encode($descodificardatos);
        echo $resultado;
    }