<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}

echo <<< EOT
<div class="btn-group" role="group" aria-label="...">
  <button id="home" type="button" class="btn btn-lg btn-default">Tournaments</button>
  <button id="schedule" type="button" class="btn btn-lg btn-default">Schedule & Registration</button>
  <button id="rules" type="button" class="btn btn-lg btn-default">Rules</button>
  <button id="tourny" type="button" class="btn btn-lg  btn-default">Tournament Day</button>
EOT;

if(isset($_SESSION['steamid'])){
	if($_SESSION['userData'][0]['brawlid']==5){
		echo '<button id="admin" type="button" class="btn btn-lg btn-default">Admin Tools</button>';
	}
}
echo <<< EOT
</div><br>
EOT;

?>