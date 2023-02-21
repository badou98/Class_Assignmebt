<?php
$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }
    echo "<br>";
}

for ($i = 1; $i <= $rows; $i++) {
    for ($k = 5; $k >= $i; $k--) {
        if ($k == 5) continue;
        echo "* ";
    }
    echo "<br>";
}
?>
