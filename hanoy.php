<?php
header('Content-Type: text/html; charset=utf-8');


function hanoy(&$q){
 if ($q<=0) {
return 0;
}
else 
{
	return $q=pow(2,$q)-1; 
	}
}
$q=3; //количество дисков
hanoy($q);
echo "steps:", $q;
?>