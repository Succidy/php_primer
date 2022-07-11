<?php 
$title = "switch";
include 'includes/header.php' ?>

   <H1> Switch Statement</H1>
   <?php
$grade = 'B';

switch($grade){
    case 'A':
echo '<h1 style = "color: green"> you are a super star</h1>';
break;
case 'B':
echo '<h1 style = "color: cyan"> you are a super moon</h1>';
break;
case 'C':
echo '<h1 style = "color: blue"> you are a super star sun</h1>';
break;
default; 
echo '<h1 style = "color: red"> you are a super star rain</h1>';
}
   ?>
   <?php require 'includes/footer.php' ?>