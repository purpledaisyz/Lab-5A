//function to calculate area of a rectangle

<?php
function calculateArea($width, $height){
    $area = $width * $height;
    return $area;
}

$width = 5;
$height = 8;

$area = calculateArea($width, $height);

echo "The area of a rectangle with width of " . $width . " and " . $height . " is " . $area;

?>
