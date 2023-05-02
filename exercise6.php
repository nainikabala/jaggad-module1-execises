<?php
$score=readline("input:");


$maxCredits=4;
$aCredits = 4;
$bCredits = 3;
$cCredits = 2;
$dCredits = 2;
$fCredits = 0;

if($score>=90){
    echo 'our grade of'.$score.' corresponds to a letter grade of C and a percentage score of '.$score=$aCredits/$maxCredits*100;
}elseif($score>=80 and $score<=89){
    echo'our grade of'.$score.' corresponds to a letter grade of C and a percentage score of '. $score=$bCredits/$maxCredits*100;
}elseif($score>=70 and $score<=79){
    echo 'our grade of'.$score.' corresponds to a letter grade of C and a percentage score of '. $score=$cCredits/$maxCredits*100;
}elseif($score>=60 and $score<=69) {
    echo 'our grade of'.$score.' corresponds to a letter grade of C and a percentage score of '. $score=$dCredits/$maxCredits*100;
}elseif($score<=59){
    echo 'our grade of'.$score.' corresponds to a letter grade of C and a percentage score of '. $score=$fCredits/$maxCredits*100;
}