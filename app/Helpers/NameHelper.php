<?php

namespace App\Helpers;

class NameHelper
{
    public static function normalize(string $value): string
    {
        $value = trim($value);
        $value = mb_strtolower($value, 'UTF-8');
        $value = mb_convert_case($value, MB_CASE_TITLE, 'UTF-8');
        $value = preg_replace_callback(
            '/\b(Mc|Mac|0\')([a-z])/i',
            fn ($m) => $m[1].strtoupper($m[2]),
            $value
        );
        $value = preg_replace_callback(
            '/\b(ii|iii|iv|v|vi|vii|viii|ix|x)\b/i',
            fn ($m) => strtoupper($m[1]),
            $value
        );

        return $value;
    }
}
