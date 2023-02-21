<?php

$rows = 5;

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $rows - $i - 1; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 0; $k < $i + 1; $k++) {
        echo "*";
    }
    echo "<br>";
}

for ($i = $rows - 1; $i >= 0; $i--) {
    if ($i == 4) continue;
    for ($j = 0; $j < $rows - $i - 1; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 0; $k < $i + 1; $k++) {
        echo "*";
    }
    echo "<br>";
}

?>
