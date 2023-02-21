<?php
echo "The factorial numbers of 5<br>";
function fact($number) {
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;
    }
    return $factorial;
}

echo fact(5);

?>
