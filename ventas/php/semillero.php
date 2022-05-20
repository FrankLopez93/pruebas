<?php

function solution($a){
    for($i = 0; $i < count($a); $i++){
        if ($a[$i] < 6) {
            echo count($i);
        }
    }
}

solution([1,3,6,4,1,2]);
solution([1,2,3]);
solution([-1,-3]);





?>