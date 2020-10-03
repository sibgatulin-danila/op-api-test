<?php


namespace App\Http\Controllers;

use App\Models\RandomNumber;
use Illuminate\Http\Request;

class RandomNumberController
{
    public function index()
    {
        $arRandomNumbers = RandomNumber::all();
        return response()->json([
            'items' => $arRandomNumbers,
        ]);
    }

    public function create()
    {
        $obRandomNumber = new RandomNumber();
        $obRandomNumber->save();

        return response()->json([
            'item' => $obRandomNumber,
        ]);
    }

    public function get(Request $obRequest)
    {
        $obRequest->validate([
            'id' => 'required|numeric',
        ]);
        $nRandomNumberId = $obRequest->input('id');
        $obRandomNumber = RandomNumber::find($nRandomNumberId);
        if (!$obRandomNumber) {
            return abort(404);
        }

        return response()->json([
            'item' => $obRandomNumber,
        ]);
    }
}
