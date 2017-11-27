<?php

namespace Base;

use Base\Part\Engine;

class Car
{
    protected $engine;
    public $transmission;

    public function __construct()
    {
        $this->engine = new Engine();
    }

    /**
     * @return mixed
     */
    public function move($length, $speed, $direction = null)
    {
        $distance = 0;
        $this->engine->engineOn();
        $this->transmission->transmissionON($direction, $speed);
        $this->ShowDistance($distance);

        for (; $distance < $length; $distance += 10) {
            if ($this->engine->engineTemp >= 90) {
                $this->engine->engineCooling();
                $this->ShowDistance($distance);
            }
            $this->engine->engineTemp += 5;
        }
        $this->engine->EngineOff();
        $this->ShowDistance($distance);
    }

    protected function showDistance($distance)
    {
        echo 'Пройдено метров ' . $distance . '<br><br>';
    }
}


