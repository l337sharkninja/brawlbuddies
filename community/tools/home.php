<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
//include("tools/config.php");
//include("tools/getGuides.php");



echo <<< EOT
<div class="btn-group" role="group" aria-label="...">
  <button id="home" type="button" class="btn btn-lg btn-default">Community Guides Home</button>
  <button  title="Search Guides" id="searchindex" class="btn btn-lg btn-default">Filter Options</button>
EOT;
if(!isset($_SESSION['steamid'])){
echo <<< EOT
<button type="button" class="btn btn-lg disabled" title="Log in through steam to access.">Submit a Guide</button>
<button type="button" class="btn btn-lg disabled" title="Log in through steam to access.">View/Edit My Guides</button>
EOT;
}else{
echo <<< EOT
<button type="button" title="Submit a Guide" id="submitguideindex" class="btn btn-lg btn-default">Submit a Guide</button>
<button type="button" title="View/Edit My Guides" id="myguidesindex" class="btn btn-lg btn-default">View/Edit My Guides</button>
EOT;
}
echo <<< EOT
</div>
EOT;
?>