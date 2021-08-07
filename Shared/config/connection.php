<?php
session_start();
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'password'); // make sure you use your password!!!!!!!!!!!!!!!!!
define('DB_DATABASE', 'TraverIS-Project');

$con = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE) or die("Sorry, We couln't connect you to the database!!");
include 'functions.php'; // trying to make functions to simplify some actions....
?>