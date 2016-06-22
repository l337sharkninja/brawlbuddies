<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}

echo <<< EOT
<div class="btn-group" role="group" aria-label="...">
  <button id="lfilter" title='Legend Filters' type="button" class="btn btn-lg btn-primary">Legend Filters</button>
  <button id="gfilter" title='Game Type Filters' type="button" class="btn btn-lg btn-primary">Game Type Filters</button>
  <button id="sfilter" title='Server Location Filters' type="button" class="btn btn-lg btn-primary">Server Filters</button>
  <button id="efilter" title='ELO Range Filter' type="button" class="btn btn-lg btn-primary">ELO Filters</button>
  <button title="Clear all Filters" id="cancelfilter" type="button" class="text-center btn-warning btn btn-lg">X</button>
</div><br>
EOT;
?>
