<?php
header('Content-Type: text/html; charset=utf-8');

// Написать 2 функции сортировки массивов, используя алгоритмы «Сортировка обменами», «Сортировка вставками»

echo "«Сортировка обменами»","<br>";
function buble(&$arr){
echo "before:"," ", implode (" ",$arr),"<br>";
for($a=0;$a<count($arr)-1;$a++){
	for($i=0;$i<count($arr)-$a-1;$i++){
		$x=$arr[$i];
		$y=$arr[$i+1];
		    if($x>$y){
            $arr[$i]=$y;
            $arr[$i+1]=$x;
            }
	 }
	}
	return $arr;
}
$arr=array(3,7,2,9,4);
buble($arr);
echo "after:"," ", implode (" ",$arr),"<br>";

echo "«Сортировка вставками»","<br>";
function ins(&$a) {
	echo "before:"," ", implode (" ",$a),"<br>";
  for ($i = 1; $i < count($a); $i++) {
    $x = $a[$i];
    for ($j = $i - 1; $j >= 0 && $a[$j] > $x; $j--) {
            $a[$j + 1] = $a[$j];
    }
        $a[$j + 1] = $x;
  }
 return $a;
}
$a=array(2,4,9,1,5);
ins($a);
echo "after:"," ", implode (" ",$a),"<br>";

?>