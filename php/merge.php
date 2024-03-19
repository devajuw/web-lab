<?php

$a = [1, 3, 5, 7, 9];
$b = [2, 4, 6, 8, 10];
$c = [];

// Iterate through both arrays simultaneously
$i = 0;
$j = 0;

// Loop until both arrays are exhausted
while ($i < count($a) && $j < count($b)) {
  // Add the smaller element to the merged array
  if ($a[$i] < $b[$j]) {
    $c[] = $a[$i];
    $i++;
  } else {
    $c[] = $b[$j];
    $j++;
  }
}

// Add remaining elements from either array (if any)
for (; $i < count($a); $i++) {
  $c[] = $a[$i];
}
for (; $j < count($b); $j++) {
  $c[] = $b[$j];
}

echo "Merged array: ";
print_r($c); // Output: Merged array: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 [6] => 7 [7] => 8 [8] => 9 [9] => 10 )
