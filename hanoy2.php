<?php
header('Content-Type: text/html; charset=utf-8');


function move($n=3,$P1,$P2,$P3) {
    if ($n === 1) {
       print("Move disk from pole $P1 to pole $P2");
    } else {
       move($n-1,$P1,$P3,$P2);
       move(1,$P1,$P2,$P3);
       move($n-1,$P3,$P2,$P1);
    }
 
}
move();

?>