<?php

function main()
{
  $memberCount = getSinglValueFromOneLine();
  $inputs = getValuesFromMultiLine();
  $result = [];
  foreach ($inputs as $team) {
    $powerCount = 0;
    foreach (explode(' ', $team) as $power) {
      $powerCount += intval($power);
    }
    $result[] = $powerCount;
  }
  list($teamAPower, $teamBPower) = $result;
  if ($teamAPower === $teamBPower) {
    echo 'DRAW';
  } elseif ($teamAPower >= $teamBPower) {
    echo 'A';
  } elseif ($teamAPower <= $teamBPower) {
    echo 'B';
  }
}

/**
 * 1行から1つの値を取得します
 * @return string
 */
function getSinglValueFromOneLine(): string
{
  return trim(fgets(STDIN));
}

/**
 * 複数行の入力値から行ごとのリストにして返します
 * 例）STDIN: 「1 \n 2 3\n」 
 * @return string[] $result 
 * 例）[0 => '1', 1 => '2 3']
 */
function getValuesFromMultiLine(): array
{
  $result = [];
  while (strlen($input = trim(fgets(STDIN))) > 0) {
    $result[] = $input;
  }
  return $result;
}

main();
