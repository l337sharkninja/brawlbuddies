<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
require('menuTools/resetFilter.php');
if(!isset($_SESSION['steamid'])){$_SESSION['elo']=1200;}else{include ('steamauth/userInfo.php');}
//if $_SESSION['bbinitialize'] is not set
	

//sql for pulling tables
//initialize users data
if(isset($_SESSION['steamid'])){require('../tools/getUL.php');}

//initialize users data
if(isset($_SESSION['steamid'])){require('../tools/getELO.php');}

//initilialize mail
if(isset($_SESSION['steamid'])){require('../tools/getUM.php');}

//e-mail if ELO failure
if(isset($_SESSION['steamid'])){if($_SESSION['elo']<500){
$to = "brawlking@brawlking.com";
$sub = "ELO problem detected...";
$msg = "elo error brawlid={$_SESSION['userData'][0]['brawlid']}";
mail($to,$sub,$msg, null,'-fbrawlking@brawlking.com');}}

	

	//initialize brawl buddies data
require('../tools/getRL.php');
require('cacheList.php');
$_SESSION['bbinitialize']=1;
?>
