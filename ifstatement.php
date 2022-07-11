<?php 
$title = "ifstatement";
include 'includes/header.php' ?>

    <!-- basic html -->
   <h1>Hello World</h1>

   <?php 
   // printing to html using echo
   echo 'hello php world';
   echo '<br/>';
   echo 'david';
   ?>
   <?php
$name = 'Davidd';
$age = '28';
$grade = '30';
$grade = 'C';

echo $name;
echo '<h1> my name is dave: '.$name.' </h1>';
echo '<h1> my name is age: '.$age.' </h1>';
if ($grade >= 50){ echo '<h1>you have passed</h1>';
}
else{ echo '<h1 style="color: red">you have failed</h1>';
}
if($grade == 'A'){ echo '<h1 style = "color: cyan">you have passed successfuly</h1>';
}
elseif ($grade == 'B'){ echo '<h1 style = "color: green">you have passed</h1>';
}
else{ echo '<h1 style = "color: blue">you have failed again</h1>';
}
   ?>
   <?php require 'includes/footer.php' ?>