function foo(int ...$ints): int {
  if (empty($ints)) {
    return 0; // Handle empty array case
  }
  return array_sum($ints);
}

$result = foo(1, 2, 3);
var_dump($result); // Output: int(6)

$result = foo();
var_dump($result); // Output: int(0) 