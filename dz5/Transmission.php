<?php

namespace Base;

trait Transmission
{
    public function transmissionON($direction, $speed)
    {
        if ($direction === 'вперед') {
            $this->transmissionForward($speed);
        } else {
            $this->transmissionBack();
        }
    }

    public function transmissionBack()
    {
        echo 'Включена передача назад<br>';
    }
}