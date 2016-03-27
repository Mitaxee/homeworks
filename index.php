<?php
  include ('homework.html');
 //http://devionity.com/ru/courses/php-fundamentals/php-using-printr
 //-------------------------------------------------------------------
 $counties = ['Britain', 'USA', 'Russia', 'Ukraine', 'Poland'];

 echo '<pre>';
 print_r($counties);
 echo '<pre>';
 //-------------------------------------------------------------------

 //http://devionity.com/ru/courses/php-fundamentals/php-associative-arrays
 //-------------------------------------------------------------------
 $associative_array = array('Britain' => 'London', 'USA' => 'Washington', 'Russia' => 'Moscow', 'Ukraine' => 'Kiev',
     'Poland' => 'Warsaw');

 echo '<pre>';
 print_r($associative_array);
 echo '<pre>';
 //-------------------------------------------------------------------

 //http://devionity.com/ru/courses/php-fundamentals/php-multidimentional-arrays
 //-------------------------------------------------------------------
 $book1 = array('style' => 'black', 'author' => 'Pupkin', 'name' => 'Highway to hell', 'cost' => '2500 UAN');
 $book2 = array('style' => 'black2', 'author' => 'Pupkin2', 'name' => 'Highway to hell2', 'cost' => '2500 UAN2');
 $book3 = array('style' => 'black3', 'author' => 'Pupkin3', 'name' => 'Highway to hell3', 'cost' => '2500 UAN3');

 $books = array($book1, $book2, $book3);

 echo '<pre>';
 print_r($books);
 echo '<pre>';
 //-------------------------------------------------------------------

 //http://devionity.com/ru/courses/php-fundamentals/php-constants
 //-------------------------------------------------------------------
 define('BRITAIN', 'Britain');
 define('USA', 'USA');
 define('UKRAINE', 'Ukraine');

 $counties = [BRITAIN, USA, UKRAINE];

 echo '<pre>';
 print_r($counties);
 echo '<pre>';
 //-------------------------------------------------------------------

 // ==================================================================
 // ==================================================================
 // ==================================================================
 // Выполнить задачи: https://github.com/oleg-shumar/php-academy.kiev.ua/tree/master/php_basics_tasks.
 // ==================================================================
 // ==================================================================
 // ==================================================================


 // № 1

 $name = 'Богдан';

 // № 2

 $age = 21;

 // № 3

 echo 'Меня зовут: ' . $name;
 echo '<br>';

 // № 4

 echo 'Мне ' . $age . ' год';
 echo '<br>';

 // № 5

 if ($age >= 18 && $age <= 59) {
     echo 'Вам еще работать и работать!';
 }
 echo '<br>';

 // № 6

 if ($age >= 18 && $age <= 59) {
     echo 'Вам еще работать и работать!';
 } else if ($age > 59) {
     echo 'Вам пора на пенсию!';
 }
 echo '<br>';

 // № 7

 if ($age >= 18 && $age <= 59) {
     echo 'Вам еще работать и работать!';
 } else if ($age > 59) {
     echo 'Вам пора на пенсию!';
 } else if ($age > 0 && $age <= 17) {
     echo 'Вам еще рано работать';
 }

 echo '<br>';

 // № 8

 if ($age >= 18 && $age <= 59) {
     echo 'Вам еще работать и работать!';
 } else if ($age > 59) {
     echo 'Вам пора на пенсию!';
 } else if ($age > 0 && $age <= 17) {
     echo 'Вам еще рано работать';
 } else if (!is_int($age) || $age < 0) {
     echo 'Неизвестный возраст';
 }

 echo '<br>';
 echo '<br>';


 // № 9

 $day = 4;

 // № 10, 11, 12

 switch ($day) {
     case $day >= 1 && $day <= 5:
         echo 'Это рабочий день';
         break;
     case $day >= 6 && $day <= 7:
         echo 'Это выходной день';
         break;
     case $day < 1 || $day > 7:
         echo 'Неизвестный день';
         break;
 }

 echo '<br>';
 echo '<br>';


 // № 13

 $s = 600;
 $t = 5;

 echo $s / $t . 'км\ч скорость автомобиля<br>';
 echo $s / $t * 2.77 . 'м\с скорость автомобиля<br>';
 echo '<br>';

 // № 14

 $foo = 'bar';
 $bar = 10;
 echo $$foo;

 // № 15
 echo '<br>';
 echo '<br>';


 $a = 3;
 $b = 5;
 $operator = '+';
 if($operator == '+') {
     echo $a + $b;
 }
 // № 16
 echo '<br>';
 echo '<br>';

 $a = 5;
 $b = 6;

 if($a > $b) {
     echo $a;
 } else {
     echo $b;
 }

 // № 17
 echo '<br>';
 echo '<br>';

 $a = '78';
 $b = 78;

 if($a == $b) {
     echo 'Равны';
 } else {
     echo 'Не равны';
 }

 // № 18
 echo '<br>';
 echo '<br>';

 if($a === $b) {
     echo 'Эквивалентны';
 } else {
     echo 'Не эквивалентны';
 }

 // № 19
 echo '<br>';
 echo '<br>';

 if(var_dump($a) == var_dump($b)) {
     echo 'Равны';
 } else {
     echo 'Не равны';
 }


 // № 20
 echo '<br>';
 echo '<br>';

 echo (boolean)20 .' Объяснение: т.к число > 0 оно автоматически приравнивается к значению true, true = 1 ';

 // №21
 echo '<br>';
 echo '<br>';

 echo (boolean)0 .' Объяснение: т.к число = 0 оно автоматически приравнивается к значению false, false = 0 ';

 // №22
 echo '<br>';
 echo '<br>';

 echo (boolean)-20 .' Объяснение: т.к число = -20 оно автоматически приравнивается к значению true, любое число
отличное от 0 - true';

 // №23

 echo 'Это сообщение выведено с помощью echo <br>';
 print 'Это сообщение выведено с помощью print <br>';
 printf('Это строка выведена с помощью printf');

 // № 24
 echo '<br>';
 echo '<br>';

 echo '// - первый вид комментария, /*bla-bla*/ - второй вид комментария, # - третий вид комментария';

 // № 25
 echo '<br>';
 echo '<br>';

 echo '< ?php - начало php конструкции, < ?= начало php конструкции и быстый вывод текста на страницу c помощью echo';

 // № 26

 define('DAYS_COUNT', 7);
 const MONTH_COUNT  = 12;

