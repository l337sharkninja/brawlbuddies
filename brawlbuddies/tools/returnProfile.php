<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
//ENABLE/DISABLE PROFILE BUTTON
$registerclass = '';
if(isset($_SESSION['steamid'])){
	if($_SESSION['userReg']['isRegistered']==1){$registerclass='btn-success'; $registerTitle='title="You are currently listed on Brawl Buddies."';}
	else{$registerclass='btn-danger'; $registerTitle='title="You are not listed on Brawl Buddies."';}}

echo <<< EOT
<div class='btn-group' style='position:absolute;right:0;padding-left:15px;padding-bottom:15px' role='group' aria-label="...">
	<button id='profilestatus' {$registerTitle} class='text-center btn btn-lg {$registerclass}'>Profile Status</button>
	<button title="Display Profile on Brawl Buddies" id="profiledisplay" type="button" class="text-center btn-success btn btn-lg">O</button>
	<button title="Do Not Display Profile on Brawl Buddies" id="profilenodisplay" type="button" class="text-center btn-danger btn btn-lg">X</button>
</div>
EOT;

//DISPLAY USER PROFILE
if($_SESSION['userReg']['isRegistered']==1){
require('../../tools/tes.php');

//CHECK TO MAKE SURE ALL CATEGORIES ARE SELECTED
if($_SESSION['userReg']['legend1']==0){echo "<br><br><br><h3>You must select at least one legend from the 'Legends' tab before your profile can be displayed.</h3><br><br><br>";}
elseif($_SESSION['userReg']['server1']==0){echo "<br><br><br><h3>You must select at least one server from the 'Servers' tab before your profile can be displayed.</h3><br><br><br>";}
elseif($_SESSION['userReg']['spar']==0 && $_SESSION['userReg']['duo']==0 && $_SESSION['userReg']['teamspar']==0 && $_SESSION['userReg']['custom']==0 && $_SESSION['userReg']['ffa']==0){
echo "<br><br><br><h3>You must select at least one game type from the 'Game Types' tab before your profile can be displayed.</h3><br><br><br>";}

//DISPLAY PROFILE IF ALL ITEMS HAVE BEEN SELECTED
else{
//ALIAS AND ELO
echo <<< EOT
<br><br><br>
<h2 class="text-center">{$_SESSION['userReg']['alias']} - 
ELO: {$_SESSION['userReg']['elo']}</h2>

EOT;

//LEFT ARROW
echo <<< EOT
<div class='fixedbox text-center col-lg-5'>
EOT;
//LEGENDS
$legendname = $_SESSION['userReg']['legend1'];
require("mainDecode.php");
echo <<< EOT
<img class='box1' src="/images/blankimg.png"/>
<img class='box12' src="/images/blankimg.png"/>
<img class='{$legendcode}1' title="{$legendtitle}" src="/images/blankimg.png"/>
EOT;
if($_SESSION['userReg']['legend2']>0){
$legendname = $_SESSION['userReg']['legend2'];
require("mainDecode.php");
echo <<< EOT
<img class='box2' src="/images/blankimg.png"/>
<img class='{$legendcode}2' title="{$legendtitle}" src="/images/blankimg.png"/>
EOT;
}
if($_SESSION['userReg']['legend3']>0){
$legendname = $_SESSION['userReg']['legend3'];
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
if($_SESSION['userReg']['spar'] == 1){
	echo "<img class='spar' title='1v1 Competitive Sparring Partner' src='/images/blankimg.png'/>";}
if($_SESSION['userReg']['ffa'] == 1){
	echo "<img class='ffa' title='Online FFA Partner' src='/images/blankimg.png'/>";}
if($_SESSION['userReg']['duo'] == 1){
	echo "<img class='duo' title='2v2 Competitive Duo Partner' src='/images/blankimg.png'/>";}
if($_SESSION['userReg']['teamspar'] == 1){
	echo "<img class='teamspar' title='2v2 Competitive Team Sparring' src='/images/blankimg.png'/>";}
if($_SESSION['userReg']['custom'] == 1){
	echo "<img class='custom' title='Custom Online (Snowbrawl, Brawlball, 8-player, etc)' src='/images/blankimg.png'/>";}
$time_elapsed = time_elapsed_string($_SESSION['userReg']['lasttime']); //The argument $time_ago is in timestamp (Y-m-d H:i:s)format.
echo <<< EOT
<br>Last Brawl Buddies Login: <small><b>{$time_elapsed}</b></small>
</div>
<div class="col-lg-5 text-center fixedbox">
EOT;
//SERVERS
require("serverDecode.php");
$profileservertitle = "Main Server: {$profileservertitle1}";
if($profileservertitle2 != "" || $profileservertitle3 != ""){ $profileservertitle .= "| Alt Server(s): {$profileservertitle2} {$profileservertitle3}";}
echo <<< EOT
<img class='server1_{$_SESSION['userReg']['server1']}' title='{$profileservertitle}' src="/images/blankimg.png"/>
EOT;
if($profileservertitle2!=""){
echo <<< EOT
<img class='server2_{$_SESSION['userReg']['server2']}' title='{$profileservertitle}' src="/images/blankimg.png"/>
EOT;
}
if($profileservertitle3!=""){
echo <<< EOT
<img class='server3_{$_SESSION['userReg']['server3']}' title='{$profileservertitle}' src="/images/blankimg.png"/>
EOT;
}
echo <<< EOT
</div>
<div class="col-lg-12 text-center row">
<a href="http://steamcommunity.com/profiles/{$_SESSION['steamid']}" target="_blank"><h4 style="margin: 5px 10px;" class="btn btn-lg btn-default text-center">Add on Steam</h4></a>
EOT;
if($_SESSION['userReg']['reddit']!=""){
echo <<< EOT
<a href="http://reddit.com/u/{$_SESSION['userReg']['reddit']}" target="_blank"><h4 style="margin: 5px 10px;" class="btn btn-lg btn-default text-center">Msg on Reddit</h4></a>
</div>
EOT;

}else{echo "</div>";}}}else{echo "<br><br><br><h2>Your profile is currently disabled.<br>Click on the green circle button to enable your profile.</h2><br><br><br>";}

/*
if($_SESSION['counter']==0){
<h3><span class="error">This list is currently empty.</span></h3>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>}
*/
?>

<script>

$("#profiledisplay").click(function(){cacheProfile(777,0,0);});
$("#profilenodisplay").click(function(){cacheProfile(-1,0,0);});

</script>