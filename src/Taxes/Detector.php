<?php

namespace App\Taxes;


class Detector
{

    protected int $max;

    public function __construct($max)
    {
        $this->max = $max;
    }

    public function detect(int $amount)
    {
        if ($amount > 100) {
            return true;
        }
        return false;
    }
}
