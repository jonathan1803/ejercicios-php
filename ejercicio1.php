<?php 

$arr = [1, 2, 3, 4, 5];
function reverseArray($arr) {
    return array_reverse($arr);
}

$reversed = reverseArray($arr);
print_r($reversed); 
?>