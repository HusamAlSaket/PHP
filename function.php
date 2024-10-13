<?php
function isPrime($n) {
    if ($n < 2) {
        return false;
    }

    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

$n = 3;
if (isPrime($n)) {
    echo "$n is a prime number";
} else {
    echo "$n is not a prime number";
}

echo "<br>";
echo "<br>";

echo strrev("remove");

echo "<br>";
echo "<br>";


$x = "remove";

function checker($x) {

    if (is_string($x) && strtolower($x) === $x) {
        echo "your string is ok";
    } else {
        echo "your string is not okay";
    }
}
checker($x);

echo "<br>";
echo "<br>";

$a =12;
$b=10;
$temp =$a;
$a=$b;
$b=$temp;
echo "a =$a, b=$b";

echo "<br>";
echo "<br>";


$num = 407; 
$total = 0;
$x = $num;

while ($x != 0) {
    $rem = $x % 10; 
    $total = $total + $rem * $rem * $rem; 
    $x = (int)($x / 10); 
}

if ($num == $total) {
    echo "Yes, $num is an Armstrong number";
} else {
    echo "No, $num is not an Armstrong number";
}
echo "<br>";
echo "<br>";

function checkPalindrome ($string){
    if ($string == strrev($string)){
    echo "yes it's palindrome ";
    }else {
    echo "no it's not a palindrome";
    }

}

echo checkPalindrome("Eva, can I see bees in a cave?");

echo "<br>";
echo "<br>";

$array1=array(2,4,7,8,4);
$array2=array_unique($array1);
print_r($array2);






?>