<?php

namespace App\Observers;

use App\Models\RandomNumber;

class RandomNumberObserver
{
    public function saving (RandomNumber $obRandomNumber)
    {
        if (empty($obRandomNumber->number)) {
            $obRandomNumber->number = rand();
        }
    }
}
