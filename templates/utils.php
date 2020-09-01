<?php

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

/**
 * 1行から1つの値を取得します
 * @return string
 */
function getSinglValueFromOneLine(): string
{
  return trim(fgets(STDIN));
}

/**
 * 1行から複数の値を取得します
 * @return string[]
 */
function getMultiValueFromOneLine(): array
{
  return explode(' ', trim(fgets(STDIN)));
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
