<?php 
$title = "forloop";
include 'includes/header.php' ?>
    <h1> for loop </h1>
    <?php

for($count = 0; $count < 10; $count++){
    echo '<p> David Quest</p>';
}
for($count = 0; $count < 10; $count++){
echo "<p>the count is: $count</p>";
}
    ?>
    <?php require 'includes/footer.php' ?>