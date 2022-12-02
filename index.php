<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>first php</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<body>
<!-- .............................................main,,,,,,,,,,,,,,,,,,,,, -->
<div class="logo">
<ul>
    <li class="active"><a herf="#">home</a></li>
    <li><a href="https://www.youtube.com/results?search_query=php+tutorial">video</a></li>
    <li><a href="https://www.w3schools.com/">learn more</a></li>
</ul>
<a class="logo1" href=""><img src="12345.png" alt="logo"></a>
</div> 


    <div class="jumbotorn text-center bg-success">
        <h1>PHP INTRODUCTION</h1>
        
       <p> PHP is an acronym for PHP: hypertext perprocessor.<br> PHP is a widely-used, open source scripting language.<br>PHP script are executed on the server.<br>PHP is free to downloade and used.</p></div>
     <div class="jumbotorn text-center bg-warning">
        <h1>What Can PHP Do?</h1>
         <p>PHP can generate dynamic page content<br>
         PHP can create, open, read, write, delete, and close files on the server<br>
        PHP can collect form data<br>
        PHP can send and receive cookies<br>
        PHP can add, delete, modify data in your database<br>
         PHP can be used to control user-access<br>
         PHP can encrypt data</p>
    </div>

    <div class="row">
    <div class="col-sm-4" style="background-color:lavender;">Basic PHP Syntax <br> <?php
echo "Hello i am ugyen jamtsho!";
?></div> 
    <div class="col-sm-4" style="background-color:lavenderblush;">PHP Comments <br>single-line comments:<br> // <br>

# </div>
    <div class="col-sm-4" style="background-color:lavender;">multiple-line comments:<br>/*
This is a multiple-lines comment block
that spans over multiple
lines
*/</div>
  </div>
  </div>

  
<div class="bg-info">
  <!-- php main -->
  <!--.............................. topic:php variable ....................................-->
  <?php
$txt = "php variable!";
$x = 10;
$y = 20.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
?>
<!-- ........................topic:php variable scope -->
<?php
$x = 5; // global scope
 
function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable x inside function is: $x</p>";
} 
myTest(x);

echo "<p>Variable x outside function is: $x</p>";
?>
<!-- ..........................PHP echo and print Statements .......................-->
<?php
echo "<h2>PHP echo and print Statements</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?> 
<!-- ............................PHP print Statement...................................... -->
<?php
print "<h2>PHP print statement!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
?> 

<!-- .............................php data type................................................... -->
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>
</div>
<!-- .....................strlen() - Return the Length of a String......... -->
<div class="bg-success">
<?php
echo strlen("i am ugyen");
?>   
<!-- data type -->  
<h2>data type</h2>  
<?php   
$x = "Hello! My name is ugyen jantsho";  
$y = 'Let your creativity find an expression with meditation, yoga and Sudarshan Kriya. Sudarshan Kriya transforms My energy is drained to It is evening and I am energetic. Communication ability. Live Webcast. Cost Effective. 50,000 live pledges. Peace of mind. Eco-friendly. 
';  
  
echo $x;  
echo "<br>";   
echo $y;  
?>  
<br>  
<hr/>  
  
<!-- strings -->  
<h2>strings</h2>  
  
<!-- strings -->  
<h2>strings</h2>  
  
<?php  
echo strlen("How are you doing? are okay with your Problem");  
?>  
<br>   
</div>
<!-- ....................................................................................................... -->
<!-- integers -->  
<div class="bg-secondary">
<h2>integers</h2>  
<?php  
// Check if the type of a variable is integer     
$x = 5050;  
var_dump(is_int($x));  
  
echo "<br>";  
  
// Check again...   
$x = 1.1;  
var_dump(is_int($x));  
?>    
<br>  
<hr/>  
<!-- float -->  
<h2>float</h2>  
<?php  
// Check if the type of a variable is float   
$x = 10.365;  
var_dump(is_float($x));  
?>   
<br>  
  
<!-- strlen -->  
<h2>strlen</h2>  
<?php  
echo strlen("Happiness");  
?>   
<br>  
</div>
<!-- ........................................................................................................... -->
<!-- str_word count -->  
<div class="bg-danger">
<h2>str_word count</h2>  
<?php  
echo str_word_count("peace!");  
?>   
<br>  
<!-- sttrev -->  
<h2>sttrev</h2>  
 <?php  
echo strrev("Nature is beautiful");  
?>   
<br>  
  
<!-- strpos -->  
<h2>strpos</h2>  
<?php  
echo strpos("Hello beautiful!", "beautiful");  
?>  
<br>  
<hr/>   
</div>
<!-- .............................................................................................................. -->
<!-- min() and max() -->  
<div class="bg-warning">
<h2>min() and max()</h2>  
<?php  
echo(min(0, 150, 30, 20, -8, -200) . "<br>");  
echo(max(0, 150, 30, 20, -8, -200));  
?>  
<br>  
<!-- round -->  
<h2>round</h2>  
<?php  
echo(round(0.60) . "<br>");  
echo(round(0.50) . "<br>");  
echo(round(0.49) . "<br>");  
echo(round(-4.40) . "<br>");  
echo(round(-4.60));  
?>  
<br>  
  
<!-- rand() -->  
<h2>rand()</h2>  
<?php  
echo(rand(10, 100));  
?>  
<br>  
<hr/>
<!--Constant-->  
<h2>Constant</h2>  
<?php  
// case-sensitive constant name  
define("GREETING", "Welcome to W3Schools.com!");  
echo GREETING;  
?>   
<br>  
<hr/>  
</div>
<!-- ............................................................................................. -->
<!-- if... -->  
<div class=" bg-primary">
<h2>if..</h2>  
<?php  
$t = date("H");  
  
if ($t < "20") {  
  echo "Have a good day!";  
}  
?>  
<br>  
  
<!-- else -->  
<h2>else</h2>  
<?php  
$t = date("H");
  
if ($t < "20") {  
  echo "Have a good day!";  
} else {  
  echo "Have a good night!";  
}  
?>  
<br>  
  
<!-- else if -->  
<h2>else if</h2>  
<?php  
$t = date("H");  
echo "<p>The hour (of the server) is " . $t;   
echo ", and will give the following message:</p>";  
  
if ($t < "10") {  
  echo "Have a good morning!";  
} elseif ($t < "20") {  
  echo "Have a good day!";  
} else {  
  echo "Have a good night!";  
}  
?>  
<br>  
<hr/>
</div>
<!-- ................................................................................................ -->

<!-- switch -->  
<div class="bg-warning">
<h2>switch</h2>  
<?php  
$favfruit = "mango";  
  
switch ($favfruit) {  
  case "mango":  
    echo "Your favorite fruit is mango!";  
    break;  
  case "apple":  
    echo "Your favorite fruit is apple!";  
    break;  
  case "green":  
    echo "Your favorite fruit is orange!";  
    break;  
  default:  
    echo "Your favorite fruit is neither mango, apple, nor orange!";  
}  
?>  
<br>  
<hr/> 
</div>
<!-- ....................................................................... -->
<!-- Loops -->  
  <!-- while --> 
  <div class="bg-success"> 
  <h2>while</h2>  
  <?php    
$x = 1;  
   
while($x <= 10) {  
  echo "The number is: $x <br>";  
  $x++;  
}   
?>  
<br>  
</div>
<!-- ............................................................................ -->
  <div class="bg-info">
<!-- do...while -->  
<h2>do...while</h2>  
<?php   
$x = 1;  
  
do {  
  echo "The number is: $x <br>";  
  $x++;  
} while ($x <= 5);  
?>  
<br>  
<!-- for -->  
<h2>for</h2>  
<?php    
for ($x = 0; $x <= 10; $x++) {  
  echo "The number is: $x <br>";  
}  
?>  
</div>


  <div class="bg-primary">
    <!-- ................................................................................................. -->
<!-- for each -->  
<h2>for each</h2>  
<?php    
$names = array("ugyen", "Jamtsho", "tshejay", "lhamo");   
  
foreach ($names as $value) {  
  echo "$value <br>";  
}  
?>
</div>
<!-- .................................................................................................... -->
<div class="bg-danger">  
<!-- break -->  
<h2>break</h2>  
<?php    
for ($x = 0; $x < 10; $x++) {  
  if ($x == 4) {  
    break;  
  }  
  echo "The number is: $x <br>";  
}  
?>  
<br>  
<hr/> 
</div>
<!-- ................................................................................................. -->
 <div class="bg-warning"> 
<!-- function -->  
<h2>function</h2>  
<?php  
function writeMsg() {  
  echo "life is not a bed of rose, so never give up!";  
}
?> 
</div>
</body>
</html>