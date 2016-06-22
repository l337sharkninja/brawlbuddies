<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}

if(isset($_SESSION['userReg'])){
	if($_SESSION['userReg']['eloMax']==0){
		$elomin = "No Min";
		$elomax = "No Max";
	}else{
		$elomin = $_SESSION['userReg']['eloMin']." ELO";
		$elomax = $_SESSION['userReg']['eloMax']." ELO";
	}
}


echo <<< EOT

<input type='number' max='900' min='0' id='profileeloinput' class='text-center btn btn-lg' />
<button title="Submit ELO Profile" id="submitprofileelo" type="button" class="text-center btn-success btn btn-lg">O</button>
<button title="Remove Limits on ELO Range" id="cancelprofileelo" type="button" class="text-center btn-warning btn btn-lg">X</button><br>
<br>
<div class="text-center btn-group" role="group" aria-label="...">
<button id="profileeloMin" type="button" class="text-center btn btn-lg disabled">From: {$elomin}</button>
<button id="profileeloMax" type="button" class="text-center btn btn-lg disabled">To: {$elomax}</button>
</div>

EOT;
?>