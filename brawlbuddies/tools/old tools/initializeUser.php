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

//query steam id, flag
$info->real_query("SELECT steamid FROM userlist");
$res = $info->use_result();
$_SESSION['register_flag']=0;
while ($row = $res->fetch_assoc()) {
    if($row['steamid']==$_SESSION['steamid']){$_SESSION['register_flag']=1;}
}

//if not registered, add info
if($_SESSION['register_flag']==0){
	$maketime=time();
	//if doesn't exist, add
	//VALUES:  (BRAWLID, STEAMID ,  TERMS [0=ask for terms, 1=terms accepted], REGISTER [0=ask to reg, 1=is reg, 2=no reg, 3=reset to zero daily, 4=registration in progress],SERVER [0=none,1=us,2=eu,3=sea] ELO, TIME)
	$querydata = "INSERT INTO userlist (steamid,time) VALUES ('{$_SESSION['steamid']}','{$maketime}')";
	if ($info->query($querydata) === TRUE) { }
}
//pull data
$info->real_query("SELECT * FROM userlist WHERE steamid = '{$_SESSION['steamid']}'");
$res = $info->use_result();
$userInfo = $res->fetch_assoc();
$_SESSION['brawlid']=$userInfo['brawlid'];
$_SESSION['terms']=$userInfo['terms'];
$_SESSION['register']=$userInfo['register'];
$_SESSION['server']=$userInfo['server'];
$_SESSION['time']=$userInfo['time'];
if($_SESSION['server']!=0){$_SESSION['elo']=$userInfo['elo'];}else{$_SESSION['elo']=1200;}
$res->close();

//advanced options
//VALUES:  (BRAWLID, ALIAS, REDDIT, MAIN, ALT1, ALT2, GAMETYPE RANKED, GAMETYPE FFA, GAMETYPE CUSTOM, OPT1, OPT2, OPT3, ETC...)
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

if($_SESSION['register_flag']==0){
$regdata = "INSERT INTO reglist (brawlid,server,elo) VALUES ('{$_SESSION['brawlid']}','{$_SESSION['server']}','{$_SESSION['elo']}')";
if ($info->query($regdata) === TRUE) { $_SESSION['register_flag']=1;}
}
?>