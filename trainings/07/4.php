<?php

function getMultiValueFromOneLine(): array
{
  return explode(' ', trim(fgets(STDIN)));
}

function main()
{
    $inputs = getMultiValueFromOneLine();
    $results = [];
    $results[] = $inputs[0] + $inputs[1] + $inputs[2];
    $results[] = $inputs[0] * $inputs[1] + $inputs[2];
    $results[] = $inputs[0] + $inputs[1] * $inputs[2];
    $results[] = $inputs[0] * $inputs[1] * $inputs[2];
    asort($results);
    echo end($results);
}

main();
