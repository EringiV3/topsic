<?php

function getSinglValueFromOneLine(): string
{
  return trim(fgets(STDIN));
}

function main()
{
    $input = getSinglValueFromOneLine();
    $string = str_split($input);
    $state = 0;
    foreach ($string as $key => $value) {
        if ($value === "L") {
            $state += 270;
        }
        if ($value === "R") {
            $state += 90;
        }
    }
    $v = $state % 360;
    if ($v === 0) {
        echo "N";
    } elseif ($v === 90) {
        echo "E";
    } elseif ($v === 180) {
        echo "S";
    } elseif ($v === 270) {
        echo "W";
    }
}

main();
