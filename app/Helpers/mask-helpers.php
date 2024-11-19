<?php

if (!function_exists('mask_account')) {

    function mask_account(string $stringToMask)
    {
        return Str::mask($stringToMask, '*', -9, 5);
    }

}

if (!function_exists('mask_value')) {

    function mask_value(string $stringToMask, string $maskChar = '*')
    {
        return Str::mask($stringToMask, $maskChar, 3);
    }

}
