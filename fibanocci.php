<?php
echo "The fibanacci series from 0 to 10 <br>";
$n = 10;
$fib = array();
$fib[0] = 0;
$fib[1] = 1;
for ($i = 2; $i < $n; $i++) {
    $fib[$i] = $fib[$i-1] + $fib[$i-2];
}
for ($i = 0; $i < $n; $i++) {

    echo $fib[$i] . " ";
}
?>
