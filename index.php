<!DOCTYPE html>
<html>
    <head>
       <meta charset="utf-8"> 
       <link rel="stylesheet" href="mainstyle.css">
    </head>
    <body>
        <div id="page">
            <div id="header">
                <div id="menu">
                    <ul>
                        <li><a href="index.php">Головна</a></li>
                        <li><a href="output&lab.php">Виведення & Лабораторна</a></li>
                        <li><a href="index3.php">Сторінка 3</a></li>                      
                    </ul>
                </div>
            </div>
            <hr>
            <?php

            error_reporting(E_ALL);

            $one = 'Один';
            $two = 'Два';
            $concat = $one.' плюс '.$two;

            echo '<h1>Привіт світ!</h1>';
            echo $concat,'<br>';

            //коментар на одну строчку
            #коментар на одну строчку
            //конкатенація виконується ключовим символом "."

            function test() {
                global $concat;
                static $digit=0; // static - при першому виклиці записує змінну в пам'ять і вона не буде перевизначена при повторному виклиці.
                echo $concat.' ';
                $digit++;
                echo $digit,'<br>';
            }
            
            //При визначені змінних в основній програмі вони записуються в глобальний масив $GLOBALS.

           // echo '<pre>';//Для виведення інформації так як вона записана в масиві.
           // print_r($GLOBALS);//Так виводиться масив $GLOBALS.

            ?>
        </div>
    </body>
</html>