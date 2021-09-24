<?php
include_once 'data.php';

function vote_average($array)
{
    $average = array_sum($array) / count($array);
    return round($average, 1);
}
