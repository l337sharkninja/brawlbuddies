<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
echo <<< EOT
<img onclick="cacheFilter(2,1,0)" class="btn-default spar" title="1v1 Competitive Sparring Partner" src="/images/blankimg.png"/>
<img onclick="cacheFilter(2,2,0)" class="btn-default ffa" title="Online FFA Partner" src="/images/blankimg.png"/>
<img onclick="cacheFilter(2,3,0)" class="btn-default duo" title="2v2 Competitive Ranked Duo" src="/images/blankimg.png" />
<img onclick="cacheFilter(2,4,0)" class="btn-default teamspar" title="2v2 Competitive Team Sparring" src="/images/blankimg.png" />
<img onclick="cacheFilter(2,5,0)" class="btn-default custom" title="Custom Online (Snowbrawl, Brawlball, 8-player, etc)" src="/images/blankimg.png" />

EOT;
?>