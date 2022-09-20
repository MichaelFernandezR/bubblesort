<?php
$arr2 = array(7, 22, 33, 99, 6, 55, 11, 2, 3, 88, 4);
echo "Original Array Elements :: ";
echo "<br>";
$len12 = sizeof($arr2);
for ($z1 = 0; $z1 < $len12; $z1++)
echo $arr2[$z1]." ";
echo "<hr>";
echo "<br>Sorted array with index values :: \n<br>";
$sortedArr2 = bubbleSort($arr2);
var_dump($sortedArr2);
echo "<hr>";
function bubbleSort(array $arr2) {
$sorted2 = false;
while (false === $sorted2) {
$sorted2 = true;
for ($i2 = 0; $i2 < count($arr2)-1; ++$i2) {
$current2 = $arr2[$i2];
$next2 = $arr2[$i2+1];
if ($next2 < $current2) {
$arr2[$i2] = $next2;
$arr2[$i2+1] = $current2;
$sorted2 = false;
}
}
}
return $arr2;
}
echo "<br> Sorted Array Elements List :: ";
$len12 = sizeof($sortedArr2);
for ($z1 = 0; $z1 < $len12; $z1++)
echo $sortedArr2[$z1]." ";
echo "<br>";
echo "<hr>";
?>