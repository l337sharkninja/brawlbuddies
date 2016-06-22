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
$updateReg = "UPDATE reglist SET alias = '{$_SESSION['alias']}', elo = '{$_SESSION['elo']}', reddit = '{$_SESSION['reddit']}', server = '{$_SESSION['server']}', main = '{$_SESSION['main']}', alt1 = '{$_SESSION['alt1']}', alt2 = '{$_SESSION['alt2']}', gt1 = '{$_SESSION['gt1']}', gt2 = '{$_SESSION['gt2']}', gt3 = '{$_SESSION['gt3']}' , opt1 = '{$_SESSION['opt1']}', opt2 = '{$_SESSION['opt2']}', opt3 = '{$_SESSION['opt3']}', opt4 = '{$_SESSION['opt4']}', opt5 = '{$_SESSION['opt5']}', opt6 = '{$_SESSION['opt6']}', opt7 = '{$_SESSION['opt7']}', opt8 = '{$_SESSION['opt8']}', opt9 = '{$_SESSION['opt9']}', opt10 = '{$_SESSION['opt10']}', opt11 = '{$_SESSION['opt11']}', opt12 = '{$_SESSION['opt12']}', opt13 = '{$_SESSION['opt13']}', opt14 = '{$_SESSION['opt14']}' WHERE  brawlid = '{$_SESSION['brawlid']}'";
if ($info->query($updateReg) === TRUE) {}
?>