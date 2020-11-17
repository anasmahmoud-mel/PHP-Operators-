<?php
$x=110;
$y=100;
if($x>$y){
    $diff=abs($x-$y)^3;
echo $diff;
}else{
    $diff=abs($x-$y);
    echo $diff;
}