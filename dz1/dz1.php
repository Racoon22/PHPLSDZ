<h2>Задание №1</h2>
<?php
$name = 'Александр';
$age = 26;
echo 'Меня зовут: ' . $name . '<br>';
echo 'Мне ' . $age . ' лет. <br>';
echo '"!|\\/"\'\\<br>';
?>

<h2>Задание №2</h2>
<?php
$picture = 80; //общее количество
$feltTipPen = 23; // фломастеры
$pencil = 40; // карандаши
$paint = $picture - $feltTipPen - $pencil;

echo "Дано: <br>
 Всего рисунков: $picture шт<br>
 Рисунков фломастерами: $feltTipPen  шт<br>
 Рисунков карандашами: $pencil   шт<br>
 Найти: <br>
 Сколько рисунков, выполненные красками, на школьной выставке? <br>
 Решение: <br>
 Рисунки красками = общее количество рисунков - рисунки фломастерами - рисунки карандашами <br>
 $picture - $feltTipPen - $pencil = $paint";


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
    case $day >= 1 && $day <= 5:
        echo 'Это рабочий день';
        break;
    case $day < 5 && $day <= 7:
        echo 'Это выходной день';
        break;
    default:
        echo 'Неизвестный день';
        break;

}

?>
<h2>Задание №6</h2>
<?php

$bmw = array(
    'model' => 'X5',
    'speed' => '120',
    'doors' => '5',
    'year' => '2015'
);
$toyota = array(
    'model' => 'camry',
    'speed' => '210',
    'doors' => '4',
    'year' => '2016'
);
$opel = array(
    'model' => 'Opel Astra',
    'speed' => '180',
    'doors' => '5',
    'year' => '2015'
);


$cars = array('bmw', 'toyota', 'opel');

foreach ($cars as $key => $car) {
    echo "CAR $car<br>";
    echo "{$$car['model']} {$$car['speed']} {$$car['doors']} {$$car['year']}<br><br>";
}
?>
<h2>Задание №7</h2>

<table>


    <?php


    $age = rand(0, 100);

    for ($i = 1; $i <= 10; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= 10; $j++) {
            if ($j% 2 == 0 && $i% 2 == 0) {
                echo '<td>(' . $j * $i . ')</td>';
            } elseif ($j% 2 !== 0 && $i% 2 !== 0) {
                echo '<td>[' . $j * $i . ']</td>';
            } else {
                echo '<td>' . $j * $i . '</td>';
            }
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
$arr3 = array();
while (--$i >= 0) {
    $arr3[] = $arr[$i];
}
echo '</pre>';
echo(implode('|', $arr3));

