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

//guidelist defined as (brawlid,title,subject,score,guideid)

$guideInfo = "SELECT * FROM guidelist ORDER BY time DESC";
if($result = mysqli_query($info,$guideInfo)){
$kk=0;
while ($row = mysqli_fetch_assoc($result)){
	$_SESSION['guideData'][$kk]['guideid'] = $row['guideid'];
	$_SESSION['guideData'][$kk]['brawlid'] = $row['brawlid'];
	$_SESSION['guideData'][$kk]['alias'] = $row['alias'];
	$_SESSION['guideData'][$kk]['guidetype'] = $row['guidetype'];
	$_SESSION['guideData'][$kk]['opt'] = $row['opt'];
	$_SESSION['guideData'][$kk]['time'] = $row['time'];
	$_SESSION['guideData'][$kk]['title'] = $row['title'];
	$_SESSION['guideData'][$kk]['subject'] = $row['subject'];
	$_SESSION['guideData'][$kk]['upvotes'] = unserialize($row['upvotes']);
	$_SESSION['guideData'][$kk]['qt1'] = $row['qt1'];
	$_SESSION['guideData'][$kk]['qt2'] = $row['qt2'];
	$_SESSION['guideData'][$kk]['qt3'] = $row['qt3'];
	$_SESSION['guideData'][$kk]['pros1'] = $row['pros1'];
	$_SESSION['guideData'][$kk]['pros2'] = $row['pros2'];
	$_SESSION['guideData'][$kk]['pros3'] = $row['pros3'];
	$_SESSION['guideData'][$kk]['cons1'] = $row['cons1'];
	$_SESSION['guideData'][$kk]['cons2'] = $row['cons2'];
	$_SESSION['guideData'][$kk]['cons3'] = $row['cons3'];
	$_SESSION['guideData'][$kk]['str1'] = $row['str1'];
	$_SESSION['guideData'][$kk]['str2'] = $row['str2'];
	$_SESSION['guideData'][$kk]['str3'] = $row['str3'];
	$_SESSION['guideData'][$kk]['wkn1'] = $row['wkn1'];
	$_SESSION['guideData'][$kk]['wkn2'] = $row['wkn2'];
	$_SESSION['guideData'][$kk]['wkn3'] = $row['wkn3'];
	$kk++;
}}else{echo $info->error;}


?>