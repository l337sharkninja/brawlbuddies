<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
echo <<< EOT
<img onclick="cacheProfile(1,1,0)" class="btn-default ada4" title="Ada" src="/images/blankimg.png"/>
<img onclick="cacheProfile(1,2,0)" class="btn-default asu4" title="Asuri" src="/images/blankimg.png" />
<img onclick="cacheProfile(1,18,0)" class="btn-default azo4" title="Azoth" src="/images/blankimg.png" />
<img onclick="cacheProfile(1,3,0)" class="btn-default bar4" title="Barraza" src="/images/blankimg.png" />
<img onclick="cacheProfile(1,4,0)" class="btn-default bod4" title="B&#246;dvar" src="/images/blankimg.png" />
<img onclick="cacheProfile(1,5,0)" class="btn-default bry4" title="Brynn" src="/images/blankimg.png" />
<img onclick="cacheProfile(1,6,0)" class="btn-default cas4" title="Cassidy" src="/images/blankimg.png" />
<img onclick="cacheProfile(1,7,0)" class="btn-default emb4" title="Ember" src="/images/blankimg.png" />
<img onclick="cacheProfile(1,8,0)" class="btn-default gna4" title="Gnash" src="/images/blankimg.png" />
<img onclick="cacheProfile(1,19,0)" class="btn-default hat4" title="Hattori" src="/images/blankimg.png" />
<img onclick="cacheProfile(1,20,0)" class="btn-default koj4" title="Koji" src="/images/blankimg.png" />
<img onclick="cacheProfile(1,9,0)" class="btn-default vra4" title="Lord Vraxx" src="/images/blankimg.png" />
<img onclick="cacheProfile(1,10,0)" class="btn-default luc4" title="Lucien" src="/images/blankimg.png" />
<img onclick="cacheProfile(1,11,0)" class="btn-default ori4" title="Orion" src="/images/blankimg.png" />
<img onclick="cacheProfile(1,12,0)" class="btn-default nai4" title="Queen Nai" src="/images/blankimg.png" />
<img onclick="cacheProfile(1,13,0)" class="btn-default sca4" title="Scarlet" src="/images/blankimg.png" />
<img onclick="cacheProfile(1,14,0)" class="btn-default sen4" title="Sentinel" src="/images/blankimg.png" />
<img onclick="cacheProfile(1,15,0)" class="btn-default rol4" title="Sir Roland" src="/images/blankimg.png" />
<img onclick="cacheProfile(1,16,0)" class="btn-default ter4" title="Teros" src="/images/blankimg.png" />
<img onclick="cacheProfile(1,17,0)" class="btn-default tha4" title="Thatch" src="/images/blankimg.png" />
<button onclick="cacheProfile(1,0,-1)" title="Clear My Legends" id="cancelprofilelegends" type="button" class="text-center btn-warning btn btn-lg">X</button><br><br>
EOT;
?>