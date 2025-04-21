<?php
function fibonacciIterative($count) {
    $fib = [0, 1];
    for ($i = 2; $i < $count; $i++) {
        $fib[$i] = $fib[$i-1] + $fib[$i-2];
    }
    return array_slice($fib, 0, $count);
}

echo "<pre>";
echo "================================\n";
echo "        Fibonacci Sequence       \n";
echo "================================\n\n";

echo "First 15 Fibonacci Numbers:\n";
echo "-------------------------------\n";
echo implode(' ', fibonacciIterative(15));

echo "\n\nExecution Summary:\n";
echo "-------------------------------\n";
echo "- Algorithm: Iterative Fibonacci\n";
echo "- Time Complexity: O(n) (efficient)\n";
echo "- Space Complexity: O(n)\n";
echo "- Note: Optimal approach for most use cases\n";
echo "</pre>";
?>