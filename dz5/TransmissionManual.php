<?php
/**
 * Created by PhpStorm.
 * User: A
 * Date: 27.11.17
 * Time: 22:32
 */

namespace Base;


class TransmissionManual
{
    use Transmission;

    protected function transmissionForward($speed)
    {
        echo 'Включена передача вперед<br>';
        if ($speed > 20) {
            echo 'Коробка передач переключена на вторую передачу<br>';
        }
    }

}