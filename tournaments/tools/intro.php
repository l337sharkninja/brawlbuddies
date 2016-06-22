<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
?>

<div class='info-box row'>
<?php
$time=time();
if($time >= $_SESSION['tournyInfo']['nextTourny'][0]['tournytime']){
	include('displayTools/bracket.php');
	echo "<hr>";
	include('displayTools/standing.php');
}else{
	$tournynum=0;$tournytype='nextTourny';include('displayTools/countdown.php');
}
?>
</div>
<div class='info-box row'>
<?php
include('displayTools/about.php');
?>
</div>
<div class='info-box row'>
<?php
include('displayTools/leaderboard.php');
?>
</div>