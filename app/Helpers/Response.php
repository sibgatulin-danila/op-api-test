<?php


namespace App\Helpers;


class Response
{
    public static function success($arData = [])
    {
        $arResponseData = array_merge($arData, ['success' => true, 'error' => false]);
        return response()->json($arResponseData);
    }

    public static function error($nCode = 400, $sMessage = '')
    {
        return response()->json(['code' => $nCode, 'message' => $sMessage, 'success' => false, 'error' => true]);
    }
}
