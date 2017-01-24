<?php

function intCompare1(int $a, int $b) : int
{
  return ($a < $b) ? -1 : (($a > $b) ? 1 : 0);
}

function intCompare2(int $a, int $b) : int
{
  return $a <=> $b;
}

echo "\n intCompare1: \n";
echo intCompare1(2,1);

echo "\n intCompare2: \n";
echo intCompare1(2,1);