<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
//include("tools/config.php");
//include("tools/getGuides.php");



echo <<< EOT
<div class="btn-group" role="group" aria-label="...">
  <button  title="GIF Library - Home" id="intro" class="btn btn-lg btn-default">GIF Library</button>
  <button  title="Unarmed GIFs" id="unarmed" class="btn btn-lg btn-default">Unarmed</button>
  <button  title="All Weapon GIFs" id="weapons" class="btn btn-lg btn-default">Weapons</button>
  <button  title="All Legend GIFs" id="legends" class="btn btn-lg btn-default">Legends</button>
  <button  title="Combo/String GIFs" id="combos" class="btn btn-lg btn-default">Combos</button>
  <button  title="Jumps and Dodge GIFs" id="jumps" class="btn btn-lg btn-default">Jumps & Dodges</button>
  <button  title="Gadget Mechanics GIFs" id="gadgets" class="btn btn-lg btn-default">Gadgets</button>
  <button  title="Realm Images" id="realms" class="btn btn-lg btn-default">Realms</button>
</div>
EOT;
?>