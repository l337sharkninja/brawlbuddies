
                <div class="row">
                    <div id="info-container" class="col-lg-12" align="center">
						<h1>Gadgets</h1><br>
						<p>
							Gadgets are a key element to Brawlhalla gameplay.  There are four different gadgets that periodically drop with items at random intervals and locations.  
							Gadgets include <b>Bouncy Bombs</b>, <b>Pressure Mines</b>, <b>Spike Balls</b>, and <b>Summoner Horns</b>.  Gadgets last approximately 20 seconds (when unused) before
							dissapearing.  All gadgets can be caught in mid-air, even when thrown from an opponent.
						</p>
						<h4 class="btn btn-lg btn-default" onclick="bb()">Bouncy Bomb</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="pm();">Pressure Mine</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="sb();">Spike Ball</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="sh();">Summoner Horn</h4></a>
						<div class="row text-center" id="putstuffhere">
							<br><br><br><br><br><br>
						</div>
						<div class="row text-center" id="putstuffhere2">
							<br><br><br><br><br><br><br><br><br><br><br><br>
						</div>
                    </div>
	<script>
	function bb(){
		document.getElementById("putstuffhere").innerHTML = 
		"<hr><img src=\"/images/gif-library/gadgets/bb.png\"/><h2>Bouncy Bomb</h2><br>"+
		"<b>Throw Damage</b>:  High<br>"+
		"<b>Knock-Back</b>:  High<br>"+
		"<b>Wall Bounce</b>:  High<br>"+
		"<b>Self Throw Damage</b>:  True<br><br>"+
		"<h4 class=\"btn btn-lg btn-default\" onclick=\"ebb()\">Examples</h4></a>";
		
		
		document.getElementById("putstuffhere2").innerHTML = 
			"<br><br><br><br>";
	}
	
		function ebb(){
		document.getElementById("putstuffhere2").innerHTML = 
		"<hr><h3>Bouncy Bomb - Examples</h3><br>"+
			"<br><b>Catching a Bouncy Bomb</b><br>"+
			"<img src=\"/images/gif-library/gadgets/bb_catch.gif\"/><br>"+
			
			"<br><b>Bouncy Bomb Hit on Enemy</b><br>"+
			"<img src=\"/images/gif-library/gadgets/bb_hit.gif\"/><br>"+
			
			"<br><b>Bouncy Bomb Hit on Self</b><br>"+
			"<img src=\"/images/gif-library/gadgets/bb_self.gif\"/><br>";
	}
	
	function pm(){
		document.getElementById("putstuffhere").innerHTML = 
		"<hr><img src=\"/images/gif-library/gadgets/pm.png\"/><h2>Pressure Mine</h2><br>"+
		"<b>Throw Damage</b>:  High<br>"+
		"<b>Knock-Back</b>:  High<br>"+
		"<b>Wall Bounce</b>:  None<br>"+
		"<b>Self Throw Damage</b>:  True<br><br>"+
		"<h4 class=\"btn btn-lg btn-default\" onclick=\"epm()\">Examples</h4></a>";
		
		
		document.getElementById("putstuffhere2").innerHTML = 
			"<br><br><br><br>";
	}
	
		function epm(){
		document.getElementById("putstuffhere2").innerHTML = 
		"<hr><h3>Pressure Mine - Examples</h3><br>"+
			"<br><b>Catching a Pressure Mine</b><br>"+
			"<img src=\"/images/gif-library/gadgets/pm_catch.gif\"/><br>"+
			
			"<br><b>Pressure Mine Hit on Enemy</b><br>"+
			"<img src=\"/images/gif-library/gadgets/pm_hit.gif\"/><br>"+
			
			"<br><b>Pressure Mine Plant on Ground</b><br>"+
			"<img src=\"/images/gif-library/gadgets/pm_stick.gif\"/><br>"+
			
			"<br><b>Pressure Mine Hit on Self</b><br>"+
			"<img src=\"/images/gif-library/gadgets/pm_self.gif\"/><br>";
	}
	
	function sb(){
		document.getElementById("putstuffhere").innerHTML = 
		"<hr><img src=\"/images/gif-library/gadgets/sb.png\"/><h2>Spike Ball</h2><br>"+
		"<b>Throw Damage*</b>:  Low - Medium<br>"+
		"<b>Knock-Back**</b>:  Medium - Very High<br>"+
		"<b>Wall Bounce</b>:  Low<br>"+
		"<b>Self Throw Damage</b>:  None<br>"+
		"<small><i>*note: depends on charge time and legend strength</i></small><br>"+
		"<small><i>**note: depends on time travelled through air</i></small><br><br>"+
		
		
		"<h4 class=\"btn btn-lg btn-default\" onclick=\"esb()\">Examples</h4></a>";
		
		document.getElementById("putstuffhere2").innerHTML = 
			"<br><br><br><br>";
	}
	
		function esb(){
		document.getElementById("putstuffhere2").innerHTML = 
		"<hr><h3>Spike Ball - Examples</h3><br>"+
			"<br><b>Catching a Spike Ball</b><br>"+
			"<img src=\"/images/gif-library/gadgets/sb_catch.gif\"/><br>"+
			
			"<br><b>Spike Ball Hit on Enemy</b><br>"+
			"<img src=\"/images/gif-library/gadgets/sb_hit.gif\"/><br>"+
			
			"<br><b>Spike Ball No Hit on Self</b><br>"+
			"<img src=\"/images/gif-library/gadgets/sb_self.gif\"/><br>";
	}
	
	function sh(){
		document.getElementById("putstuffhere").innerHTML = 
		"<hr><img src=\"/images/gif-library/gadgets/sh.png\"/><h2>Summoner Horn</h2><br>"+
		"<b>Throw Damage</b>:  None<br>"+
		"<b>Knock-Back</b>:  Very Low<br>"+
		"<b>Wall Bounce</b>:  None<br>"+
		"<b>Self Throw Damage</b>:  None<br><br>"+
		"<h4 class=\"btn btn-lg btn-default\" onclick=\"esh()\">Examples</h4></a>";
		
		
		document.getElementById("putstuffhere2").innerHTML = 
			"<br><br><br><br>";
	}
	
		function esh(){
		document.getElementById("putstuffhere2").innerHTML = 
		"<hr><h3>Summoner Horn - Examples</h3><br>"+
			"<br><b>Calling a Side-Kick using Summoner Horn</b><br>"+
			"<img src=\"/images/gif-library/gadgets/sh_cast.gif\"/><br>"+
			
			"<br><b>Summoner Horn Hit on Enemy</b><br>"+
			"<img src=\"/images/gif-library/gadgets/sh_hit.gif\"/><br>"+
			
			"<br><b>Summoner Horn No Hit on Self</b><br>"+
			"<img src=\"/images/gif-library/gadgets/sh_self.gif\"/><br>";
	}
	</script>
