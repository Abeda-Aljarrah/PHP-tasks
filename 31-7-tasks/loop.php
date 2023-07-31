<?php
// 1.Create a script using a for loop to add all the integers between 0 and 30 and display the total. **  Required **
// Expected Output:  total as a number
$sum = 0; // Initialize the variable $sum to 0
for($i = 0; $i <=30; $i++){
    $sum += $i;
};
echo $sum;

echo "<br>";
echo "<br>";



// 4.Create a script to generate the following pattern, using the nested for loop. **  Required **
// Expected Output:
// 1 0 0 0 0 
// 0 2 0 0 0 
// 0 0 3 0 0 
// 0 0 0 4 0 
// 0 0 0 0 5
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 5; $j++) {
        if ($i == $j) {
            echo $i . ' ';
        } else {
            echo '0 ';
        }
    }
    echo "<br>";
};

echo "<br>";

// 5.Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number. **  Required **
// Sample Input: 5
// Expected Output: 120

/* Define a variable and assign a value to it to find the factorial.*/
$n = 5;  

/*Define the variable where you want to store the factorial number value.*/
$f = 1; 

/*Iterate the loop to find the factorial.*/
for ($i=1; $i <= $n; $i++) {  
  $f = $f * $i;  
} 
/*Display the output.*/
echo "Factorial of $n is $f";

echo "<br>";
echo "<br>";

// 6.Write a program to calculate and print the Fibonacci sequence using a for loop.
// Fibonacci is a series of numbers where a number is the sum of previous two numbers. Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on. 
// Expected Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, … **  Required **
$x = 0;    
$y = 1;
$r=6;

for($i=0;$i<=$r;$i++)    
{    
    $z = $x + $y;    
    echo $z."<br />";         
    $x=$y;       
    $y=$z;     
};

echo "<br>";
echo "<br>";

// 9.Write a PHP program to generate and display the first n lines of a Floyd triangle **  Required **
// Sample output:
// 1
// 2 3
// 4 5 6
// 7 8 9 10
// 11 12 13 14 15

$number = 1;
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= $i; $j++) {
         echo $number . " ";
        $number++;
    }
    echo "<br>";
}
