<?php

class GrandPa
{
    protected $name = 'Mark Henry';
}

class Dad extends GrandPa
{
    function displayGrandPaName()
    {
        return $this->name;
    }

}

$daddy = new Dad;
echo $daddy->displayGrandPaName(); // Prints 'Mark Henry'

// $outsiderWantstoKnowGrandpasName = new GrandPa;
// echo $outsiderWantstoKnowGrandpasName->name; // Results in a Fatal Error
// class Fruit {
//     public $name;
//     public $color;
  
//     function __construct($name, $color) {
//       $this->name = $name; 
//       $this->color = $color; 
//     }
//     function get_name() {
//       return $this->name;
//     }
//     function get_color() {
//       return $this->color;
//     }
//   }
  
//   $apple = new Fruit("Apple", "red");
//   echo $apple->get_name();
//   echo "<br>";
//   echo $apple->get_color();


//   class Fruit {
//     public $name;
//     public $color;
  
//     function __construct($name) {
//       $this->name = $name; 
//       echo "hi";
//     }
//     function __destruct() {
//       echo "The fruit is {$this->name}."; 
//     }
//   }
  
//   $apple = new Fruit("Apple");

//   unset($apple);
//   print_r ($apple);

// class Fruit {
//     // Properties
//     var $name;
//     var $color;
  
//     // Methods
//     function __construct($name, $color) {
//       $this->name = $name;
//       $this->color = $color; 
//     }
//     function __destruct() {
//       echo "The fruit is {$this->name} and the color is {$this->color}."; 
//     }
//   }
  
//   $apple = new Fruit("Apple", "red");

// class Fruit {
//     public $name;
//     protected $color;
//     private $weight;
//   }
  
//   $mango = new Fruit();
//   $mango->name = 'Mango'; // OK
//   $mango->color = 'Yellow'; // ERROR
//   $mango->weight = '300'; // ERROR

// class Fruit {
//     public $name;
//     public $color;
//     public $weight;
  
//     function set_name($n) {  // a public function (default)
//       $this->name = $n;
//     }
//     protected function set_color($n) { // a protected function
//       $this->color = $n;
//     }
//     private function set_weight($n) { // a private function
//       $this->weight = $n;
//     }
//   }
  
//   $mango = new Fruit();
//   $mango->set_name('Mango'); // OK
//   $mango->set_color('Yellow'); // ERROR
//   $mango->set_weight('300'); // ERROR