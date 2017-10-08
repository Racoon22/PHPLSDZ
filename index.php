<h2>Задание №1</h2>
<?php
$name = 'Александр';
$age = 26;
echo 'Меня зовут: ' . $name . '<br>';
echo 'Мне ' . $age  .' лет. <br>';
echo '!|\\/\’<br>';
?>

<h2>Задание №2</h2>
<?php
$picture = 80; //общее количество
$feltTipPen = 23; // фломастеры
$pencil = 40; // карандаши
$paint = $picture - $feltTipPen - $pencil;

echo $picture - $feltTipPen - $pencil . '<br>';
?>

<h2>Задание №3</h2>
<?php
define("ABC", 22, true);

if (ABC) {
    echo ABC;
}

?>

<h2>Задание №4</h2>
<?php

$age = rand(0, 100);

if ($age >= 18 && $age <= 65) {
    echo 'Вам еще работать и работать';
} elseif ($age > 65) {
    echo 'Вам пора на пенсию';
} else {
    echo 'Вам ещё рано работать';
}
?>
<h2>Задание №5</h2>

<?php
$day = rand(1, 10);

switch ($day) {
    case  $day >= 1 && $day <= 5:
        echo 'Это рабочий день';
        break;
    case  $day < 5 && $day <= 7:
        echo 'Это выходной день';
        break;
    default :
        echo 'Неизвестный день';
        break;

}

?>
<h2>Задание №6</h2>
<?php

$bmw = array(
    'type' => 'bmw',
    'model' => 'X5',
    'speed' => '120',
    'doors' => '5',
    'year' => '2015'
);
$toyota = array(
    'type' => 'toyota',
    'model' => 'camry',
    'speed' => '210',
    'doors' => '4',
    'year' => '2016'
);
$opel = array(
    'type' => 'opel',
    'model' => 'Opel Astra',
    'speed' => '180',
    'doors' => '5',
    'year' => '2015'
);


$cars[] = $bmw;
$cars[] = $toyota;
$cars[] = $opel;

foreach ($cars as $key => $car) {
    echo 'CAR '.$car['type'].'<br>'.
        $car['model'].' '.$car['speed'].' '.$car['doors'].' '.$car['year'].'<br><br>';
}
?>
<h2>Задание №7</h2>

<table>


<?php


$age = rand(0, 100);

    for ($i = 1; $i <= 10; $i++ ) {
        echo '<tr>';
        for ($j = 1; $j <= 10; $j++ ) {

            echo  (($j*$i)%2 == 0) ? '<td>('.$j*$i.')</td>' : '<td>['.$j*$i.']</td>';
        }
        echo '</tr>';
    }

?>
</table>



<h2>Задание №8</h2>
<?php

$str = '123 456 789 101112';
$arr = explode(' ', $str);
echo '<pre>';
print_r($arr);
$i = count($arr);
$arr2 = '';
while ($i >=0) {
    $arr2.=' '.$arr[$i--];
}
echo '</pre>';
echo $arr2;
?>


<h2>Задание №8.1</h2>
<?php

$str = '123 456 789 101112';
$arr = explode(' ', $str);
echo '<pre>';
print_r($arr);
$i = count($arr);
//$arr2 = array();
while (--$i >=0) {
    $arr3[] = $arr[$i];
}
echo '</pre>';
echo (implode(' ', $arr3));


//Создайте переменную $str, которой присвойте строковое значение, содержащее отдельные слова разделенные пробелом. Выведите строку на экран.
//Затем разбейте строку на массив с помощью функции explode. Выведите массив. Затем используя циклы while или do-while (на ваше усмотрение) развернуть массив и склеить в строку используя любой символ, кроме пробела. Вывести результат.
//Пример. $str=”123 456”. В результате должно быть “456 123”, то есть выведено наоборот.
