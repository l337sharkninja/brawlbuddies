<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
echo <<< EOT
<img class="btn-default server1" onclick="cacheFilter(3,1,0)" title="US-EAST" src="/images/blankimg.png"/>
<img class="btn-default server2" onclick="cacheFilter(3,2,0)" title="US-WEST" src="/images/blankimg.png"/>
<img class="btn-default server3" onclick="cacheFilter(3,3,0)" title="EU" src="/images/blankimg.png"/>
<img class="btn-default server4" onclick="cacheFilter(3,4,0)" title="BR" src="/images/blankimg.png"/>
<img class="btn-default server5" onclick="cacheFilter(3,5,0)" title="AUS" src="/images/blankimg.png"/>
<img class="btn-default server6" onclick="cacheFilter(3,6,0)" title="SEA" src="/images/blankimg.png"/>

EOT;
?>