<?php

function getMultiValueFromOneLine(): array
{
  return explode(' ', trim(fgets(STDIN)));
}

function main()
{
    $inputs = getMultiValueFromOneLine();
    $x1 = $inputs[0];
    $y1 = $inputs[1];
    $x2 = $inputs[2];
    $y2 = $inputs[3];
    $a = $inputs[4];
    $b = $inputs[5];

    $xInSquare = $x1 < $a && $x2 > $a;
    $yInSquare = $y1 < $b && $y2 > $b;
    echo ($xInSquare && $yInSquare) ? 'YES' : 'NO';
}

main();
