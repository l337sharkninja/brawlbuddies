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
$info = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($info->connect_error) {
    die("Connection failed: " . $info->connect_error);
} 
$findUser = "SELECT steamid FROM userlist WHERE brawlid = {$primaryData[$_GET['i']]['brawlid']}";
if($result = mysqli_query($info,$findUser)){
while ($row = mysqli_fetch_assoc($result)){
  $idAdd[] = $row;
}}else{echo $info->error;die();}

if($_SESSION['query_flag']==0){
$querydata = "INSERT INTO querylist VALUES ('{$_SESSION['steamid']}','1','{$idAdd[0]['steamid']}','0','0')";
if ($info->query($querydata) === TRUE) {
	$url = "http://steamcommunity.com/profiles/".$idAdd[0]['steamid'];
    header('Location: '.$url);
} else {
    header('Location: ../adderror.php');
}
}
else{
if($_SESSION['query_flag']==1){
$findQuery = "SELECT qtotal FROM querylist WHERE id = {$_SESSION['steamid']}";
if($result = mysqli_query($info,$findQuery)){
while ($row = mysqli_fetch_assoc($result)){
  $queryInfo[] = $row;
}
}

if($queryInfo[0]['qtotal']==1){ $addFriend = "UPDATE querylist SET qtotal = 2, q2 = {$idAdd[0]['steamid']} WHERE id = {$_SESSION['steamid']}";
if ($info->query($addFriend) === TRUE) {
	$url = "http://steamcommunity.com/profiles/".$idAdd[0]['steamid'];
    header('Location: '.$url);
} else {
}
}

if($queryInfo[0]['qtotal']==2){ $addFriend = "UPDATE querylist SET qtotal = 3, q3 = {$idAdd[0]['steamid']} WHERE id = {$_SESSION['steamid']}";
if ($info->query($addFriend) === TRUE) {
	$url = "http://steamcommunity.com/profiles/".$idAdd[0]['steamid'];
    header('Location: '.$url);
} else {
}
}

if($queryInfo[0]['qtotal']==3){echo "<h1>You have reached your maximum (3) daily steam friend requests.<br>This is a safety precaution to prevent system abuse.<br>Come back tomorrow for more.</h1><script>setTimeout(\"window.close()\", 3500);</script>";
}}}

?>