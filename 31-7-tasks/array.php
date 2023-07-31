<?php
// 1.** Required ** $colors = array('white', 'green', 'red') 
// Write a PHP script that will display the colors as unordered list : 
// Expected Output:  
// green
// red 
// white
$colors = array('white', 'green', 'red');
echo '<ul>';
echo '<li>' . implode( '</li><li>', $colors) . '</li>';
echo '</ul>';

echo "<br>";

// 2.** Required ** $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

// Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
// Expected Output:
// The capital of Netherlands is Amsterdam 
// The capital of Greece is Athens 
// The capital of Germany is Berlin 
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" );
asort($cities);
foreach ( $cities as $city=>$capital ) {
    echo "The capital of $city is $capital"; 
    echo "<br>";
}
echo "<br>";

// 3.**  Required ** $color = array (4 => 'white', 6 => 'green', 11=> 'red'); 

// Write a PHP script to display the first element of the above array. 
// Expected Output:  white
$color = array (4 => 'white', 6 => 'green', 11=> 'red'); 
echo reset($color)."\n";

echo "<br>";

// 4.**  Required ** Write a PHP script to sort the following associative array depending on the key value [asc] :  

// Sample Input: 

// $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

// Expected Output:

// c = apple
// b = banana
// d = lemon
// a = orange

$fruits=array("d"=>"lemon","a"=>"orange","b"=>"banana","c"=>"apple");
ksort($fruits);
print_r ($fruits);

echo "<br>";


// 8.**  Required ** Write a PHP script to get the shortest/longest string length from an array. 

// Sample Input:

//  $words =  array("abcd","abc","de","hjjj","g","wer")

// Expected Output : 

// The shortest array length is 1. The longest array length is 4.
$words= array("abcd","abc","de","hjjj","g","wer");
$new_words = array_map('strlen', $words); 
// strlen: strlen() is a built-in PHP function that returns the length of a given string
echo "The shortest array length is " . min($new_words) .
". The longest array length is " . max($new_words).'.';