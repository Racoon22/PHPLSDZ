<?php
namespace Base\Niva;

use Base\Car;
use Base\Transmission;

class Niva extends Car
{
    use Transmission;
    protected $transfer;

    public function __construct()
    {
        $this->transfer = 'auto';
    }


}

