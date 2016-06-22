<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
echo <<< EOT
<img class="btn-default server1" onclick="cacheProfile(3,1,0)" title="US-EAST" src="/images/blankimg.png"/>
<img class="btn-default server2" onclick="cacheProfile(3,2,0)" title="US-WEST" src="/images/blankimg.png"/>
<img class="btn-default server3" onclick="cacheProfile(3,3,0)" title="EU" src="/images/blankimg.png"/>
<img class="btn-default server4" onclick="cacheProfile(3,4,0)" title="BR" src="/images/blankimg.png"/>
<img class="btn-default server5" onclick="cacheProfile(3,5,0)" title="AUS" src="/images/blankimg.png"/>
<img class="btn-default server6" onclick="cacheProfile(3,6,0)" title="SEA" src="/images/blankimg.png"/>
<button onclick="cacheProfile(3,0,-1)" title="Clear My Servers" id="cancelprofileservers" type="button" class="text-center btn-warning btn btn-lg">X</button><br><br>
EOT;
?>