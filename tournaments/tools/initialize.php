<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}

if(!isset($_SESSION['steamid'])){$_SESSION['elo']=1200;}else{include ('steamauth/userInfo.php');}

//sql for pulling tables

//initialize user data
if(isset($_SESSION['steamid'])){require('../tools/getUL.php');}
/*
//initialize user elo from brawlhalla.com/rankings
if(isset($_SESSION['steamid'])){require('../tools/getELO.php');}

//e-mail if ELO failure
if(isset($_SESSION['steamid'])){if($_SESSION['elo']<500){
$to = "brawlking@brawlking.com";
$sub = "ELO problem detected...";
$msg = "elo error brawlid={$_SESSION['userData'][0]['brawlid']}";
mail($to,$sub,$msg, null,'-fbrawlking@brawlking.com');}}
*/
//initialize tourny data
require('../tools/getTL.php');

?>
