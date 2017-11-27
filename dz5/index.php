<?php
require('Car.php');
require('Transmission.php');
require('TransmissionManual.php');
require('TransmissionAuto.php');
require('Engine.php');
require('Niva.php');

use Base\Niva\Niva;

$car = new Niva();
$car->move(600, 22, 'вперед');
