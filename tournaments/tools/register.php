<div class='info-box row'>
<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
if(isset($_SESSION['steamid'])){
	echo "include('displayTools/deets.php');";
	include('displayTools/registerstatus.php');
	echo "include('displayTools/participants.php');";
}else{
	echo "include('displayTools/deets.php');<br>";
	echo "Log in through steam to register<br>";
	echo "include('displayTools/participants.php');";
}
?>
</div>