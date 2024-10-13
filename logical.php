<?php
function LeapYear($year){
    if(($year % 4 == 0 && $year % 100 != 0) || 
    ($year % 400 == 0)){
        return true;
    }else{
        return false;
    }
}
$year=2013;
if (LeapYear($year)){
echo "this year is a leap year";
}else{
    echo "this year is not a leap year";
}
echo "<br>";
echo "<br>";

function season ($temp){
    if($temp < 20){


    echo "it's winter time";
}else{
    echo "it's summer time";
}
}
$temp = 27;
echo season ($temp);

echo "<br>";
echo "<br>";

$firstInteger = 2;
$secondInteger = 2;
$sum = $firstInteger + $secondInteger;

if ($firstInteger == $secondInteger) {
    $sum = $sum * 3;
} 

echo $sum;

echo "<br>";
echo "<br>";

$thirdInteger = 10;
$fourthInteger = 10;
$sum2 = $thirdInteger + $fourthInteger;
if($sum2 == 30){
    echo $sum;
} else{
    echo "false";
}

echo "<br>";
echo "<br>";

$num =50;

if ($num >= 20 && $num <=50){
echo "true";
}else{
    echo "false";
}

echo "<br>";
echo "<br>";


$array =[1,5,9];
$array1 =count($array);

if ($array1 != 0) {
$max = max($array);
echo $max;
}

echo "<br>";
echo "<br>";


function calculateElectricityBill($units) {
    $bill = 0;

    if ($units <= 50) {
        $bill = $units * 2.50;
    } else if ($units <= 150) {
        $bill = (50 * 2.50) + (($units - 50) * 5.00);
    } else if ($units <= 250) {
        $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
    } else {
        $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
    }

    return $bill;
}

$units = 275;
echo "The electricity bill for $units units is: " . calculateElectricityBill($units) . " JOD";

echo "<br>";
echo "<br>";


if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operation = $_POST['operation'];

    function add($a, $b) {
        return $a + $b;
    }

    function subtract($a, $b) {
        return $a - $b;
    }

    function multiply($a, $b) {
        return $a * $b;
    }

    function divide($a, $b) {
        if ($b == 0) {
            return "Division by zero error!";
        }
        return $a / $b;
    }

    switch ($operation) {
        case "add":
            $result = add($num1, $num2);
            break;
        case "subtract":
            $result = subtract($num1, $num2);
            break;
        case "multiply":
            $result = multiply($num1, $num2);
            break;
        case "divide":
            $result = divide($num1, $num2);
            break;
        default:
            $result = "Invalid operation";
            break;
    }

    echo "<h3>Result: $result</h3>";
}

// echo "<br>";
// echo "<br>";

$age =15;
if($age <18){
    echo "is no eligible to vote";
}

echo "<br>";
echo "<br>";

$number1 =-60;
if($number1 < 0){
    echo "Negative";
}
elseif($number1 == 0){
    echo "0";
}
else{
    echo "positive";
}

echo "<br>";
echo "<br>";

$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
$average = array_sum($scores) / count($scores);

if ($average < 60) {
    $grade = 'F';
} elseif ($average < 70) {
    $grade = 'D';
} elseif ($average < 80) {
    $grade = 'C';
} elseif ($average < 90) {
    $grade = 'B';
} else {
    $grade = 'A';
}

echo "Average Score: $average\n";
echo "Grade: $grade\n"













?>