<?php
function is_leap_year($year)
{
   return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year % 400) == 0)));
}
if(is_leap_year(2016)==1){
    echo 'leap year';
}else{
    echo 'no';
}
?>