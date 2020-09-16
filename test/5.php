<?php

function getValuesFromMultiLine(): array
{
  $result = [];
  while (strlen($input = trim(fgets(STDIN))) > 0) {
    $result[] = $input;
  }
  return $result;
}

function isUniqueArray($target_array)
{
    $unique_array = array_unique($target_array);
    if (count($unique_array) === count($target_array)) {
      return true;
    }
    else {
      return false;
    }
}

function main()
{
    $inputs = getValuesFromMultiLine();
    $n = $inputs[0];
    $a_n = explode(' ', $inputs[1]);
    echo isUniqueArray($a_n) ? 'YES' : 'NO';
}

main();
