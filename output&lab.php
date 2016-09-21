<meta charset="utf-8">

<?php

    error_reporting(E_ALL);

    $var_1 = 10;
    $var_2 = 20;
    $var = 'var_1';
    $array = array('key' => 'Содержимое параграфа', 'lock' => 'just word', 'choose' => 'good');

    echo ("${$var}  <br>"); // Виводить значення змінної, назва якої знаходиться в змінній var(в даному випадку).
    
    echo 'Провірка чи працюватиме ця сторінка','<br>';

    echo "Виводимо значення змінної:", $var_1," ",$var_2,"<br>";    //" " - так вставляється пробіл....
    
    echo ("Так виводиться текст який складається з багатьох слів об'єднаних дужкою. $var_1, $var_2 <br>");
    
    //Змінні не підставляються в одинарні лапки '', якщо потрібно підставити в одинарні потрібно використати конкатенацію.
    
    echo ("Виведемо значення массиву по ключу lock: {$array['lock']} <br>");
    
    print "Значення масиву по ключу choose: {$array['choose']}"; //print може використовуватись також як функція, яка повертає значення одиниці.
    
?>

<a href="index.php">
    <?php
        echo '<h1>Посилання на головну</h1>';
    ?>
</a>


<p>
     <?=
        $array['key'] //Так можна вставити коротке значення змінної всередині HTML-розмітки..
     ?>
</p> 

<!--<?php

for ($i = 0; $i<5; $i++) {
    for ($j=0; $j<5; $j++) {
       $array1[$i][$j] = rand(1,9); 
       $array2[$i][$j] = rand(1,9); 
    }
    
}

for ($i = 0; $i<5; $i++) {
    for ($j = 0; $j<5; $j++) {
      echo $array1[$i][$j].'  ';
    }
    echo '<br>';
}

echo '<br>';

for ($i = 0; $i<5; $i++) {
    for ($j = 0; $j<5; $j++) {
      echo $array2[$i][$j].'  ';
    }
    echo '<br>';
}

echo '<br>';

for ($i = 0; $i<5; $i++) 
{
    for ($j=0; $j<5; $j++) 
    {
         if (!isset($array3[$i][$j]))
            {
                $array3[$i][$j] = null;
            } 
        for ($k=0; $k<5; $k++) 
        {
            $array3[$i][$j] += $array1[$i][$k] * $array2[$k][$j];
        }
        echo $array3[$i][$j].' ';
    }
      echo '<br>';
}
?>
<?php
print_r($array1);
print_r($array2);
print_r($array3);
?>
</pre>-->

<?php

for ($i = 0; $i<=10000; $i++) 
{
    $A[$i] = 10000 - $i;
      //$A[$i] = rand(0,100);
      // echo $A[$i].' ';
}

echo '<br>';

$start = microtime(TRUE);

for ($j=1; $j<10000; $j++){
    {
       $key = $A[$j];
       $i = $j-1;
       while(($i>=0)and($A[$i]>$key))
       {
          $A[$i+1] = $A[$i];
          $i--;
       }
       $A[$i+1] =$key;
    }
}

$time = intval((microtime(TRUE) - $start) * 1000);
echo 'Час виконання скріпта =  '.$time;
?>

<!--<pre>
<?php print_r($A)?>
</pre>-->