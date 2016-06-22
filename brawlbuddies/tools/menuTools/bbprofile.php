<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}

echo <<< EOT
<div class="form-group col-lg-5 text-center filterbox filteritems">
	<div id="navbar" class="navbar-collapse collapse filteritems">
	<ul class="nav navbar-nav">
	<li><img onclick="cacheFilter(1,1,0)" class="btn-default ada4" title="Ada" src="/images/blankimg.png"/></li>
	<li><img onclick="cacheFilter(1,2,0)" class="btn-default asu4" title="Asuri" src="/images/blankimg.png" /></li>
	<li><img onclick="cacheFilter(1,18,0)" class="btn-default azo4" title="Azoth" src="/images/blankimg.png" /></li>
	<li><img onclick="cacheFilter(1,3,0)" class="btn-default bar4" title="Barraza" src="/images/blankimg.png" /></li>
	<li><img onclick="cacheFilter(1,4,0)" class="btn-default bod4" title="B&#246;dvar" src="/images/blankimg.png" /></li>
	<li><img onclick="cacheFilter(1,5,0)" class="btn-default bry4" title="Brynn" src="/images/blankimg.png" /></li>
	<li><img onclick="cacheFilter(1,6,0)" class="btn-default cas4" title="Cassidy" src="/images/blankimg.png" /></li>
	<li><img onclick="cacheFilter(1,7,0)" class="btn-default emb4" title="Ember" src="/images/blankimg.png" /></li>
	<li><img onclick="cacheFilter(1,8,0)" class="btn-default gna4" title="Gnash" src="/images/blankimg.png" /></li>
	<li><img onclick="cacheFilter(1,19,0)" class="btn-default hat4" title="Gnash" src="/images/blankimg.png" /></li>
	<li><img onclick="cacheFilter(1,20,0)" class="btn-default koj4" title="Koji" src="/images/blankimg.png" /></li>
	<li><img onclick="cacheFilter(1,9,0)" class="btn-default vra4" title="Lord Vraxx" src="/images/blankimg.png" /></li>
	<li><img onclick="cacheFilter(1,10,0)" class="btn-default luc4" title="Lucien" src="/images/blankimg.png" /></li>
	<li><img onclick="cacheFilter(1,11,0)" class="btn-default ori4" title="Orion" src="/images/blankimg.png" /></li>
	<li><img onclick="cacheFilter(1,12,0)" class="btn-default nai4" title="Queen Nai" src="/images/blankimg.png" /></li>
	<li><img onclick="cacheFilter(1,13,0)" class="btn-default sca4" title="Scarlet" src="/images/blankimg.png" /></li>
	<li><img onclick="cacheFilter(1,14,0)" class="btn-default sen4" title="Sentinel" src="/images/blankimg.png" /></li>
	<li><img onclick="cacheFilter(1,15,0)" class="btn-default rol4" title="Sir Roland" src="/images/blankimg.png" /></li>
	<li><img onclick="cacheFilter(1,16,0)" class="btn-default ter4" title="Teros" src="/images/blankimg.png" /></li>
	<li><img onclick="cacheFilter(1,17,0)" class="btn-default tha4" title="Thatch" src="/images/blankimg.png" /></li>
	</ul>
	</div>
</div>

<div class="form-group col-lg-5 text-center filterbox filteritems">
	<div id="navbar" class="navbar-collapse collapse filteritems">
	<ul class="nav navbar-nav">
	<li><img onclick="cacheFilter(2,1,0)" class="btn-default spar" title="1v1 Competitive Sparring Partner" src="/images/blankimg.png"/></li>
	<li><img onclick="cacheFilter(2,2,0)" class="btn-default ffa" title="Online FFA Partner" src="/images/blankimg.png"/></li>
	<li><img onclick="cacheFilter(2,3,0)" class="btn-default duo" title="2v2 Competitive Ranked Duo" src="/images/blankimg.png" /></li>
	<li><img onclick="cacheFilter(2,4,0)" class="btn-default teamspar" title="2v2 Competitive Team Sparring" src="/images/blankimg.png" /></li>
	<li><img onclick="cacheFilter(2,5,0)" class="btn-default custom" title="Custom Online (Snowbrawl, Brawlball, 8-player, etc)" src="/images/blankimg.png" /></li>
	</ul>
	</div>
</div>

<div class="form-group col-lg-5 text-center filterbox filteritems">
	<div id="navbar" class="navbar-collapse collapse filteritems">
	<ul class="nav navbar-nav">
	<li onclick="cacheFilter(3,1,0)" class="serverhover"><img class="btn-default server1" title="US-EAST" src="/images/blankimg.png"/></li>
	<li onclick="cacheFilter(3,2,0)" class="serverhover"><img class="btn-default server2" title="US-WEST" src="/images/blankimg.png"/></li>
	<li onclick="cacheFilter(3,3,0)" class="serverhover"><img class="btn-default server3" title="EU" src="/images/blankimg.png"/></li>
	<li onclick="cacheFilter(3,4,0)" class="serverhover"><img class="btn-default server4" title="BR" src="/images/blankimg.png"/></li>
	<li onclick="cacheFilter(3,5,0)" class="serverhover"><img class="btn-default server5" title="AUS" src="/images/blankimg.png"/></li>
	<li onclick="cacheFilter(3,6,0)" class="serverhover"><img class="btn-default server6" title="SEA" src="/images/blankimg.png"/></li>
	</ul>
	</div>
</div>
EOT;
?>