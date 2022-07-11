<?php 
$title = "string";
include 'includes/header.php' ?>

<h1>sting manipulation</h1>

<?php
//concantenation of strring
$phrase1 = "student who came late";
$phrase2 = "in class, stand with Dave";
$name = "david quest";
echo $phrase1 . ", named Tiffany, " . $phrase2;
echo '<br/>';

//string manipulation
echo 'uppercase first letter: ' .ucfirst($name). '<br/>';
echo 'uppercase first letter of each word: ' .ucwords($name). '<br/>';
echo 'upper case: ' .strtoupper($name). '<br/>';
echo 'upper lower: ' .strtolower("ALL THISE WAS IN UPPER CASE"). '<br/>';
echo 'repeat string: ' .strtoupper(str_repeat('a', 5)). '<br/>';
echo 'get a substring: ' .substr($name, 3, 10). '<br/>';
echo 'get position: ' .strpos($name, 'e'). '<br/>';
echo 'get character: ' .strchr($name, 't'). '<br/>';

echo 'lenght of string: ' .strlen($name). '<br/>';

echo 'get position: ' .strpos($name, 'e'). '<br/>';

echo 'without trim: '. "A" . " B C D " . "E" . '<br/>';

echo 'trim spaces on both sides: '. "A" . trim(" B C D ") . "E" . '<br/>';
echo 'trim spaces to the left: '. "A" . ltrim(" B C D ") . "E" . '<br/>';
echo 'trim spaces to the right: '. "A" . rtrim(" B C D ") . "E" . '<br/>';

echo 'replace string with another: ' .str_replace("stand", "sit", $phrase2). '<br/>';












?>
<?php require 'includes/footer.php' ?>