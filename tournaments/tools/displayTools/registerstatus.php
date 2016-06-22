<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
//ENABLE/DISABLE PROFILE BUTTON
$registerclass = '';
if(isset($_SESSION['steamid'])){
	if($_SESSION['userChal'][0]['reg1']==1){$registerclass='btn-success'; $registerTitle='title="You are currently registered for this tournament."';}
	else{$registerclass='btn-danger'; $registerTitle='title="You are not registered for this tournament."';}}

echo <<< EOT
<div class='btn-group' style='padding-left:15px;padding-bottom:15px' role='group' aria-label="...">
	<button id='profilestatus' {$registerTitle} class='text-center btn btn-lg {$registerclass}'>Tournament Registration Status</button>
	<button title="Register for Tournament." id="regtourny()" type="button" class="text-center btn-success btn btn-lg">O</button>
	<button title="Unregister from Tournament." id="profilenodisplay" type="button" class="text-center btn-danger btn btn-lg">X</button>
</div>
EOT;
?>


<script>

$("#profiledisplay").click(function(){cacheProfile(777,0,0);});
$("#profilenodisplay").click(function(){cacheProfile(-1,0,0);});

</script>