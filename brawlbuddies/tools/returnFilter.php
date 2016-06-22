<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}

require('../../tools/tes.php');
if(isset($_SESSION['cacheList'])){
//ALIAS AND ELO
echo <<< EOT
<div class='text-center col-lg-12 row' style='position:relative;'>
<h2 class="text-center">{$_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['alias']} - 
ELO: {$_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['elo']}</h2>
</div>
EOT;

//LEFT ARROW
echo <<< EOT
<div class='fixedbox text-center col-lg-5'>
EOT;
//LEGENDS
$legendname = $_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['legend1'];
require("mainDecode.php");
echo <<< EOT
<img class='box1' src="/images/blankimg.png"/>
<img class='box12' src="/images/blankimg.png"/>
<img class='{$legendcode}1' title="{$legendtitle}" src="/images/blankimg.png"/>
EOT;
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['legend2']>0){
$legendname = $_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['legend2'];
require("mainDecode.php");
echo <<< EOT
<img class='box2' src="/images/blankimg.png"/>
<img class='{$legendcode}2' title="{$legendtitle}" src="/images/blankimg.png"/>
EOT;
}
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['legend3']>0){
$legendname = $_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['legend3'];
require("mainDecode.php");
echo <<< EOT
<img class='box3'  src="/images/blankimg.png"/>
<img class='{$legendcode}3' title="{$legendtitle}" src="/images/blankimg.png"/>
EOT;
}
//GAME TYPES
echo <<< EOT
</div>
<div class="col-lg-2 text-center fixedbox">

EOT;
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['spar'] == 1){
	echo "<img class='spar' title='1v1 Competitive Sparring Partner' src='/images/blankimg.png'/>";}
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['ffa'] == 1){
	echo "<img class='ffa' title='Online FFA Partner' src='/images/blankimg.png'/>";}
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['duo'] == 1){
	echo "<img class='duo' title='2v2 Competitive Duo Partner' src='/images/blankimg.png'/>";}
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['teamspar'] == 1){
	echo "<img class='teamspar' title='2v2 Competitive Team Sparring' src='/images/blankimg.png'/>";}
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['custom'] == 1){
	echo "<img class='custom' title='Custom Online (Snowbrawl, Brawlball, 8-player, etc)' src='/images/blankimg.png'/>";}
$time_elapsed = time_elapsed_string($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['lasttime']); //The argument $time_ago is in timestamp (Y-m-d H:i:s)format.
echo <<< EOT
<br>Last Brawl Buddies Login: <small><b>{$time_elapsed}</b></small>
</div>
<div class="col-lg-5 text-center fixedbox">
EOT;
//SERVERS
require("serverDecode.php");
$servertitle = "Main Server: {$servertitle1}";
if($servertitle2 != "" || $servertitle3 != ""){ $servertitle .= "| Alt Server(s): {$servertitle2} {$servertitle3}";}
echo <<< EOT
<img class='server1_{$_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['server1']}' title='{$servertitle}' src="/images/blankimg.png"/>
EOT;
if($servertitle2!=""){
echo <<< EOT
<img class='server2_{$_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['server2']}' title='{$servertitle}' src="/images/blankimg.png"/>
EOT;
}
if($servertitle3!=""){
echo <<< EOT
<img class='server3_{$_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['server3']}' title='{$servertitle}' src="/images/blankimg.png"/>
EOT;
}
echo <<< EOT
</div>
<div class="col-lg-12 text-center row" style="position:relative;">
<a onclick="addbuddy({$_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['brawlid']});"><h4 style="margin: 5px 10px;" class="btn btn-lg btn-default text-center">Add on Steam</h4></a>
EOT;
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['reddit']!=""){
echo <<< EOT
<a href="http://reddit.com/u/{$_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['reddit']}" target="_blank"><h4 style="margin: 5px 10px;" class="btn btn-lg btn-default text-center">Msg on Reddit</h4></a>
</div>
EOT;
}else{echo "</div>";}
}else{echo "<br><br><br><h3>No buddies were found with these parameters.<br>Modify or clear current filters to find more buddies.<br><br><br><br>";}

/*
if($_SESSION['counter']==0){
<h3><span class="error">This list is currently empty.</span></h3>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>}
*/
?>