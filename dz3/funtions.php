<?php

function task1()
{
    $order = simplexml_load_file('data.xml');
    foreach ($order->Address as $address) {
        print_r($address);
    }
}