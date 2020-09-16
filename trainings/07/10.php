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
    $g_n = explode(' ', $inputs[1]);
    asort($g_n);
    $results = [];
    for ($i=0; $i < $n; $i++) { 
        $v = array_pop($g_n);
        $results[] = (0 === $i % 2) ? $v : null;
    }
    $value = 0;
    foreach ($results as $key => $result) {
        if ($result !== null) {
            $value += $result;
        }
    }
    echo $value;
}

main();
