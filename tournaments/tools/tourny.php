<div class='info-box row'>
<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
$time=time();
if($time >= $_SESSION['tournyInfo']['nextTourny'][0]['tournytime']){
	if(isset($_SESSION['steamid'])){
		//IF TOURNAMENT DAY, SIGNED IN
		echo <<< EOT
		
Display User's Current Reg Status<br>
If check-in pending: offer check-in<br>
If check-in past: display disqualified<br>
If check-in current:<br>
-display groupchat & help chat<br>
--If ETA for check-in > 0:<br>
-display ETA for next match<br>
--Else:<br>
-display current opponent, room number<br>
-bantool/reportscore switch

EOT;
		
	}else{
		//IF TOURNAMENT DAY, NOT SIGNED IN
		echo "Sign into steam for check in!<hr>";
		include('displayTools/bracket.php');
		echo "<hr>";
		include('displayTools/standing.php');
	}
}else{
	//IF NOT TOURNAMENT DAY
	echo "<h1>The next tournament is...</h1>";
	$tournynum=0;$tournytype='nextTourny';include('displayTools/countdown.php');
	echo "<h1>Register and come back on tournament day to participate!</h1>";
}
?>
</div>
