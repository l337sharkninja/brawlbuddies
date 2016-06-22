<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
$elomin = $_SESSION['elo']-300;
$elomax = $_SESSION['elo']+300;
echo <<< EOT
<input type='number' max='900' min='0' id='eloinput' class='text-center btn btn-lg' />
<button title="Submit ELO Filter" id="submitelo" type="button" class="text-center btn-success btn btn-lg">O</button>
<button title="Clear Filter" id="cancelelo" type="button" class="text-center btn-warning btn btn-lg">X</button><br>
<br>
<div class="text-center btn-group" role="group" aria-label="...">
<button id="eloMin" type="button" class="text-center btn btn-lg disabled">From: {$elomin} ELO</button>
<button id="eloMax" type="button" class="text-center btn btn-lg disabled">To: {$elomax} ELO</button>
</div>
EOT;
?>
<script>

</script>