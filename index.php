<?php
$title = "index";
include 'includes/header.php' ?>
<!-- basic html -->
    <h1>Hello World</h1>

   <?php 
   // printing to html using echo
   echo 'hello php world';
   echo '<br/>';
   echo 'david';
   ?>
   <button type="button" class="btn btn-dark">CLICK ME!</button>
   <button type="button" class="btn btn-danger">CLICK ME!</button>
   <button type="button" class="btn btn-success">CLICK ME!</button>
<a href="https://merittech.herokuapp.com/" target="_blank" class="btn btn-dark">HEROKU.COM</a>
   
<?php require 'includes/footer.php' ?>