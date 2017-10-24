<?php

require('functions.php');

echo '<h1>Задание №1</h1>';
$arr1 = array('lorem ipsum', 'dolor sit amet', 'consectetur adipiscing elit', 'Integer in sollicitudin ipsum');
$str = task1($arr1, true);
echo $str;

echo '<h1>Задание №2</h1>';
$arr2 = array(2, 2, 0, 4, 5);
$str2 = '/';
echo task2($arr2, $str2);

echo '<h1>Задание №3</h1>';
echo task3('+', 1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

echo '<h1>Задание №4</h1>';
echo task4(8, 8);

echo '<h1>Задание №5</h1>';
echo task5("яфя    яфя яфя");

echo '<h1>Задание №6</h1>';
task6();

echo '<h1>Задание №7</h1>';
task7();

echo '<h1>Задание №7</h1>';
task8();


echo '<h1>Задание №9</h1>';
task9();

echo '<h1>Задание №10</h1>';
task10();
