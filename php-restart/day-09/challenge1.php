<?php

function square($number) {
 return $number * $number;
}

function cube($cubNum) {
return $cubNum * $cubNum * $cubNum;
}

echo "Square of 3: " . square(3) . "\n";
echo "Square of 4: " . square(4) . "\n";

echo "Cube of 3: " . cube(3) . "\n";
echo "Cube of 8: " . cube(8) . "\n";

?>