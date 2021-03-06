<?php

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

/**
 * 入力値が整数型かどうかを判定します
 * @param string $input 
 * @return bool
 */
function isInt(string $input): bool
{
  if ($input === '0') {
    return true;
  }
  return intval($input) !== 0;
}

function main()
{
  $inputs = getValuesFromMultiLine();
  $inputs = array_filter($inputs, function($input) {
    return !isInt($input);
  });
  $result = array_reduce($inputs, function ($carry, $input) {
    return $carry .= $input;
  }, '');
  echo $result;
}

main();
