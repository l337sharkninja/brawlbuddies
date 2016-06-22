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
$info->real_query("SELECT * FROM reglist WHERE brawlid = '{$_SESSION['brawlid']}'");
$res = $info->use_result();
$userInfo = $res->fetch_assoc();
//VALUES:  (BRAWLID, ALIAS, REDDIT, MAIN, ALT1, ALT2, GAMETYPE1, GAMETYPE2, GAMETYPE3, OPT1, OPT2, OPT3, ETC...)
//
//  Gametype: 1v1 Ranked
//  opt1 top limit elo";
//  opt2 bot limit elo";
//  opt3 spar";
//
//  Gametype: 2v2 Ranked
//  opt4 top limit elo
//  opt5 bot limit elo
//  opt6 2v2 duo partner
//  opt7 2v2 team spar
//
//  Gametype: FFA
//  opt8 top limit elo
//  opt9 bot limit elo
//  
//  Gametype: Custom
//  opt10 top limit elo
//  opt11 bot limit elo
//  opt12 brawlball
//  opt13 bombsketball
//  opt14 snowbrawl

$_SESSION['brawlid']=$userInfo['brawlid'];
if(isset($userInfo['alias'])){$_SESSION['alias']=$userInfo['alias'];}
if(isset($userInfo['reddit'])){$_SESSION['reddit']=$userInfo['reddit'];}
if($userInfo['server']!=0){$_SESSION['server']=$userInfo['server'];}
$_SESSION['elo']=$userInfo['elo'];
$_SESSION['main']=$userInfo['main'];
$_SESSION['alt1']=$userInfo['alt1'];
$_SESSION['alt2']=$userInfo['alt2'];
$_SESSION['gt1']=$userInfo['gt1'];
$_SESSION['gt2']=$userInfo['gt2'];
$_SESSION['gt3']=$userInfo['gt3'];
$_SESSION['opt1']=$userInfo['opt1'];
$_SESSION['opt2']=$userInfo['opt2'];
$_SESSION['opt3']=$userInfo['opt3'];
$_SESSION['opt4']=$userInfo['opt4'];
$_SESSION['opt5']=$userInfo['opt5'];
$_SESSION['opt6']=$userInfo['opt6'];
$_SESSION['opt7']=$userInfo['opt7'];
$_SESSION['opt8']=$userInfo['opt8'];
$_SESSION['opt9']=$userInfo['opt9'];
$_SESSION['opt10']=$userInfo['opt10'];
$_SESSION['opt11']=$userInfo['opt11'];
$_SESSION['opt12']=$userInfo['opt12'];
$_SESSION['opt13']=$userInfo['opt13'];
$_SESSION['opt14']=$userInfo['opt14'];

?>