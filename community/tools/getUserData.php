<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}

if(isset($_SESSION['steamid'])) {
//connecting to database
$servername = "localhost";
$username = "BrawlBuddy";
$password = "Brawl123!";
$dbname = "brawlbuddiesinfo";
$info = new mysqli($servername, $username, $password, $dbname);
if ($info->connect_error) {
    die("Connection failed: " . $info->connect_error);
}


//guidelist defined as (brawlid,title,subject,score,guideid)
$maketime=time();
$newUser = "INSERT IGNORE INTO userlist (steamid,time,lasttime) VALUES ('{$_SESSION['steamid']}','{$maketime}','{$maketime}')";
if ($info->query($newUser) === TRUE) {};

$guideInfo = "SELECT * FROM userlist WHERE steamid = {$_SESSION['steamid']}";
if($result = mysqli_query($info,$guideInfo)){
while ($row = mysqli_fetch_assoc($result)){
	$userData[] = $row;
}}

$_SESSION['userData']=$userData;
}


?>