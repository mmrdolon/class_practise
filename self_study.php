<?php
$name = 'dolon';

$a = 'Hello World';

echo $a;
echo '<br>';

echo "This is a message from $name";

//  =========================================================

$num1 = "100";
$num2 = 12;

$word = "Hello";
$word2 = "Hi";

echo '<br>';

echo $num1 + $word; //100

echo '<br>';

echo $num1 + $num2; //112

echo '<br>';

echo $word + $word2;

echo '<br>';

echo '<br>';

//  ===========================================================

$var = array(

    '2'=>1,
    '3'=>3,
    "b"=>4,
    '4'=>2,

);

$var[5] = "Dolon";
//echo $var[4];
//echo $var[5];
var_dump($var);


//  ===============================================================

define ('TEST','This Is A Test!');
echo TEST . PHP_EOL;
echo Test . PHP_EOL;


// ===================================================================

$fruit = array("grapes","apple","cherry");

echo $fruit[2][3];

echo '<br>';

echo '<br>';
//  ===================================================================

$arr = array("data" => "USA" , 12 => false);

echo $arr["data"];

echo $arr[12];
