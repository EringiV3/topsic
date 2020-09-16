<?php

function getSinglValueFromOneLine(): string
{
  return trim(fgets(STDIN));
}

function main()
{
    $inputs = str_split(getSinglValueFromOneLine());
    foreach ($inputs as $key => $value) {
        if ($value !== "?") {
            echo $value . $value;
        }
    }
}

main();
