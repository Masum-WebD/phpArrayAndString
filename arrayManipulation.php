<?php 
$numbers = [1,2,3,4,5,6,7,8,9,10];
$numberCount = count($numbers);
for($i=0;$i<$numberCount;$i++){
    if($numbers[$i] % 2 !==0){
        echo $numbers[$i] .PHP_EOL;
    };
};