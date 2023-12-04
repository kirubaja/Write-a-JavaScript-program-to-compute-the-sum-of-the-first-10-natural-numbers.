<?php
function findSum($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}
for ($n = 1; $n <= 10; $n++) {
    echo "Sum of the  $n natural numbers: " . findSum($n) . "<br>";
}
?>
