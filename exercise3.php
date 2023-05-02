<?php

$input = readline('input:');

if($input % 2 == 0){
    echo $input. 'This is an even number';
} elseif($input % 2 != 0) {
    print $input. 'This is an odd number';
}

$var1=0;
$var2=true;

var_dump ($var1===$var2);