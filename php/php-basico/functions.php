<?php 

function calculator($num1, $num2, $op) {
  if ($op == "+") { return $num1 + $num2; } 
  elseif ($op == "-") { return $num1 - $num2; } 
  elseif ($op == "*") { return $num1 * $num2; } 
  elseif ($op == "/") { return $num1 / $num2; }
  else { return 'Error! Não é um operador'; }
} 

echo calculator(2, 5, "+");
?>