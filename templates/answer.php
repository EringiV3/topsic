<?php

/**
 * 1行から1つの値を取得します
 * @return string
 */
function getSinglValueFromOneLine(): string
{
  return trim(fgets(STDIN));
}

function main()
{
  $input = getSinglValueFromOneLine();
  echo $input * 25;
}

main();
