<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
//connecting to database
$servername = "localhost";
$username = "BrawlBuddy";
$password = "Brawl123!";
$dbname = "brawlbuddiesinfo";
$info = new mysqli($servername, $username, $password, $dbname);
if ($info->connect_error) {
    die("Connection failed: " . $info->connect_error);
}
$updateUser = "UPDATE userlist SET register = '{$_SESSION['register']}' WHERE  steamid = '{$_SESSION['steamid']}'";
if ($info->query($updateUser) === TRUE) {}
?>