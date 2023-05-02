<?php
$input1 = readline('input 1:');
$input2 = readline('input 2:');
$input3 = readline('input 3:');

if ($input1<$input2) {
    echo 'input value is :'.$input1;
 } elseif ($input2<$input1) {
     echo 'input value is :'.$input2;
    } elseif ($input3<$input1) {
        echo 'input value is :'.$input3;
     } elseif ($input1<$input3) {
            echo 'input value is'.$input1;
        } elseif ($input3<$input2){
            echo 'input value is '.$input3;
        } elseif($input2<$input3){
            echo 'input value is '.$input2;
        }
    
