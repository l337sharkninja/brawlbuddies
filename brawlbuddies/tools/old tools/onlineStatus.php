<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
$servername = "localhost";
$username = "BrawlBuddy";
$password = "Brawl123!";
$dbname = "brawlbuddiesinfo";
$info = new mysqli($servername, $username, $password, $dbname);
if ($info->connect_error) {
    die("Connection failed: " . $info->connect_error);
}
$info->real_query("SELECT * FROM userlist WHERE brawlid = {$primaryData[$i]['brawlid']}");
$res = $info->use_result();
$userInfo = $res->fetch_assoc();
$url = file_get_contents("http://api.steampowered.com/ISteamUser/GetPlayerSummaries/v0002/?key=2E87029E30D3288009BFC48120FC62E9&steamids=".$userInfo['steamid']);
$content = json_decode($url, true);
$isVisible = $content['response']['players'][0]['communityvisibilitystate'];
$onlineStatus = $content['response']['players'][0]['personastate'];

?>