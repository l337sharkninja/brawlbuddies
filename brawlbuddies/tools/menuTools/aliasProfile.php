<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}

echo <<< EOT
<h3>Alias:</h3>
<input type='text' maxlength=24 id='aliasinput' class='text-center btn-lg' value="{$_SESSION['userReg']['alias']}">
<h3>Reddit:</h3>
<input type='text' maxlength=24 id='redditinput' class='text-center btn-lg' value="{$_SESSION['userReg']['reddit']}"><br><br>
<button title="Submit Alias and Reddit Username" id="submitalias" type="button" class="text-center btn-default btn btn-lg">Submit</button><br><br>
EOT;

?>