<?php

function getValuesFromMultiLine(): array
{
  $result = [];
  while (strlen($input = trim(fgets(STDIN))) > 0) {
    $result[] = $input;
  }
  return $result;
}

function main()
{
    $inputs = getValuesFromMultiLine();
    $n = $inputs[0];
    $results = [];
    $a_n = explode(' ', $inputs[1]);
    for ($i=0; $i < $n; $i++) { 
      for ($j=0; $j < $n; $j++) { 
        $results[] = array_reduce(array_slice($a_n, $i, $j + 1), function ($carry, $v) {
          return $carry += $v;
        }, 0);
      }
    }
    asort($results);
    echo end($results);
}

main();
