<?php
function imprimirPiramide($n) {
    for ($i = 1; $i <= $n; $i++) { 
        
        for ($j = $n - $i; $j > 0; $j--) {
            echo " ";
        }
        // Imprimir asteriscos
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        echo "<br />"; 
    }
}
$n = 5; 
imprimirPiramide($n);
?>
