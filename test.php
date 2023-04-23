<?php 

function getCard($credit, $rep)

{

    $res =  str_repeat("*", $rep) . substr($credit, -4);
    return $res;
}

echo GetCard(1234567891234567, 3);
