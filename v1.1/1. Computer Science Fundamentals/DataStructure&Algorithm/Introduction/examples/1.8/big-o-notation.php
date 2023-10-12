<?php 
function findSum($arr){
    $sum=0;
    foreach($arr as $value){
        $sum+=$value;
    }
    return $sum;
}
$arr = [1,2,3,4];
$result = findSum($arr);
echo "The sum of the array is $result";
?>
