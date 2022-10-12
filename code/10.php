<?php

function sum($pm1, $pm2){
    if ($pm1 + $pm2 > 10)
        return true;
    return false;
}

function equal($pm1, $pm2){
    if ($pm1 == $pm2)
        return true;
    return false;
}

function fage($pm1){
    if($pm1 < 10 || $pm1 > 99)
        echo "Error";
    else{
        $sum = $pm1 %10 + (($pm1 - $pm1 %10)/10);
        if($sum<10)
            echo "Сумма однозначна";
        else
            echo "Сумма двузначна";
    }
}

function quantity($arr) {
  if (count($arr) == 3) {
    $sum = 0;
    for($i = 0; $i < 3; $i++) 
      $sum += $arr[$i];
    echo $sum;
  }
}
