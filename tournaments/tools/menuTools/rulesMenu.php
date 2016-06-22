<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}

echo <<< EOT
<div class="btn-group" role="group" aria-label="...">
  <button id="tournyrules" type="button" class="btn btn-lg btn-default">Tournament Rules</button>
  <button id="conduct" type="button" class="btn btn-lg btn-default">Code of Conduct</button>
</div><br>
EOT;

?>