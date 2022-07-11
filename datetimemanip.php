<?php 
$title = "Array";
include 'includes/header.php' ?>

<h1> date and time manipulation  </h1>
    <?php
$datenow = getdate();
echo "Today's date: <br/>";
echo $datenow ['mday'] . '<br/>';
echo $datenow ['mon'] . '<br/>';
echo $datenow ['year'] . '<br/>';
echo "today's date: " .$datenow['mday'] . '/' .$datenow['mon'] . '/'. $datenow['year'] .'<br/>';
echo time() .'<br/>';

print date("m/d/y G.i.s<br>", time()) . '<br/>';
print "today is";
print date("j o  y");
?>
<?php require 'includes/footer.php' ?>