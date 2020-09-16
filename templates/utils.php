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

/**
 * 多次元配列を１次元に平坦化します
 * @param array $arr
 * @return array 
 */
function array_flatten(array $arr): array
{
    $v = [];
    array_walk_recursive($arr, function($e)use(&$v){$v[] = $e;});
    return $v;
}

/**
 * 引数で受け取った数字の約数を配列で返します
 * @param int $number
 * @return array
 */
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
