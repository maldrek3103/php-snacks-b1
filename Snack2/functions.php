<?php 
    include_once 'data.php';

function vote_average($vote){

    $average = array_sum($vote) / count($vote);

}
    

?>