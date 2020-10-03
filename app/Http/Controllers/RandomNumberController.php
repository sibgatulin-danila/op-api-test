<?php


namespace App\Http\Controllers;

use App\Models\RandomNumber;
use Illuminate\Http\Request;

class RandomNumberController
{
    public function create()
    {
        $obRandomNumber = new RandomNumber();
        $obRandomNumber->save();

        return response()->json([
            'item' => $obRandomNumber,
        ]);
    }

    public function get(RandomNumber $obRandomNumber)
    {
        if (!$obRandomNumber) {
            return abort(404);
        }
        return response()->json([
            'item' => $obRandomNumber,
        ]);
    }
}
