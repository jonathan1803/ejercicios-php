<?php
function sumaNumerosPares($arr) {
    $suma = 0; 
    foreach ($arr as $numero) {
        if ($numero % 2 == 0) {  
            $suma += $numero;  
        }
    }
    return $suma;
}

// Ejemplo de uso
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$suma = sumaNumerosPares($numeros);
echo "La suma de los números pares es: $suma";  
?>
