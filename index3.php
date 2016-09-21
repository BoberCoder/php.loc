<meta charset="utf-8">

<?php

define(NEW_CONSTANT, 15); #Так вводиться нова константа.
        
class  User {
    public $username = "Евгений";
    
    public function GetUsername() {
        return $this->username;
    }
    
    function classname() {
        echo NEW_CONSTANT;
        echo "<br>".__CLASS__; #виводить назву класа в якому був викликаний цей метод
    }
}

class MyClass {
    const MY_CONSTANT = 44;
    
    public function get_const() {
        return self::MY_CONSTANT;
    }
}

class Test {
    var $name;
    var $surname;
    var $age;
}



$user = new User;
$class = new MyClass;


$username = $user->GetUsername();
echo $username."<br>";

$user->classname();

$class1 = $class->get_const();
echo $class1."<br>";

$testobject = new Test;

$testobject->name = "Євгеній";
$testobject->surname = "Римар";
$testobject->age = "19";

print_r($testobject);

$arifmetic = 2**21; #введення в степінь
$modus = 13%4; #виведення остачі від ділення

$i +=10; #або -= або *= або /=   використовується для присвоєння значення змінній попередньо виконавши із початковим значенням відповідну дію

echo "<br> i=".$i.'<br>';

#оператори порівняння - (<,>,<=,>=,==(рівно не строго, буде рівняти якщо число записано навіть як стрінг),===(рівняє тільки однакові типи даних),!=,<>,!==)
# Оператори декремента і інкремента ($i++(постінкремент),++$i(преінкремент),$i--(постдекремент),--$i(предекремент))


$a = true;
$b = false;

if ($a and !$b)
{   
    echo 'true';
}
 else 
{
    echo 'false';
}

#логічні оператори (!,and(&&),or(||),xor(виводить істинну коли яка небудь змінна є істинною, і хибу коли всі змінні мають істинну))
#строкові оператори (. , .=(по аналогії з +=,-=......))

$array1 = array (
    'key' => '1',
    'new' => '2'  
);

$array2 = array (
    'key' => '1',
    'new' => '2 ',
    //'plus' => '3'
);
/*
echo '<pre>';
print_r ($array1 + $array2);
echo '</pre>';
 */

echo '<br>';

if ($array1 === $array2)
{   
    echo 'true';
}
 else 
{
    echo 'false';
}