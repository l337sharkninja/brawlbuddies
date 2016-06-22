<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}

echo <<< EOT
<div class="btn-group" role="group" aria-label="...">
  <button id="aprofile" title='My Alias and Reddit Username' type="button" class="btn btn-lg btn-primary">Alias/Reddit</button>
  <button id="lprofile" title='My Legend(s)' type="button" class="btn btn-lg btn-primary">Legends</button>
  <button id="gprofile" title='My Game Type(s)' type="button" class="btn btn-lg btn-primary">Game Types</button>
  <button id="sprofile" title='My Server Location(s)' type="button" class="btn btn-lg btn-primary">Servers</button>
  <button id="eprofile" title='My ELO Diplay Range' type="button" class="btn btn-lg btn-primary">ELO Range</button>
  <button title="Close My Profile Settings" id="closeprofile" type="button" class="text-center btn-warning btn btn-lg">X</button>
</div>
<br>
EOT;
?>
