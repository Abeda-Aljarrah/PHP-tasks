<?php

// 1.Write a PHP script to see if the specified year is a leap year or not.
// Sample Input: 2013
// Sample Output: ‘This year is not a leap year’

$year= 2013;
if ($year % 4 == 0){
    echo "Year is a leap year" ;
}else{
    echo "Year is not a leap year" ;
};

echo "<br>";

// 2.Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20, we are in winter otherwise the season is summer.
// Sample Input: 27
// Sample Output: ‘It is summertime!’
$temperature=27;
if ($temperature > 20){
    echo "It is summertime!" ;
}elseif($temperature <= 20){
    echo "It is wintertime!" ;
};

echo "<br>";

// 3.Write a PHP script to calculate the sum of the two integers. If the two values ​​are the same, then calculate the triple of their sum.
// Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
// Sample Output: ( 2 + 2 ) * 3 = 12
// Sample Output: ‘It is summertime!’

$x=2;
$y=2;

 if ($x == $y){
    echo ($x+$y)*3;
 }else{
    echo $x+$y;
 };

 echo "<br>";

//  4.Write PHP to check if the sum of the two given numbers equals 30, if the condition is true the return their sum otherwise return false
// Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
// Sample Output: ‘false’

$q=15;
$w=15;

if ($q+$w == 30){
    echo ($q+$w);
}else{
    echo "false";
};

echo "<br>";

// 5.Write in PHP script to check if the given positive number is a multiple of 3.
// Sample Input: number = 20
// Sample Output: ‘false’

$number=9;
if ($number % 3 == 0){
    echo "true";
}else{
    echo "false";
};

echo "<br>";

// 6.Write a PHP script to check if the integer value ​​is in the range of [20-50] inclusive.
// Sample Input: number = 50
// Sample Output: ‘true’

$integer=100;
if($integer <= 50 && $integer >= 20){
    echo "true";
}else{
    echo "false";
};

echo "<br>";

// 7.Write PHP script to find the largest number between the three integers
// Sample Input: [ 1, 5, 9 ]
// Sample Output: 9

$largest = [1,5,9];
echo max($largest);

echo "<br>";

// 8.Write PHP script to calculate the monthly electricity bill according to these rules
//  
// a.For first 50 units – 2.50 JOD/Unit
// b.For next 100 units – 5.00 JOD/Unit
// c.For next 100 units – 6.20 JOD/Unit
// d.For units above 250 – 7.50 JOD/Unit

$units = 150;
$bill = 100;
if($units <= 50){
    echo $bill = $units * 2.5;
}else if ($units >50 && $units <=150){
    echo $bill = 50*2.5 + ($units-50)*5;
}else if ($units >150 && $units <=250){
    echo $bill = 50*2.5 + 150* 5 + ($units-150) * 6.2;
}else{
    echo $bill = 50*2.5 + 150*5 + ($units-150) * 6.2 + ($units-250) * 7.5;
}

echo "<br>";

// 9.Write php script to check if a person is eligible to vote, minimum age required for voting is 18.

// Sample Input: 15
// Sample Output: ‘is no eligible to vote’

$age=15;
if ($age < 18){
    echo "you are not eligible to vote";
}else{
    echo "you are eligible to vote";
};

echo "<br>";

// 10.Write php script  to check whether a number is positive, negative or zero

// Sample Input: -60
// Sample Output: ‘Negative’

$num=9;
if ($num > 0 ){
    echo "positive";
}elseif($num < 0){
    echo "Negative";
}else{
    echo "Zero";
};

echo "<br>";

// 11.Write php script to make a calculator, the calculator should contain the four main operations 

// e.Addition
// f.Subtraction
// g.Multiplication
// h.Division

$a = 7;
$b = 9;
$operation= "+";
if ($operation=="+"){
    echo $a +$b;
}elseif($operation=="-"){
    echo $a -$b;
}elseif($operation=="*"){
    echo $a * $b;
}elseif($operation=="/"){
    echo $a / $b;
}

echo "<br>";

// 12.Write a PHP to find the grade for the student, after calculating the average of his score in all the subject 

// Sample Inputs: [60,86,95,63,55,74,79,62,50]
// Sample Output: ‘D’
$grade=[60,86,95,63,55,74,79,62,50];
$sumarr=array_sum($grade);
$avg= $sumarr/count($grade);
switch($avg){
    case $avg<=100 && $avg >=90:
        echo "A";
        break;
    case $avg<90 && $avg >=80:
       echo "B";
       break;
    case $avg<80 && $avg >=70:
       echo "C";
       break;
    case $avg<70 && $avg >=60:
       echo "D";
       break;
    case $avg<60:
        echo "F";
        break;   
}
