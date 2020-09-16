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
    list($n, $k) = explode(' ', $inputs[0]);
    $a_n = explode(' ', $inputs[1]);
    $timeCount = 0;
    foreach ($a_n as $key => $value) {
        if ($k < $value) {
            $timeCount += ($value - $k);
        }
    }
    echo $timeCount;
}

main();
