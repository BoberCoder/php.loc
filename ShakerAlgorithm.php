<?php

define(X,100);
        
for ($i = 0; $i<=X; $i++) 
{
    //$A[$i] = 100 - $i;
      $A[$i] = rand(0,100);
    //  echo $A[$i].' ';
}

$k = intval(X/2);

for ($i = 0; $i<=$k; $i++) 
{
    if($A[$i]>$A[$i+1]) 
    {
        $min = $i + 1;
        $max = $i;
    }
    
    else 
    {
        $min = $i;
        $max= $i + 1;
    }
    
    for ($j = $i+2;$j<=X-$i+1;$j++) 
    {
        if($A[$j]>$A[$max])
        {
            $max = $j;
        }
        
        elseif ($A[$j]<$A[$min]) 
        {
            $min = $j;
        }
        
    $key = $A[$i];
    $A[$i] = $A[$min];
    $A[$min] = $key;
    
    if($max == $i) 
    {
        $max = $min;
        $key = $A[X-$i+1];
        $A[X-$i+1] = $A[$max];
        $A[$max] = $key;
    }
    
    }
}

for ($i = 0; $i<=X; $i++) 
{
    //$A[$i] = 100 - $i;
    //$A[$i] = rand(0,100);
      echo $A[$i].' ';
}