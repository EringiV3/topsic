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
    $s1 = $inputs[0];
    $s2 = $inputs[1];
    $isSame = strtoupper($s1) === strtoupper($s2);
    echo $isSame ? 'YES' : 'NO';
}

main();
