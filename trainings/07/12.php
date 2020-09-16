<?php

function getSinglValueFromOneLine(): string
{
  return trim(fgets(STDIN));
}

function getDivisor(int $number): array
{
    $results = [];
    for ($i=1; $i <= $number; $i++) { 
        if ($number % $i === 0) {
            $results[] = $i;
        }
    }
    return $results;
}

function array_flatten(array $arr): array
{
    $v = [];
    array_walk_recursive($arr, function($e)use(&$v){$v[] = $e;});
    return $v;
}

function main()
{
    $n = getSinglValueFromOneLine();
    $results = [];
    for ($i=1; $i <= $n; $i++) { 
        $results[] = getDivisor($i);
    }
    $results = array_flatten($results);
    $value = 0;
    foreach ($results as $key => $result) {
        $value += $result;
    }
    echo $value;
}

main();
