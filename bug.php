function foo(int ...$ints): int {
  return array_sum($ints);
}

$result = foo(1, 2, 3);
var_dump($result); // Output: int(6)