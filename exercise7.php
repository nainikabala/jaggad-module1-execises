<?php
//$value1= readline("input1:");
//$value2= readline("input2:");


// $sortedArray=rand($value1,$value2);                 
//$un=rand($value1,$value2);
// $unit=rand($value1,$value2);
// $unitesKing=rand($value1,$value2);
// $unitesHype=rand($value1,$value2);
// $unitesHome=rand($value1,$value2);

// $arr = [$sortedArray,$un,$unit,$unitesKing,$unitesHype,$unitesHome];
// $arr=[$un];
// for ($i=0; $i < $un ; $i++) { 
//     $arr=[$i]; 
// return $arr;

   
$value1= readline("input1:");
function generate($value1) {
    $arr = [];
    for($i = 0; $i < $value1; $i++) {
        $arr[] = rand(1,100);
    }
    return $arr;
}
$arr = generate($value1);
for($i=0; $i<count($arr)-1; $i++)
    {
        for($j=0; $j<count($arr)-1; $j++)
        {
            if($arr[$j] > $arr[$j+1]){
                $temp= $arr[$j+1];
                $arr[$j+1]= $arr[$j];
                $arr[$j]= $temp;
            }
        }
    }
    print_r($arr);