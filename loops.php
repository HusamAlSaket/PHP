<?php

for ($i=1; $i<= 10; $i++){
echo $i ;
}

echo "<br>";
echo "<br>";
$sum=0;
for($i=0; $i<=30; $i++){
    $sum=$sum+$i;
}
echo $sum;

echo "<br>";
echo "<br>";



$rows = 5;

for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $rows; $j++) {
        if ($j < $rows - 1 - $i) {
            echo "A ";
        } else {
            echo chr(65 + $i) . " ";
        }
    }
    echo "<br>";
}
echo "<br>";

$rows =5;
for($i=0;$i<$rows;$i++){
    for ($j=0;$j<$rows;$j++){
        if($j<$rows -1 -$i){
            echo "1 ";
        }else{
            echo (1 + $i) . "  ";
        }
    }
    echo "<br>";
}

echo "<br>";


$rows =5;
for($i=0;$i<$rows;$i++){
    for ($j=0;$j<$rows;$j++){
        if($j ==$i){
            echo ($i+1). " ";
        }else{
            echo ("0 ");
        }
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";



$n = 5;  
$f = 1; 

for ($i=1; $i <= $n; $i++) {  
  $f = $f * $i;  
} 

echo "Factorial of $n is $f";  

echo "<br>";
echo "<br>";


$first_num = 0;  
$second_num = 1;  
$n = 9; 
echo "Fibonacci Series: $first_num, $second_num";  

for($i = 2; $i < $n; $i++) {  
    $next_num = $first_num + $second_num;  
    echo ", $next_num";  
    $first_num = $second_num;  
    $second_num = $next_num;  
} 

echo "<br>";
echo "<br>";

$orange = "Orange Coding Academy";
$char = 'c';
$count = substr_count(strtolower($orange),$char );
echo "$char has been repeated $count times ";

echo "<br>";
echo "<br>";

echo "<table border='3' cellpadding='10',cellspacing='0';>"; 
for ($i = 1; $i <= 6; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 5; $j++) {
        $mul = $i * $j;
        echo "<td>$i * $j = $mul</td>";
    }
    echo "</tr>"; 
}
echo "</table>"; 

echo "<br>";
echo "<br>";

for ($i = 1; $i <= 50; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo $i . " FizzBuzz<br>";
    } elseif ($i % 3 == 0) {
        echo $i . " Fizz<br>";
    } elseif ($i % 5 == 0) {
        echo $i . " Buzz<br>";
    } else {
        echo $i . "<br>";
    }
}





















?>