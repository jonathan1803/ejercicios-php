<?php
function calcularFrecuenciaCaracteres($cadena) {
    $frecuencia = [];

    
    for ($i = 0; $i < strlen($cadena); $i++) {
        $caracter = $cadena[$i]; 

        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++;
        } else {
      
            $frecuencia[$caracter] = 1;
        }
    }

    return $frecuencia; 
}


$texto = "programacion";
$frecuencia = calcularFrecuenciaCaracteres($texto);
print_r($frecuencia); 
?>
