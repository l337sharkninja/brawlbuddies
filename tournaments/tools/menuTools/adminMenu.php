<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}

echo <<< EOT
<div class="btn-group" role="group" aria-label="...">
  <button id="create" onclick="create();" type="button" class="btn btn-lg btn-default">Create Tournament</button>
  <button id="edit" onclick="edit();" type="button" class="btn btn-lg btn-default">View/Edit Tournament</button>
</div><br>
EOT;

?>


<script>
function create(){
$('#section2').show().load('tools/adminTools/createForm.php');
}

function edit(){
$('#section2').show().load('tools/adminTools/editForm.php');
}
</script>