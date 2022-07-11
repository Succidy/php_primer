<?php 
$title = "whiledowhileloop";
include 'includes/header.php' ?>

    <h1>while loop</h1>
<?php
$grade = 0;
//infinite loop
//while($grade < 10){
//echo '<P> I AM LESS THAN 10</P>';
//$grade++;
//}
//pre-condition loop
while($grade < 10){
    echo '<p> I AM LESS THAN 10</P>';
    $grade++;
}

echo '<p>exit loop </p>';
?>


<h1> Do-while Loop</h1>

<?php

do{
    echo '<p> I AM do while loop</p>';
    $grade++;
}
while($grade < 10);
echo '<p>exit loop!!! </p>';
?>
<?php require 'includes/footer.php' ?>