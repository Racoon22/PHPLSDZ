<?php
/**
 * Created by PhpStorm.
 * User: A
 * Date: 27.11.17
 * Time: 22:31
 */

namespace Base;


class TransmissionAuto
{
    use Transmission;

    public function transmissionForward()
    {
        echo 'Включена передача вперед<br>';
    }
}