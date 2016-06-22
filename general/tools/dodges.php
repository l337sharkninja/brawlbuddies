
                <div class="row">
                    <div id="info-container" class="col-lg-12" align="center">
						<h1>Jumps and Dodges</h1><br>
						<p>
							This section contains a brief overview and images of basic <b>jumps</b>, <b>dodges</b>, and <b>gravity cancel</b> techniques.  
							Jumps, dodges, and gravity cancel techniques are an essential part of Brawlhalla.  They can be used for positioning, avoiding damage, and 
							most importantly: returning to platforms after knock-offs.  Basic jumps are fairly self explanitory, so let's *ahem* <i>jump</i> right past them.
						</p>
						<h4 class="btn btn-lg btn-default" onclick="dodge()">Dodging</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="jump();">Advanced Jumps</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="gc();">Gravity Cancelling</h4></a>
						<div class="row text-center" id="putstuffhere">
							<br><br><br><br>
						</div>
						<div class="row text-center" id="putstuffhere2">
							<br><br><br><br><br><br><br><br><br><br><br><br>
						</div>
                    </div>
	<script>
	function dodge(){
		document.getElementById("putstuffhere").innerHTML = 
			"<hr><h2>Dodging</h2>"+
			"Dodges can be performed on the ground or in the air.  Any direction can be used while dodging as well as in the neutral postion.  "+
			"Dodging has a cooldown of 3 seconds while in the air or on the edge of the map.  This cooldown is reduced "+
			"by 1.5 seconds when on the ground.  Dodges can be cast <i>after</i> being hit to cancel the knockback.<br><br>"+
			"<h4 class=\"btn btn-lg btn-default\" onclick=\"gdodge()\">Ground Dodges</h4></a>&nbsp;"+
			"<h4 class=\"btn btn-lg btn-default\" onclick=\"adodge()\">Air Dodges</h4></a>";
		
		document.getElementById("putstuffhere2").innerHTML = 
			"<br><br><br><br>";
		}
	
	function gdodge(){
		document.getElementById("putstuffhere2").innerHTML = 
			"<hr><h3>Ground Dodges</h3>"+
			"<br><b>Neutral<br>"+
			"<img src=\"/images/gif-library/dodges/dgn.gif\"/><br>"+
			
			"<br>Side<br>"+
			"<img src=\"/images/gif-library/dodges/dgs.gif\"/><br>"+
			
			"<br>Up</b><br>"+
			"<img src=\"/images/gif-library/dodges/dgu.gif\"/><br>";
	}
	
	function adodge(){
		document.getElementById("putstuffhere2").innerHTML = 
			"<hr><h3>Air Dodges</h3>"+
			"<br><b>Neutral<br>"+
			"<img src=\"/images/gif-library/dodges/dan.gif\"/><br>"+
			
			"<br>Side<br>"+
			"<img src=\"/images/gif-library/dodges/das.gif\"/><br>"+
			
			"<br>Down<br>"+
			"<img src=\"/images/gif-library/dodges/dad.gif\"/><br>"+
			
			"<br>Up</b><br>"+
			"<img src=\"/images/gif-library/dodges/dau.gif\"/><br>";
	}
	
	
	function jump(){
		document.getElementById("putstuffhere").innerHTML = 
			"<hr><h2>Advanced Jumps</h2>"+
			"A legend can jump up to three times in a row.  A legend turns dark whenever they run out of jumps.  A dodge can be used any time during these jumps.  "+
			"An <b>air neutral heavy</b> attack can be used after your three jumps are used for an extra up motion.  <b>Air neutral heavy</b> "+
			"attacks may be used as jumps, but WARNING! you lose out on one up motion by doing this.  Check out the gifs below "+
			"for a better understanding.<br><br>"+
			"<h4 class=\"btn btn-lg btn-default\" onclick=\"advjump()\">Jump Examples</h4></a>";
		
		document.getElementById("putstuffhere2").innerHTML = 
			"<br><br><br><br>";
	}
	
	function advjump(){
		document.getElementById("putstuffhere2").innerHTML = 
			"<hr><h3>Jump Examples</h3><br>"+
			"<b>Standard Jump Combo</b><br>"+
			"<img src=\"/images/gif-library/dodges/j_basic.gif\"/><br>"+
			"-A dodge may be used any time during this process<br><br>"+
			
			"<b>Edge Jumps</b><br>"+
			"<img src=\"/images/gif-library/dodges/j_edge.gif\"/><br>"+
			"-There is no limit on time spent on the edge of the map.<br><br>"+
			
			"<b>Neutral Heavy Jump Replacement</b><br>"+
			"<img src=\"/images/gif-library/dodges/j_uh.gif\"/><br>";
	}

	function gc(){
		document.getElementById("putstuffhere").innerHTML = 
			"<hr><h2>Gravity Cancelling</h2>"+
			"<b>Gravity Cancelling</b> is a necessity to climb the ladder.  To perform a gravity cancel "+
			"simply execute an <b>Air Neutral Dodge</b>, followed immediately by any attack combination you "+
			"would perform on the ground.  <b>Gravity Cancelling</b> can be combined with any ground attack "+
			"whether you have a weapon or your legend is unarmed.  See examples below.<br><br>"+
			"<h4 class=\"btn btn-lg btn-default\" onclick=\"uagc()\">Unarmed Examples</h4></a>&nbsp;"+
			"<h4 class=\"btn btn-lg btn-default\" onclick=\"wgc()\">Weapon Examples</h4></a>";
		
		document.getElementById("putstuffhere2").innerHTML = 
			"<br><br><br><br>";
	}
	
	
	function uagc(){
		document.getElementById("putstuffhere2").innerHTML = 
			"<hr><h3>Unarmed Examples</h3><br>"+
			"<b>Neutral Light</b><br>"+
			"<img src=\"/images/gif-library/dodges/gc_nl.gif\"/><br>"+
			"-This isn't a move used in a typical fight, but great to start practicing.<br><br>"+
						
			"<b>Neutral Heavy<br>"+
			"<img src=\"/images/gif-library/dodges/gc_nh.gif\"/><br><br>"+

			"Side Heavy<br>"+
			"<img src=\"/images/gif-library/dodges/gc_sh.gif\"/><br><br>"+
			
			"Down Heavy</b><br>"+
			"<img src=\"/images/gif-library/dodges/gc_dh.gif\"/><br><br>";
	}
	
	function wgc(){
		document.getElementById("putstuffhere2").innerHTML = 
			"<hr><h3>Weapon Examples</h3><br>"+
			"<b>Neutral Heavy<br>"+
			"<img src=\"/images/gif-library/dodges/gc_wnh.gif\"/><br><br>"+

			"Side Heavy<br>"+
			"<img src=\"/images/gif-library/dodges/gc_wsh.gif\"/><br><br>"+
			
			"Down Heavy</b><br>"+
			"<img src=\"/images/gif-library/dodges/gc_wdh.gif\"/><br><br>";
	}
	
	</script>