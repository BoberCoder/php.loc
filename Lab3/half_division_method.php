<?php

function f($x) 
{
    return 5*$x - 8*log($x) - 8;
}

$a = 3.6;
$b = 3.7;

$k = 1;
$eps = 0.001;
$z = 0;

do 
{   
    echo 'Крок №'.$k.'<br>';
    $k++;
    $c = ($a + $b)/2;
    echo 'x ='.$c.'<br><br>';
    
    if (f($a)*f($c)<0)
    {
        $b = $c;
    }
    else if (f($c)*f($b)<0)
    {
        $a = $c;
    }
    $e = abs($c - $z);
    $z = $c;
    
}
while ($e>=$eps);

