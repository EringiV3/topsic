<?php

function getValuesFromMultiLine(): array
{
  $result = [];
  while (strlen($input = trim(fgets(STDIN))) > 0) {
    $result[] = $input;
  }
  return $result;
}

function getVictoryCount(string $result): int
{
    $v = 0;
    foreach (str_split($result) as $key => $value) {
        if ($value === "o") {
            $v++;
        }
    }
    return $v;
}

function checkDraw($takahshi, $aoki)
{
    $takahshi = str_split($takahshi);
    $aoki = str_split($aoki);
    for ($i=0; $i < count($takahshi); $i++) { 
        if ($takahshi[$i] !== $aoki[$i]) {
            return $takahshi[$i] === "o" ? "First" : "Second";
        }
    }
    return null;
}

function main()
{
    $inputs = getValuesFromMultiLine();
    $n = $inputs[0];
    $takahshi = $inputs[1];
    $aoki = $inputs[2];
    $victoryCountTakahashi = getVictoryCount($takahshi);
    $victoryCountAoki = getVictoryCount($aoki);
    if ($victoryCountTakahashi > $victoryCountAoki) {
        echo "First";
    } elseif ($victoryCountTakahashi < $victoryCountAoki) {
        echo "Second";
    } elseif ($victoryCountTakahashi === $victoryCountAoki) {
        $value = checkDraw($takahshi, $aoki);
        if ($value !== null) {
            echo $value;
        } else {
            echo "Draw";
        }
    }
}

main();
