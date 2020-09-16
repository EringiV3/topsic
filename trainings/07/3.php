<?php

function getMultiValueFromOneLine(): array
{
  return explode(' ', trim(fgets(STDIN)));
}

function main()
{
    $inputs = getMultiValueFromOneLine();
    $rgb = [
        'R' => $inputs[0],
        'G' => $inputs[1],
        'B' => $inputs[2],
    ];
    asort($rgb);
    echo array_values(array_flip($rgb))[2];
}

main();
