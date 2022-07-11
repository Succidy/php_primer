<?php 
$title = "function";
include 'includes/header.php' ?>

  <h1>function</h1>
  <?php

// defining a function
  function writeMessage(){
echo "David is a developer, A very good one! <br/>";
  }

  //calling a function
  writeMessage();

  echo "<br/>";

writeMessage();

// functions with parameters
function addfuction($num1, $num2){
    $sum = $num1 + $num2;
    echo "the sum of $num1 and $num2 is: $sum <br/>";
}

function changeNum(&$num){
    $num = $num + 10;
}

function returnproduct($num1, $num2){
$prod = $num1 * $num2;
return $prod;

}

$num = 200;
addfuction(20, 30);
addfuction(10, $num);
addfuction(10, "50");

changeNum ($num);
echo $num . '<br/>';

$return_value = returnproduct(10, 200);
echo $return_value . '<br/>';


  ?>
  <?php require 'includes/footer.php' ?>