<?php

function task1()
{
    $xml = simplexml_load_file('data.xml');
    $attr = $xml->attributes();
    echo 'Номер заказа: ' . $attr['PurchaseOrderNumber'] . ' Дата: ' . $attr['OrderDate'] . '<br><br>';
    foreach ($xml->Address as $key => $address) {
        $adrAtr = $address->attributes();

        echo 'Type: ' . $adrAtr['Type'] . '<br>';
        echo 'Name: ' . $address->Name . '<br>';
        echo 'Street: ' . $address->Street . '<br>';
        echo 'City: ' . $address->City . '<br>';
        echo 'State: ' . $address->State . '<br>';
        echo 'Zip: ' . $address->Zip . '<br>';
        echo 'Country: ' . $address->Country . '<br>';
        echo '<br>';
    }
    echo 'Delivery Notes: ' . $xml->DeliveryNotes . '<br><br>';

    foreach ($xml->Items->Item as $key => $items) {
        $adrAtr = $items->attributes();
        echo 'Part Number: ' . $adrAtr['PartNumber'] . '<br>';
        echo 'Product Name: ' . $items->ProductName . '<br>';
        echo 'Quantity: ' . $items->Quantity . '<br>';
        echo 'US Price: ' . $items->USPrice . '<br>';
        if (isset($items->Comment)) {
            echo 'Город: ' . $items->Comment . '<br>';
        }
        if (isset($items->ShipDate)) {
            echo 'Ship Date: ' . $items->ShipDate . '<br>';
        }
        echo '<br>';
    }
}

function task2()
{
    $arrayCategory = [
        'sport' => [
            'adidas' => [
                'first',
                'second'
            ],
            'reebok ',
            'asics'
        ],
        'classic',
        'casual'
    ];
    $jsonCategory = json_encode($arrayCategory);
    file_put_contents('output.json', $jsonCategory);
    chmod('output.json', 0777);

    $flag = rand(0, 1);
    if ($flag == 1) {
        $jsonFromOutput = json_decode(file_get_contents('output.json'), true);
        array_push($jsonFromOutput['sport'], "kids");
        array_push($jsonFromOutput['sport']['adidas'], "kids");
        array_push($jsonFromOutput, "kids");
        $jsonFromOutput2 = $jsonFromOutput;
        file_put_contents('output2.json', json_encode($jsonFromOutput2));
        chmod('output2.json', 0777);
    } else {
        $jsonFromOutput2 = json_decode(file_get_contents('output.json'), true);
        file_put_contents('output2.json', json_encode($jsonFromOutput2));
    }

    $arrFirst = json_decode(file_get_contents('output.json'), true);
    $arrSecond = json_decode(file_get_contents('output2.json'), true);

    if (checkArrDif($arrSecond, $arrFirst) != null) {
        showResult(checkArrDif($arrSecond, $arrFirst));
    }

}

function checkArrDif($arrSecond, $arrFirst, $diff = null)
{
    foreach ($arrSecond as $key => $item) {
        if (is_array($item)) {
            $changes = checkArrDif($arrSecond[$key], $arrFirst[$key], $diff);
            if (isset($changes)) {
                $diff[$key] = $changes;
            }
        } else {
            if (!isset($arrFirst[$key]) || $item !== $arrFirst[$key]) {
                $diff[$key] = $item;
            }
        }
    }
    return $diff;
}

function showResult($arr, $name = null)
{

    foreach ($arr as $key => $item) {
        if (isset($name)) {
            echo 'в массиве ' . $name . ' ';
        }
        if (is_array($item)) {
            showResult($item, $key);
        } else {
            echo ' добавлен ' . $item . '<br>';
        }
    }
}

function task3()
{
    $numRow = rand(50, 100);
    for ($i = 0; $i <= $numRow; $i++) {
        $arrCsv[][] = rand(1, 100);
    }
    $fp = fopen('file.csv', 'w');
    foreach ($arrCsv as $fields) {
        fputcsv($fp, $fields);
    }
    fclose($fp);

    $sumOdd = null;
    if (($handle = fopen("file.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000)) !== FALSE) {
            if ($data[0] % 2 == 0) {
                $sumOdd += $data[0];
            }
        }
        fclose($handle);
    }
    echo "Сумма всех четныйх чисел $sumOdd";

}


function task4()
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://en.wikipedia.org/w/api.php?action=query&titles=Main%20Page&prop=revisions&rvprop=content&format=json");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $output = curl_exec($ch);

    curl_close($ch);
    $arrFromJson = json_decode($output, true);
    echo 'Title: ';
    echo findItemInArr($arrFromJson, 'title').'<br>';
    echo 'PageID: ';
    echo findItemInArr($arrFromJson, 'pageid').'<br>';

}

function findItemInArr($arr, $item)
{
    foreach ($arr as $key => $var) {
        if (is_array($var)) {
            findItemInArr($var, $item);
        }
        if ($key === $item) {
            echo $var;
        }
    }
}