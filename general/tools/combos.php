
                <div class="row">
                    <div class="col-lg-12 text-center">
						<h1>Combos</h1><br>
						<p>Combos are any string of attacks that are executed before an enemy can recover.  Your damage can easily be doubled, tripled, or more for every 
						opening your enemy leaves you.  Psuedo-combos are strings of attacks that are executed, but your enemy has the possibility to dodge in between.  
						These can be just as useful if your enemy's dodge is down, or if he makes a mistake and misses a dodge opportunity.  Below are some basic examples of 
						combos and psuedo combos for unarmed attacks and a few select weapons.  Please check out the <b>Additional Resources</b> tab for links to 
						unlisted weapons or more advanced combos.</p>
						<h4 class="btn btn-lg btn-default" onclick="ua()">Unarmed</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="blasters();">Blasters</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="hammer();">Hammer</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="katar();">Katar</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="lance();">Rocket Lance</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="spear();">Spear</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="sword();">Sword</h4></a>
						<div class="row text-center" id="putstuffhere">
							<br><br><br><br><br><br><br><br><br><br><br><br><br>
						</div>
                    </div>

<script>
		
	function ua(){
		document.getElementById("putstuffhere").innerHTML = 
		"<hr><h3>Unarmed Combos/Strings</h3>" +
		"Note positioning before and after for each combo.<br><br>" +
		"<b>Ground Down Light &rarr; Air Neutral Light</b><br>" +
		"<img src=\"/images/gif-library/combos/ua_gdl_anl.gif\"/><br><br>" +
		"<b>Ground Down Light &rarr; Air Down Light</b><br>" +
		"<img src=\"/images/gif-library/combos/ua_gdl_adl.gif\"/><br><br>" +
		"<b>Ground Down Light &rarr; Air Side Light &rarr; Air Side Light</b><br>" +
		"<img src=\"/images/gif-library/combos/ua_gdl_asl_asl.gif\"/><br><br>" +
		"<b>Air Side Light &rarr; Ground Down Light &rarr; Air Neutral Light</b><br>" +
		"<img src=\"/images/gif-library/combos/ua_asl_gdl_anl.gif\"/><br><br>";
		}
		
	function blasters(){
		document.getElementById("putstuffhere").innerHTML = 
		"<hr><h3>Blasters Combos/Strings</h3><br>" +
		"<b>Ground Down Light &rarr; Ground Side Light</b><br>" +
		"<img src=\"/images/gif-library/combos/bl_gdl_gsl.gif\"/><br>-Works for any position.<br><br>" +
		"<b>Ground Down Light &rarr; Ground Neutral Light</b><br>" +
		"<img src=\"/images/gif-library/combos/bl_gdl_gnl.gif\"/><br>-Specific positioning needed for full combo, but very high damage output.<br><br>";
		}
	function hammer(){
		document.getElementById("putstuffhere").innerHTML = 
		"<hr><h3>Hammer Combos/Strings</h3><br>" +
		"<b>Ground Down Light &rarr; Air Side Light</b><br>" +
		"<img src=\"/images/gif-library/combos/h_gdl_asl.gif\"/><br><br>";
		}
	function katar(){
		document.getElementById("putstuffhere").innerHTML = 
		"<hr><h3>Katars Combos/Strings</h3><br>" +
		"<b>Air Down Light &rarr; Ground Neutral Light &rarr; Air Neutral Light</b><br>" +
		"<img src=\"/images/gif-library/combos/ka_adl_gnl_anl.gif\"/><br><br>";
		}
	function spear(){
		document.getElementById("putstuffhere").innerHTML = 
		"<hr><h3>Spear Combos/Strings</h3>" +
		"Note positioning before and after for each combo.<br><br>" +
		"<b>Ground Down Light &rarr; Air Side Light</b><br>" +
		"<img src=\"/images/gif-library/combos/sp_gdl_asl.gif\"/><br><br>" +
		"<b>Ground Side Light &rarr; Air Side Light</b><br>" +
		"<img src=\"/images/gif-library/combos/sp_gsl_asl.gif\"/><br><br>" +
		"<b>Ground Side Light &rarr; Ground Side Light</b><br>" +
		"<img src=\"/images/gif-library/combos/sp_gsl_gsl.gif\"/><br>-Note the delay between attacks<br><br>" +
		"<b>Ground Side Light &rarr; Air Down Light</b><br>" +
		"<img src=\"/images/gif-library/combos/sp_gsl_adl.gif\"/><br><br>" +
		"<b>Ground Side Light &rarr; Ground Down Light &rarr; Air Side Light</b><br>" +
		"<img src=\"/images/gif-library/combos/sp_gsl_gdl_asl.gif\"/><br><br>";
		}
	function lance(){
		document.getElementById("putstuffhere").innerHTML = 
		"<hr><h3>Rocket Lance Combos/Strings</h3>" +
		"There is plenty of room for combos and pseudos for the Rocket Lance.  Experiment, and don't be afraid to try <b>Gravity Cancel</b> signature after a combo.<br><br>"+
		"<b>Ground Side Light &rarr; Air Side Light</b><br>" +
		"<img src=\"/images/gif-library/combos/rl_gsl_asl.gif\"/><br><br>" +
		"<b>Ground Side Light &rarr; Air Down Light &rarr; Grown Side Light</b><br>" +
		"<img src=\"/images/gif-library/combos/rl_gsl_adl_gsl.gif\"/><br><br>" +
		"<b>Air Down Light &rarr; Ground Side Light &rarr; Air Neutral Heavy</b><br>" +
		"<img src=\"/images/gif-library/combos/rl_adl_gsl_anh.gif\"/><br><br>";
		}
	function sword(){
		document.getElementById("putstuffhere").innerHTML = 
		"<hr><h3>Sword Combos/Strings</h3>" +
		"<b>Ground Down Light &rarr; Air Side Light</b><br>" +
		"<img src=\"/images/gif-library/combos/sw_gdl_asl.gif\"/><br><br>";

		}
</script>
