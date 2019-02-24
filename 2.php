<?php
header('Content-Type: text/html; charset=utf-8');

//Найти наибольшее и наименьшее значение функции y=3x^2+x-4, на заданном интервале(в виде массива) который необходимо сгенерировать случайным образом

foreach (range(2, 10) as $x) 
    {
	$y=3*pow($x,2)+$x-4;
	$arr[]=$y;
	} 
echo 'Максимальное значение функции=', max($arr),'<br>';
echo 'Минимальное значение функции=',min($arr),'<br>';

echo'-----------------------------------------------------------------','<br>';

//Найти наибольшее и наименьшее значение функции y=3x^2+x-4, если на заданном интервале [a,b] Х изменяется с шагом 0,5.
unset($y);
unset($x);
unset($arr);
for($x=2;$x<=10;$x+=0.5) 
    {
	$y=3*pow($x,2)+$x-4;
	$arr[]=$y;
	} 
echo 'Максимальное значение функции=', max($arr),'<br>';
echo 'Минимальное значение функции=',min($arr),'<br>';

echo'-----------------------------------------------------------------','<br>';


//**В 1202г. Итальянский математик Леонард Пизанский (Фибоначчи) предложил такую задачу: пара кроликов каждый месяц дает приплод – двух кроликов (самца и самку), от которых через два месяца уже получается новый приплод, Сколько кроликов будет через год, если в начале года имелась одна пара? Согласно условию задачи числа, соответствующие количеству кроликов, которые появляются через каждый месяц, составляют последовательность 1, 1, 2, 3, 5, 8, 13, 21, 37, … Составьте программу, позволяющую найти все числа Фибоначчи, меньшие заданного числа N.

/*$n=10;
function fibonacci($k)
{
    if ($k < 3) {
        return 1; 
    }
    else {
        return fibonacci($k-1) + fibonacci($k-2);
    }
}

for ($k = 1; $k <= $n; $k++) {
    echo(fibonacci($k)),'<br>';
}
*/



?>