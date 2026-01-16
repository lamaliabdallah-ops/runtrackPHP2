<?php
function leetSpeak(string $str)
{
    $leet = [
        'a' => '4',
        'e' => '3',
        'i' => '1',
        'o' => '0',
        's' => '5',
        't' => '7'
    ];

    return str_ireplace(array_keys($leet), array_values($leet), $str);
}

echo leetSpeak("LaPlateforme");
?>