<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
$servername = "localhost";
$username = "BrawlBuddy";
$password = "Brawl123!";
$dbname = "brawlbuddiesinfo";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 

$mysqli->real_query("SELECT id FROM querylist");
$res = $mysqli->use_result();

$_SESSION['query_flag']=0;

while ($row = $res->fetch_assoc()) {
    if($row['id']==$_SESSION['steamid']){$_SESSION['query_flag']=1;}
}
?>