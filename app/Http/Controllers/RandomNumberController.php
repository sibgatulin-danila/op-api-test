<?php


namespace App\Http\Controllers;

use App\Helpers\Response;
use App\Models\RandomNumber;
use Illuminate\Http\Request;

class RandomNumberController
{
    public function create()
    {
        $obRandomNumber = new RandomNumber();
        $obRandomNumber->save();

        return Response::success([
            'item' => $obRandomNumber,
        ]);
    }

    public function get($nRandomNumberId)
    {
        $obRandomNumber = RandomNumber::find($nRandomNumberId);
        if (!$obRandomNumber) {
            return Response::error(404, 'Random number not found');
        }
        return Response::success([
            'item' => $obRandomNumber,
        ]);
    }
}
