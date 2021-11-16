<?php

//function to check registration number
function test_reg($reg)
{
    $rg = trimmer($reg);
    $chars = str_split($reg);
    foreach ($chars as $char) {
        if ($char == '-') return true;
    }
    return false;
}
