<?php

function reverse($input) {
    $inputArray = str_split($input);
    $left = 0;
    $right = count($inputArray) - 1;
    while ($left < $right) {
        $temp = $inputArray[$left];
        $inputArray[$left] = $inputArray[$right];
        $inputArray[$right] = $temp;
        $left++;
        $right--;
    }
    return implode($inputArray);
}


$result = reverse("I Love python");
echo "<br>You've entered 'I Love Python' the reverse of it is: " . $result;

?>
