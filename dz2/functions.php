<?php

function task1($arr, $flag = false)
{
    if ($flag == true) {
        return implode(' ', $arr);
    }
    foreach ($arr as $item) {
        echo "<p>$item</p>";
    }

}

function task2($arr, $str)
{
    if (!is_array($arr)) {
        return 'Передан не массив';
    }
    $result = null;
    switch ($str) {
        case '+':
            foreach ($arr as $key => $item) {
                if (!is_int($item)) {
                    return 'Передано не число';
                }
                if ($key == 0) {
                    $result .= $item;
                } else {
                    $result += $item;
                }
            }
            break;
        case '-':
            foreach ($arr as $key => $item) {
                if (!is_int($item)) {
                    return 'Передано не число';
                }
                if ($key == 0) {
                    $result .= $item;
                } else {
                    $result -= $item;
                }
            }
            break;
        case '*':
            foreach ($arr as $key => $item) {
                if (!is_int($item)) {
                    return 'Передано не число';
                }
                if ($key == 0) {
                    $result .= $item;
                } else {
                    $result *= $item;
                }
            }
            break;
        case '/':
            foreach ($arr as $key => $item) {
                if (!is_int($item)) {
                    return 'Передано не число';
                }
                if ($item == 0) {
                    return 'Только Чак Норис может делить на ноль!';
                }
                if ($key == 0) {
                    $result .= $item;
                } else {
                    $result /= $item;
                }
            }
            break;
        case '%':
            foreach ($arr as $key => $item) {
                if (!is_int($item)) {
                    return 'Передано не число';
                }
                if ($item == 0) {
                    return 'Только Чак Норис может делить на ноль!';
                }
                if ($key == 0) {
                    $result .= $item;
                } else {
                    $result /= $item;
                }
            }
            break;
        case '**':
            foreach ($arr as $key => $item) {
                if (!is_int($item)) {
                    return 'Передано не число';
                }
                if ($key == 0) {
                    $result .= $item;
                } else {
                    $result **= $item;
                }
            }
            break;
        default:
            $error = 'Этот калькулятор глуповат, чтобы вычислять интегралы, дифуры 
                          и расчитывать траекторию посадки ракет на Юпитер';
    }
    echo isset($error) ? $error : $result;
}

function task3()
{
    $arg = func_get_args();
    $result = null;
    $str = '';
    $num = func_num_args() - 1;

    switch ($arg[0]) {
        case '+':
            for ($i = 1; $i <= $num; $i++) {
                if (!is_int($arg[$i])) {
                    return 'передано не число';
                }
                if ($i == $num) {
                    $str .= $arg[$i] . '=';
                } else {
                    $str .= $arg[$i] . $arg[0];
                }
                $result += $arg[$i];
            }
            break;
        case '-':
            for ($i = 1; $i <= $num; $i++) {
                if (!is_int($arg[$i])) {
                    return 'передано не число';
                }
                if ($i == $num) {
                    $str .= $arg[$i] . '=';
                } else {
                    $str .= $arg[$i] . $arg[0];
                }
                $result -= $arg[$i];
            }
            break;
        case '*':
            for ($i = 1; $i <= $num; $i++) {
                if (!is_int($arg[$i])) {
                    return 'передано не число';
                }
                if ($i == $num) {
                    $str .= $arg[$i] . '=';
                } else {
                    $str .= $arg[$i] . $arg[0];
                }
                $result *= $arg[$i];
            }
            break;
        case '/':
            for ($i = 1; $i <= $num; $i++) {
                if (!is_int($arg[$i])) {
                    return 'передано не число';
                }
                if ($i == $num) {
                    $str .= $arg[$i] . '=';
                } else {
                    $str .= $arg[$i] . $arg[0];
                }
                $result /= $arg[$i];
            }
            break;
        case '%':
            for ($i = 1; $i <= $num; $i++) {
                if (!is_int($arg[$i])) {
                    return 'передано не число';
                }
                if ($i == $num) {
                    $str .= $arg[$i] . '=';
                } else {
                    $str .= $arg[$i] . $arg[0];
                }
                $result /= $arg[$i];
            }
            break;
        case '**':
            for ($i = 1; $i <= $num; $i++) {
                if (!is_int($arg[$i])) {
                    return 'передано не число';
                }
                if ($i == $num) {
                    $str .= $arg[$i] . '=';
                } else {
                    $str .= $arg[$i] . $arg[0];
                }
                $result **= $arg[$i];
            }
            break;
        default:
            die('Этот калькулятор глуповат, чтобы вычислять интегралы, дифуры
                          и расчитывать траекторию посадки ракет на Юпитер');
    }
return $str . $result . "<br>";
}

function task4()
{
    $num = func_num_args();
    if ($num !== 2) {
        return 'передано не 2 параметра';
    }
    $arg = func_get_args();

    if (!is_int($arg[0]) || !is_int($arg[1])) {
        return 'переданы не целые числа';
    }
    echo '<table>';
    for ($i = 1; $i <= $arg[0]; $i++) {
        echo '<tr>';
        for ($j = 1; $j <= $arg[1]; $j++) {

            echo '<td>' . $j * $i . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

function task5($str)
{
    if (isPolindromm($str)) {
        return "Строка полиндромм";
    }
    return "Строка не полиндромм";
}

function isPolindromm($str)
{
    $strlower = mb_strtolower($str); // переводим все в нижний регистр, чтобы игнорировать регистр
    $resultStr = preg_replace('# #', '', $strlower);  // убираем все пробелы в строке
    $lenth = mb_strlen($resultStr);

    $strRev = '';
    for ($i = $lenth; $i > 0;) {
        $strRev .= mb_substr($resultStr, --$i, 1);
    }
    if ($resultStr == $strRev) {
        return true;
    }
    return false;
}

function task6()
{
    echo date('d.m.Y H:i') . '<br>';
    echo strtotime('24.02.2016 00:00:00');
}

function task7()
{
    $str = 'Карл у Клары украл Кораллы';
    echo str_replace('К', '', $str) . '<br>';
    $str2 = 'Две бутылки лимонада, Две буханки хлеба, Две селедки';
    echo str_replace('Две', 'Три', $str2, $countRepl) . '<br>';
    echo $countRepl;
}

function task8()
{
    $str = 'RX packets:950381 errors:0 dropped:0 overruns:0 frame:0.';
    preg_match('#packets:(950381)#', $str, $matches);
    if ($matches[1] > 1000) {
        echo 'сеть есть';
    }
}


function task9()
{
    echo file_get_contents('test.txt') . '<br>';

    $file = fopen('test.txt', 'r+');
    $filesize = filesize('test.txt');
    echo fread($file, $filesize);
    fclose($file);
}

function task10()
{
    //Долгий путь
    $file = fopen('anothertest.txt', 'a+b');
    fwrite($file, 'Hello again!');
    fclose($file);
    chmod('anothertest.txt', 0777);

    $file = fopen('anothertest.txt', 'r+');
    $filesize = filesize('anothertest.txt');
    echo fread($file, $filesize);
    fclose($file);

    // Быстрый путь
    file_put_contents('anothertest2.txt', 'Hello again!', FILE_APPEND);
    chmod('anothertest2.txt', 0777);
    echo file_get_contents('anothertest2.txt') . '<br>';
}