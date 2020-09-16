<?php

function getMultiValueFromOneLine(): array
{
  return explode(' ', trim(fgets(STDIN)));
}


function main()
{
    list($a, $b) = getMultiValueFromOneLine();
    $ue = $a;
    $shita = 7 - $ue;
    $south = $b;
    $north = 7 - $south;

    $dice = [
        'ue' => $ue,
        'shita' => $shita,
        'south' => $south,
        'north' => $north,
        'east' => null,
        'west' => null
    ];

    $dicemap = [
        'ue' => 1,
        'shita' => 6,
        'south' => 2,
        'north' => 5,
        'east' => 3,
        'west' => 4
    ];

    $map = array_flip($dicemap);
    foreach ($dice as $key => $value) {
        #
    }
    
}

main();
