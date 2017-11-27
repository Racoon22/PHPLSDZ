<?php
/**
 * Created by PhpStorm.
 * User: A
 * Date: 27.11.17
 * Time: 0:35
 */

namespace Base\Part;

class Engine
{
    protected $engineState;
    protected $engineHorsePower;
    public $engineTemp;

    public function engineCooling()
    {
        $this->engineTemp -= 10;
        echo 'Двигатель охлаждается<br>';
    }

    public function engineOn()
    {
        $this->engineState = 'on';
        echo 'Двигатель включен<br>';
    }

    public function engineOff()
    {
        $this->engineState = 'off';
        echo 'Двигатель выключен<br>';
    }

}