<?php
header('Content-Type: text/html; charset=utf-8');

//Каждая бактерия делится на две в течение одной минуты. Начальное значение бактерий X. Сколько их станет через Y минут. Начальные значение сгенерировать с помощью функции rand(1,50)
 
 $x=rand(1,50);
 $y=3;//минуты
 for ($i = 1; $i <= $y; $i++) 
 {
   $x=$x*2;}
   echo "за $y",' ','мин',' ','будет', ' ', $x, ' ', 'бактерий', '<br>';

 echo'-----------------------------------------------------------------','<br>';

//Стоимость доставки самолетом 1 кг. груза составляет 30 USD. Для каждого из N пассажиров введите вес багажа, который он перевозит, подсчитайте, сколько каждый пассажир должен заплатить за перевозку своего багажа. Вычислите также общий вес груза, перевозимого пассажирами.

$arr=array(
	'p1'=> 'John',
    'p2'=>'Edward',
    'p3'=>'Mike',);
$arr2=array(
	'b1'=>'30',
    'b2'=>'5',
    'b3'=>'15',);
echo 'Пассажир',' ', $arr['p1'],' ', 'должен заплатить',' ', $arr2['b1']*30,' ','USD',' ', 'за перевозку багажа','<br>';
echo 'Пассажир',' ', $arr['p2'],' ', 'должен заплатить',' ', $arr2['b2']*30,' ','USD',' ', 'за перевозку багажа','<br>';
echo 'Пассажир',' ', $arr['p3'],' ', 'должен заплатить',' ', $arr2['b3']*30,' ','USD',' ', 'за перевозку багажа','<br>';
echo 'Общий вес багажа пассажиров =',' ', $arr2['b1']+$arr2['b2']+$arr2['b3'],'<br>';
echo'-----------------------------------------------------------------','<br>';

//Даны натуральные числа от 20 до 50.Напечатать те из них, которые делятся на 3, но не делятся на 5.
echo 'Список чисел которые делятся на 3, но не делятся на 5:','<br>'; 
for ($n=20; $n<=50; $n++)
{
	 if ($n%3==0 and $n%5!==0)
     {
     	echo $n,'<br>';
     }
}
echo'-----------------------------------------------------------------','<br>';

//С помощью цикла while() напишите скрипт вывода всех четных чисел в диапазоне от 2 до 100 включительно.
echo 'Список всех четных чисел в диапазоне от 2 до 100 включительно:','<br>';
$l=2;
while ($l<=100)
{
    if ($l%2==0)
     {
     	echo $l,'<br>';
     }
    $l++;
}
echo'-----------------------------------------------------------------','<br>';

//Сделать программу, выводящую факториал числа (произведение чисел от 1 одного до n), где n любое число больше 1.

$nn=4;// число n
$nnn=1;
for($zz=1;$zz<=$nn;$zz++){
	$nnn=$zz*$nnn;
}
echo 'Факториал числа',' ', $nn, '=', $nnn,'<br>';
echo'-----------------------------------------------------------------','<br>';


?>