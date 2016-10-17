<?php

$a = 0.001;
$b = 10;
$c = 1;


i:
if ($a<$b) 
{ 
   $y1 =  f($a);
   //echo $y1.'  ';
   $y2 = f($a+$c);
   //echo $y2.'<br>';
   
   if($y1*$y2 < 0)
   {
      $z = $a+$c;
      echo 'Інтервал ,в якому є зміна знаку:'.($a - 0.001).' - '.($z - 0.001).'<br>'; 
      $a = $a + $c;
      goto i;
   }
   else
    {
       $a = $a + $c;
       goto i;
    }
}
function f($x) 
{
    return 5*$x - 8*log($x) - 8;
}
