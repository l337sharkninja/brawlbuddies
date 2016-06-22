
                <div class="row">
                    <div class="col-lg-12 text-center">
						<h1>Weapons</h1><br>
						<p>Every legend has a unique combination of two weapons that can be picked up during a match.  
						Weapons spawn at random intervals and locations and disappear after about 20 seconds if not grabbed.  All weapons have the same attack patterns
						for all ground light attacks, air light attacks, and air heavy attacks.  
						Weapons can be thrown, but have a very short window to be picked up after they stop moving.  Click below for a basic introduction to each 
						weapon's general attack set.</p>
						<h4 class="btn btn-lg btn-default" onclick="axe();">Axe</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="blasters();">Blasters</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="bow();">Bow</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="hammer();">Hammer</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="katar();">Katar</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="lance();">Rocket Lance</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="spear();">Spear</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="sword();">Sword</h4></a>
						<hr>
						<div class="row text-center" id="putstuffhere">
							<br><br><br><br><br><br><br><br><br><br><br><br><br>
						</div>
                    </div>
                </div>
<script>
function axe(){
	document.getElementById("putstuffhere").innerHTML = 
		"<h3>Axe Intro</h3><br>" +
		"<b>Range</b>:  Med-Long<br>"+
		"<b>Speed</b>:  Slow<br>"+
		"<b>Damage</b>:  High<br><br>"+
		"<b>Used by Legends</b>:<br>-Barazza<br>-Brynn<br>-Teros<br>-Azoth<br><br>"+
		"<b>Notes</b>:<br>"+
		"-Large range and hitboxes, but equally long attack times<br>"+
		"-Ground Side Light is faster than Ground Side Neutral<br><br>"+
		
		"<b>Ground Neutral Light<br>"+
		"<img src=\"/images/gif-library/axe/ax_gnl.gif\"/><br><br>"+
		
		"Ground Side Light<br>"+
		"<img src=\"/images/gif-library/axe/ax_gsl.gif\"/><br><br>"+

		"Ground Down Light<br>"+
		"<img src=\"/images/gif-library/axe/ax_gdl.gif\"/><br><br>"+
		
		"Air Neutral Light<br>"+
		"<img src=\"/images/gif-library/axe/ax_anl.gif\"/><br><br>"+
		
		"Air Side Light<br>"+
		"<img src=\"/images/gif-library/axe/ax_asl.gif\"/><br><br>"+
		
		"Air Down Light<br>"+
		"<img src=\"/images/gif-library/axe/ax_adl.gif\"/><br><br>"+

		"Air Neutral Heavy<br>"+
		"<img src=\"/images/gif-library/axe/ax_anh.gif\"/><br><br>"+
		
		"Air Down Heavy</b><br>"+
		"<img src=\"/images/gif-library/axe/ax_adh.gif\"/><br><br>";
	}
	
function blasters(){
	document.getElementById("putstuffhere").innerHTML = 
		"<h3>Blasters Intro</h3><br>" +
		"<b>Range</b>:  Long<br>"+
		"<b>Speed</b>:  Fast<br>"+
		"<b>Damage</b>:  Medium<br><br>"+
		"<b>Used by Legends</b>:<br>-Ada<br>-Barazza<br>-Cassidy<br>-Lord Vraxx<br>-Lucien<br>-Thatch<br><br>"+
		"<b>Notes</b>:<br>"+
		"-Large range, fast attacks, but specific hitboxes<br>"+
		"-Great to keep an opponent at a distance, deadly if you fail to do so<br><br>"+
		
		"<b>Ground Neutral Light<br>"+
		"<img src=\"/images/gif-library/blasters/bl_gnl.gif\"/><br><br>"+
		
		"Ground Side Light<br>"+
		"<img src=\"/images/gif-library/blasters/bl_gsl.gif\"/><br><br>"+

		"Ground Down Light<br>"+
		"<img src=\"/images/gif-library/blasters/bl_gdl.gif\"/><br><br>"+
		
		"Air Neutral Light<br>"+
		"<img src=\"/images/gif-library/blasters/bl_anl.gif\"/><br><br>"+
		
		"Air Side Light<br>"+
		"<img src=\"/images/gif-library/blasters/bl_asl.gif\"/><br><br>"+
		
		"Air Down Light<br>"+
		"<img src=\"/images/gif-library/blasters/bl_adl.gif\"/><br><br>"+

		"Air Neutral Heavy<br>"+
		"<img src=\"/images/gif-library/blasters/bl_anh.gif\"/><br><br>"+
		
		"Air Down Heavy</b><br>"+
		"<img src=\"/images/gif-library/blasters/bl_adh.gif\"/><br><br>";
	}
	
	function bow(){
	document.getElementById("putstuffhere").innerHTML = 
		"<h3>Bow Intro</h3><br>" +
		"<b>Range</b>:  Med-Long<br>"+
		"<b>Speed</b>:  Fast<br>"+
		"<b>Damage</b>:  Med-Low<br><br>"+
		"<b>Used by Legends</b>:<br>-Ember<br>-Azoth<br>-Koji<br><br>"+
		"<b>Notes</b>:<br>"+
		"-Lower damager per attack with precise hit boxes, but amazing ability for combo attacks<br>"+
		"-An assortment of shorter and longer range attacks keep your enemy guessing<br><br>"+
		
		"<b>Ground Neutral Light<br>"+
		"<img src=\"/images/gif-library/bow/bo_gnl.gif\"/><br><br>"+
		
		"Ground Side Light<br>"+
		"<img src=\"/images/gif-library/bow/bo_gsl.gif\"/><br><br>"+

		"Ground Down Light<br>"+
		"<img src=\"/images/gif-library/bow/bo_gdl.gif\"/><br><br>"+
		
		"Air Neutral Light<br>"+
		"<img src=\"/images/gif-library/bow/bo_anl.gif\"/><br><br>"+
		
		"Air Side Light<br>"+
		"<img src=\"/images/gif-library/bow/bo_asl.gif\"/><br><br>"+
		
		"Air Down Light<br>"+
		"<img src=\"/images/gif-library/bow/bo_adl.gif\"/><br><br>"+

		"Air Neutral Heavy<br>"+
		"<img src=\"/images/gif-library/bow/bo_anh.gif\"/><br><br>"+
		
		"Air Down Heavy</b><br>"+
		"<img src=\"/images/gif-library/bow/bo_adh.gif\"/><br><br>";
	}
	
	function hammer(){
	document.getElementById("putstuffhere").innerHTML = 
		"<h3>Hammer Intro</h3><br>" +
		"<b>Range</b>:  Med-Long<br>"+
		"<b>Speed</b>:  Med<br>"+
		"<b>Damage</b>:  Med-High<br><br>"+
		"<b>Used by Legends</b>:<br>-B&#246;dvar<br>-Cassidy<br>-Gnash<br>-Scarlet<br>-Sentinel<br>-Teros<br><br>"+
		"<b>Notes</b>:<br>"+
		"-Large range and quick attacks can keep your enemies at range<br>"+
		"-Air Up Heavy and Air Down Light attacks will throw enemies away in the opposite direction<br><br>"+
		
		"<b>Ground Neutral Light<br>"+
		"<img src=\"/images/gif-library/hammer/h_gnl.gif\"/><br><br>"+
		
		"Ground Side Light<br>"+
		"<img src=\"/images/gif-library/hammer/h_gsl.gif\"/><br><br>"+

		"Ground Down Light<br>"+
		"<img src=\"/images/gif-library/hammer/h_gdl.gif\"/><br><br>"+
		
		"Air Neutral Light<br>"+
		"<img src=\"/images/gif-library/hammer/h_anl.gif\"/><br><br>"+
		
		"Air Side Light<br>"+
		"<img src=\"/images/gif-library/hammer/h_asl.gif\"/><br><br>"+
		
		"Air Down Light<br>"+
		"<img src=\"/images/gif-library/hammer/h_adl.gif\"/><br><br>"+

		"Air Neutral Heavy<br>"+
		"<img src=\"/images/gif-library/hammer/h_anh.gif\"/><br><br>"+
		
		"Air Down Heavy</b><br>"+
		"<img src=\"/images/gif-library/hammer/h_adh.gif\"/><br><br>";
	}
	
	function katar(){
	document.getElementById("putstuffhere").innerHTML = 
		"<h3>Katar Intro</h3><br>" +
		"<b>Range</b>:  Short<br>"+
		"<b>Speed</b>:  Fast<br>"+
		"<b>Damage</b>:  Med-Low<br><br>"+
		"<b>Used by Legends</b>:<br>-Asuri<br>-Ember<br>-Lucien<br>-Queen Nai<br>-Sentinel<br><br>"+
		"<b>Notes</b>:<br>"+
		"-Quick attacks with lots of combo options<br>"+
		"-Lack of range forces close quarter combat<br><br>"+
		
		"<b>Ground Neutral Light<br>"+
		"<img src=\"/images/gif-library/katar/kat_gnl.gif\"/><br><br>"+
		
		"Ground Side Light<br>"+
		"<img src=\"/images/gif-library/katar/kat_gsl.gif\"/><br><br>"+

		"Ground Down Light<br>"+
		"<img src=\"/images/gif-library/katar/kat_gdl.gif\"/><br><br>"+
		
		"Air Neutral Light<br>"+
		"<img src=\"/images/gif-library/katar/kat_anl.gif\"/><br><br>"+
		
		"Air Side Light<br>"+
		"<img src=\"/images/gif-library/katar/kat_asl.gif\"/><br><br>"+
		
		"Air Down Light<br>"+
		"<img src=\"/images/gif-library/katar/kat_adl.gif\"/><br><br>"+

		"Air Neutral Heavy<br>"+
		"<img src=\"/images/gif-library/katar/kat_anh.gif\"/><br><br>"+
		
		"Air Down Heavy</b><br>"+
		"<img src=\"/images/gif-library/katar/kat_adh.gif\"/><br><br>";
	}
	
	function lance(){
	document.getElementById("putstuffhere").innerHTML = 
		"<h3>Rocket Lance Intro</h3><br>" +
		"<b>Range</b>:  Med-Long<br>"+
		"<b>Speed</b>:  Med<br>"+
		"<b>Damage</b>:  Med-High<br><br>"+
		"<b>Used by Legends</b>:<br>-Lord Vraxx<br>-Orion<br>-Scarlet<br>-Sir Roland<br><br>"+
		"<b>Notes</b>:<br>"+
		"-A large array of forward charges accompanied by shorter range defensive attacks<br>"+
		"-Lacks 360&deg; defense, leaving opening at certain angles<br><br>"+
		
		"<b>Ground Neutral Light<br>"+
		"<img src=\"/images/gif-library/lance/rl_gnl.gif\"/><br><br>"+
		
		"Ground Side Light<br>"+
		"<img src=\"/images/gif-library/lance/rl_gsl.gif\"/><br><br>"+

		"Ground Down Light<br>"+
		"<img src=\"/images/gif-library/lance/rl_gdl.gif\"/><br><br>"+
		
		"Air Neutral Light<br>"+
		"<img src=\"/images/gif-library/lance/rl_anl.gif\"/><br><br>"+
		
		"Air Side Light<br>"+
		"<img src=\"/images/gif-library/lance/rl_asl.gif\"/><br><br>"+
		
		"Air Down Light<br>"+
		"<img src=\"/images/gif-library/lance/rl_adl.gif\"/><br><br>"+

		"Air Neutral Heavy<br>"+
		"<img src=\"/images/gif-library/lance/rl_anh.gif\"/><br><br>"+
		
		"Air Down Heavy</b><br>"+
		"<img src=\"/images/gif-library/lance/rl_adh.gif\"/><br><br>";
	}
	
	function spear(){
	document.getElementById("putstuffhere").innerHTML = 
		"<h3>Spear Intro</h3><br>" +
		"<b>Range</b>:  Med-Long<br>"+
		"<b>Speed</b>:  Med-Fast<br>"+
		"<b>Damage</b>:  Med-Low<br><br>"+
		"<b>Used by Legends</b>:<br>-Ada<br>-Brynn<br>-Gnash<br>-Hattori<br>-Orion<br>-Queen Nai<br><br>"+
		"<b>Notes</b>:<br>"+
		"-With good range and speed, the spear excels at poking and running<br>"+
		"-You <i>will</i> annoy the hell out of people with well placed Heavycopter (Heavy Air) attacks<br><br>"+
		
		"<b>Ground Neutral Light<br>"+
		"<img src=\"/images/gif-library/spear/sp_gnl.gif\"/><br><br>"+
		
		"Ground Side Light<br>"+
		"<img src=\"/images/gif-library/spear/sp_gsl.gif\"/><br><br>"+

		"Ground Down Light<br>"+
		"<img src=\"/images/gif-library/spear/sp_gdl.gif\"/><br><br>"+
		
		"Air Neutral Light<br>"+
		"<img src=\"/images/gif-library/spear/sp_anl.gif\"/><br><br>"+
		
		"Air Side Light<br>"+
		"<img src=\"/images/gif-library/spear/sp_asl.gif\"/><br><br>"+
		
		"Air Down Light<br>"+
		"<img src=\"/images/gif-library/spear/sp_adl.gif\"/><br><br>"+

		"Air Neutral Heavy<br>"+
		"<img src=\"/images/gif-library/spear/sp_anh.gif\"/><br><br>"+
		
		"Air Down Heavy</b><br>"+
		"<img src=\"/images/gif-library/spear/sp_adh.gif\"/><br><br>";
	}
	
	function sword(){
	document.getElementById("putstuffhere").innerHTML = 
		"<h3>Sword Intro</h3><br>" +
		"<b>Range</b>:  Med<br>"+
		"<b>Speed</b>:  Med-Fast<br>"+
		"<b>Damage</b>:  Med<br><br>"+
		"<b>Used by Legends</b>:<br>-Asuri<br>-B&#246;dvar<br>Koji<br>-Hattori<br>-Sir Roland<br>-Thatch<br><br>"+
		"<b>Notes</b>:<br>"+
		"-Range and damage are quite average, but speed and combos are where the sword excels<br><br>"+
		
		"<b>Ground Neutral Light<br>"+
		"<img src=\"/images/gif-library/sword/s_gnl.gif\"/><br><br>"+
		
		"Ground Side Light<br>"+
		"<img src=\"/images/gif-library/sword/s_gsl.gif\"/><br><br>"+

		"Ground Down Light<br>"+
		"<img src=\"/images/gif-library/sword/s_gdl.gif\"/><br><br>"+
		
		"Air Neutral Light<br>"+
		"<img src=\"/images/gif-library/sword/s_anl.gif\"/><br><br>"+
		
		"Air Side Light<br>"+
		"<img src=\"/images/gif-library/sword/s_asl.gif\"/><br><br>"+
		
		"Air Down Light<br>"+
		"<img src=\"/images/gif-library/sword/s_adl.gif\"/><br><br>"+

		"Air Neutral Heavy<br>"+
		"<img src=\"/images/gif-library/sword/s_anh.gif\"/><br><br>"+
		
		"Air Down Heavy</b><br>"+
		"<img src=\"/images/gif-library/sword/s_adh.gif\"/><br><br>";
		
	}
	
</script>
