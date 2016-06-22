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

//$primaryInfo = "SELECT (brawlid, elo, server, alias, reddit, main, alt1, alt2, gt2, opt1, opt2, opt3, opt4, opt5, opt6, opt7, opt8, opt9, opt10, opt11, opt12, opt13, opt14) FROM reglist".
//				" WHERE brawlid != {$_SESSION['brawlid']} AND {$gt2} {$opt3} {$opt6} {$opt7} {$opt12} {$opt13} {$opt14} {$elomin} {$elomax} 1==1 ";

$primaryInfo = "SELECT * FROM reglist WHERE brawlid != {$_SESSION['brawlid']} ORDER BY brawlid DESC";
if($result = mysqli_query($info,$primaryInfo)){
while ($row = mysqli_fetch_assoc($result)){
  $primaryData[] = $row;
}}else{echo $info->error;}

$_SESSION['primaryData']=$primaryData;
?>