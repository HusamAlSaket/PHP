<?php

$str = "hello this is husam";
echo (strtoupper($str));
echo "<br>";
echo(strtolower($str));
echo "<br>";
echo (ucfirst($str));
echo "<br>";
echo(ucwords($str));
echo "<br>";
echo "<br>";

$input = "085119";
if(strlen($input) === 6){
$hours =substr($input,0,2);
$mins =substr($input,2,2);
$secs =substr($input,4,2);

$time = "{$hours}:{$mins}:{$secs}";
echo "$time";
} else{
    echo "invalid time format";
}

echo "<br>";
echo "<br>";

$str1 = "I am a full stack developer at orange coding academy";
$word = "orange";

if (strstr($str1,$word)){
    echo "the word $word has been found";
}else{
    echo "the word $word has not been found";
}

echo "<br>";
echo "<br>";

echo "the file path is :".basename("www.orange.com/index.php") .PHP_EOL;

echo "<br>";
echo "<br>";

$email = "info@orange.com";
$username = strstr($email,'@',true);
echo "$username";

echo "<br>";
echo "<br>";

$lastThree =substr($email,-3);
echo $lastThree;

echo "<br>";
echo "<br>";


function UniquePassword($length) {
    $inputString = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $characters = str_split($inputString);
    
    shuffle($characters);

    $password = implode('', array_slice($characters, 0, $length));
    
    return $password;
}
$passwordLength = 30; 
$password = UniquePassword($passwordLength);
echo $password;

echo "<br>";
echo "<br>";

$sample3 = "our new trainee is so genius";
echo str_replace("our","that",$sample3);

echo "<br>";
echo "<br>";


function findDifference($str1, $str2) {
    $length = min(strlen($str1), strlen($str2));

    for ($i = 0; $i < $length; $i++) {
        if ($str1[$i] !== $str2[$i]) {
            return "First difference is at position " . ($i) . ": \"" . $str1[$i] . "\" vs \"" . $str2[$i] . "\"";
        }
    }

    return "No difference found";
}

$string1 = 'dragonball';
$string2 = 'dragonboll';
echo findDifference($string1, $string2);


echo "<br>";
echo "<br>";




?>