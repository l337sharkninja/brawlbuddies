<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
echo <<< EOT
<h1>Current List of Participants:</h1>
for($-i;$-icount($-_SESSION['tourny1'][0]['bracket']);$-i++){
	List of people
}
<h3>Substitutes:</h3>
for($-i;$-icount($-_SESSION['tourny1'][0]['subs']);$-i++){
	List of subs
}
EOT;

?>