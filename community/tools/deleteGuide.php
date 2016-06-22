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

$deleteGuide = $info->prepare("DELETE FROM guidelist WHERE guideid=?");
$deleteGuide->bind_param("i",$guideid);
$guideid = $_SESSION['guideid'];
$deleteGuide->execute();
$deleteGuide->close();
$info->close();
?>