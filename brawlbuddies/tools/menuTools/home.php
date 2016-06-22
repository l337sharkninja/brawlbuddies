<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}

echo <<< EOT
<div class="btn-group" role="group" aria-label="...">
  <button id="home" type="button" class="btn btn-lg btn-default">Brawl Buddies Home</button>
  <button id="filter" type="button" class="btn btn-lg btn-default">Filter Options</button>
EOT;
if(!isset($_SESSION['steamid'])){
echo <<< EOT
<button type="button" class="btn btn-lg disabled" title="Log in through steam to access.">My Profile</button>
EOT;
}else{
echo <<< EOT
<button id="profile" type="button" class="btn btn-lg  btn-default">My Profile</button>
EOT;
}
echo <<< EOT
</div><br>
EOT;
?>