<?php

function getMultiValueFromOneLine(): array
{
  return explode(' ', trim(fgets(STDIN)));
}

function main()
{
    $inputs = getMultiValueFromOneLine();
    $h = $inputs[0];
    $d = $inputs[1];
    $time = $h + $d;
    if ($time >= 24) {
        $time = $time - 24;
    }
    echo $time;
}

main();
