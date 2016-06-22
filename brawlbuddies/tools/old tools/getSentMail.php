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

$mailInfo = "SELECT * FROM usermail WHERE fromid = {$_SESSION['brawlid']} ORDER BY time DESC";
if($result = mysqli_query($info,$mailInfo)){
while ($row = mysqli_fetch_assoc($result)){
  $mailData[] = $row;
}}else{echo $info->error;}
?>