<?php

namespace Base;

class Car
{
    protected $engineState;
    protected $engineHorsePower;
    protected $engineTemp;
    protected $transfer;
    protected $direction;
    protected $distance = 0;


    /**
     * @return mixed
     */
    public function move($length, $speed, $direction = null)
    {
        $this->EngineOn();
        $this->transmissionON($speed, $direction);
        $this->ShowDistance();

        for (; $this->distance < $length; $this->distance += 10) {
            if ($this->engineTemp >= 90) {
                $this->EngineCooling();
                $this->ShowDistance();
            }
            $this->engineTemp += 5;
        }
        $this->EngineOff();
        $this->ShowDistance();
    }

    protected function engineCooling()
    {
        $this->engineTemp -= 10;
        echo 'Двигатель охлаждается<br>';
    }

    protected function engineOn()
    {
        $this->engineState = 'on';
        echo 'Двигатель включен<br>';
    }

    protected function engineOff()
    {
        $this->engineState = 'off';
        echo 'Двигатель выключен<br>';
    }

    protected function showDistance()
    {
        echo 'Пройдено метров ' . $this->distance . '<br><br>';
    }

    protected function transmissionON($speed, $direction)
    {
        if ($this->transfer == 'auto') {
            $this->transmissionAuto($direction);
        } else {
            $this->transmissionManual($direction, $speed);
        }
    }

    protected function transmissionAuto()
    {
        echo 'Включена автоматическая коробка передач<br>';
    }

    protected function transmissionManual($direction, $speed)
    {
        echo 'Включена механическая коробка передач<br>';
        if ($speed > 20) {
            echo 'Коробка передач переключена на вторую передачу<br>';
        }
    }

}


