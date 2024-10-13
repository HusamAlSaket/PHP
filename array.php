<?php
$colors = ['red', 'green', 'white'];

$paragraph = "The memory of that scene for me is like a frame of film forever frozen at that moment: the {$colors[0]} carpet, the {$colors[1]} lawn, the {$colors[2]} house, the leaden sky. The new president and his first lady. - Richard M. Nixon";

echo $paragraph;
// question 2

sort($colors);
echo "<ul>";
foreach ($colors as $color) {
    echo "<li>$color</li>";
}

// question 3 
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );
asort ($cities);
foreach ($cities as $city => $capital ){
    echo "the capital of $city is $capital.<br>";
}

$color = array(4=> "white", 6=>"green",11=>"red");
echo $color[4];
echo "<br>";

$array = [1, 2, 3, 4, 5];
$position = 4; 
$newItem = '$'; 
array_splice($array, $position - 1, 0, $newItem);


foreach ($array as $value) {
    echo $value . " ";
}
echo "<br>";

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort ($fruits);
foreach ($fruits as $fruit => $val ){
    echo " $fruit = $val.<br>";
}
echo "<br>";


function average ($temp){
    if (count($temp) === 0){
    return 0;
}
    $sum = array_sum($temp);
    $avg =$sum / count($temp);
    return $avg;

    
}
$temp = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];
echo "the average temperature is ". average($temp);
echo "<br>";
echo "<br>";

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
print_r(array_merge($array1,$array2));

echo "<br>";
echo "<br>";

$colors3 = array("red", "blue", "white", "yellow");
$upper_colors = array_map('strtoupper',$colors3);
print_r($upper_colors);
// method 2
echo "<br>";
echo "<br>";
foreach ($upper_colors as $x)

echo ($x). " ";
echo "<br>";
echo "<br>";
$lower_colors = array_map('strtolower',$colors3);
print_r($lower_colors);

echo "<br>";
echo "<br>";

echo implode(",", range(200, 250, 4)) . "\n";

// method 2 which should be the right thing 
echo "<br>";
echo "<br>";

for ($i = 200; $i <= 250; $i++) {
    if ($i % 4 == 0) {
        echo $i . " ";
    }
}
echo "<br>";
echo "<br>";

$words = array('abcd', 'abc', 'de', 'h', 'ij', 'g', 'wer');

$lengths = array_map('strlen', $words);

$shortest = min($lengths);
$longest = max($lengths);

echo "The shortest array length is $shortest.\n";
echo "The longest array length is $longest.\n";

echo "<br>";
echo "<br>";



function generateRandomNumbers($count) {
    $numbers = [];
    for ($i = 0; $i < $count; $i++) {
        $randomNum = rand(11, 20);
        $numbers[] = $randomNum;
    }
    return $numbers;
}

$randomNumbers = generateRandomNumbers(10);
print_r($randomNumbers);

echo "<br>";
echo "<br>";

function findLowestNonZero($array) {
    $filteredArray = array_filter($array, function($value) {
        return $value !== 0;
    });


    if (empty($filteredArray)) {
        return null; 
    }


    $minValue = min($filteredArray);
    return $minValue;
}

$array1 = array(2, 0, 10, 12, 6);
echo findLowestNonZero($array1); 

?>

