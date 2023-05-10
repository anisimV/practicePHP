<?php 

function sumNumbers(int $num): int
{
    if($num >= 10) {
        $num = array_sum(str_split($num));
    }
    
    return $num;
}
echo sumNumbers(999); // 27
