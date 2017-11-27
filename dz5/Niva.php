<?php

namespace Base\Niva;

use Base\Car;
use Base\TransmissionAuto;
use Base\TransmissionManual;

class Niva extends Car
{
    public function __construct()
    {
        parent::__construct();
        $this->transmission = new TransmissionManual();

    }


}

