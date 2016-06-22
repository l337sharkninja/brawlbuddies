<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
require('tools/getRegInfo.php');
echo "<h3>Preview My Brawl Buddies Profile</h3><hr>";
echo "<div class=\"form-group col-lg-12 text-center\">";

echo "<div class=\"form-group col-lg-6 text-left\">";
//Alias: 
echo "<h2  class=\"text-center\">".$_SESSION['alias']." - ELO: ".$_SESSION['elo']."<br>";
echo "</h2>";
$legendname = $_SESSION['main'];
echo "<h4>Legend(s):</h4>";
require("tools/mainDecode.php");
echo "<img height=130 width=130 src=\"images/new/box.png\" style=\"vertical-align:bottom;\"/>";
echo "<img height=130 width=130 src=\"images/new/".$legendcode.".png\" style=\"vertical-align:bottom;margin-left:-130px;\"/>";

if($_SESSION['alt1']>0){
$legendname = $_SESSION['alt1'];
require("tools/mainDecode.php");
echo "<img height=130 width=130 src=\"images/new/box.png\" style=\"vertical-align:bottom;\"/>";
echo "<img height=130 width=130 src=\"images/new/".$legendcode.".png\" style=\"vertical-align:bottom;margin-left:-130px;\"/>";
}

if($_SESSION['alt2']>0){
$legendname = $_SESSION['alt2'];
require("tools/mainDecode.php");
echo "<img height=130 width=130 src=\"images/new/box.png\" style=\"vertical-align:bottom;\"/>";
echo "<img height=130 width=130 src=\"images/new/".$legendcode.".png\" style=\"vertical-align:bottom;margin-left:-130px;\"/>";
}
echo "<br><a href=\"http://steamcommunity.com/profiles/{$_SESSION['steamid']}\" target=\"_blank\"><h4 class=\"btn btn-lg btn-default text-center\">Add on Steam</h4></a>";
echo "<a onclick=\"\"><h4 class=\"btn btn-lg btn-default text-center\">Brawl Msg</h4></a>";
if($_SESSION['reddit']!=""){
echo "<a href=\"http://reddit.com/u/".$_SESSION['reddit']."\" target=\"_blank\"><h4 class=\"btn btn-lg btn-default text-center\">Msg on Reddit</h4></a>";
}
echo "</div>";

echo "<div class=\"form-group col-lg-6 text-center\">";
echo "<h3>Searching For:</h3><p>";
$alternate = 0;
for($jj=0;$jj<7;$jj++){
if($jj==0){
if($_SESSION['opt3'] == 1){if($alternate==1){echo "| ";} echo "<img height=19 width=20 src='images/check.png'/>";
echo " 1v1 Sparring ";if($alternate==1){echo "<br>";$alternate=0;}else{$alternate=1;}}}
if($jj==1){
if($_SESSION['gt2'] == 1){if($alternate==1){echo "| ";} echo "<img height=19 width=20 src='images/check.png'/>";
echo " FFA Partner ";if($alternate==1){echo "<br>";$alternate=0;}else{$alternate=1;}}}
if($jj==2){
if($_SESSION['opt6'] == 1){if($alternate==1){echo "| ";} echo "<img height=19 width=20 src='images/check.png'/>";
echo " 2v2 Partner ";if($alternate==1){echo "<br>";$alternate=0;}else{$alternate=1;}}}
if($jj==3){
if($_SESSION['opt7'] == 1){if($alternate==1){echo "| ";} echo "<img height=19 width=20 src='images/check.png'/>";
echo " 2v2 Team Sparring ";if($alternate==1){echo "<br>";$alternate=0;}else{$alternate=1;}}}
if($jj==4){
if($_SESSION['opt12'] == 1){if($alternate==1){echo "| ";} echo "<img height=19 width=20 src='images/check.png'/>";
echo " Brawlball ";if($alternate==1){echo "<br>";$alternate=0;}else{$alternate=1;}}}
if($jj==5){
if($_SESSION['opt13'] == 1){if($alternate==1){echo "| ";} echo "<img height=19 width=20 src='images/check.png'/>";
echo " Bombsketball ";if($alternate==1){echo "<br>";$alternate=0;}else{$alternate=1;}}}
if($jj==6){
if($_SESSION['opt14'] == 1){if($alternate==1){echo "| ";} echo "<img height=19 width=20 src='images/check.png'/>";
echo " Snowbrawl ";if($alternate==1){echo "<br>";$alternate=0;}else{$alternate=1;}}}
}

echo "<h3>Server:</h3>";
echo "<img width=150  height=100 src=\"images/server_".$_SESSION['server'].".jpg\"/><br>";

$url = file_get_contents("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=2E87029E30D3288009BFC48120FC62E9&steamids=".$_SESSION['steamid']);
$content = json_decode($url, true);
$isVisible = $content['response']['players'][0]['communityvisibilitystate'];
$onlineStatus = $content['response']['players'][0]['personastate'];
if($isVisible==3){
	if($onlineStatus==0){echo "<br><img width='125' height='40' src=\"images/offline.png\"/>";}else{
	echo "<br><img width='125' height='40' src=\"images/online.png\"/>";
	}
}

echo "</div></div>";


?>