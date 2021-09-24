<!-- 
SNACK 1
Creare una funzione che restituisce un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. Stampare i numeri in pagina.
 -->

<?php

function rng($min, $max, $times)
{
    // Generate all teh numbers between $min and $max
    $numbers = range($min, $max);
    // Shuffles the generated numbers to make them randomized
    shuffle($numbers);
    // Remove elements from the array to make it as long as $times
    $result[] = array_slice($numbers, 0, $times);
    // Show the random numbers generated
    var_dump($result);
};

echo rng(0, 100, 15);

?>