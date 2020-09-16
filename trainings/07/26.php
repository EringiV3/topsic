<?php

function getMultiValueFromOneLine(): array
{
  return explode(' ', trim(fgets(STDIN)));
}

function main()
{
    $p = 12;
    $inputs = getMultiValueFromOneLine();
    $s = $inputs[0];
    $n = $inputs[1];
    $piano = [
        'la' => 1,
        'laS' => 2,
        'si' => 3,
        'do' => 4,
        'doS' => 5,
        're' => 6,
        'reS' => 7,
        'mi' => 8,
        'fa' => 9,
        'faS' => 10,
        'sol' => 11,
        'solS' => 12,
    ];
    $result = ($n - 1) * $p + $piano[$s];
    echo $result;
}

main();
