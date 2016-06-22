
                <div id="image-container" class="row text-center">
					<h1>Unarmed Combat</h1>
                    <div class="col-lg-12 text-center">
						<p>The bread and butter of damage output.  Knowing how to output damage while unarmed is a necessity for any Legend in Brawlhalla.  
						Different attacks are produced by pressing <b>Light Attack</b> or <b>Heavy Attack</b> simultaneously with a direction.  Attacks can 
						be made without pressing the direction key to produce <b>Neutral</b> attacks.  A <b>neutral</b> attack is produced when using 
						any direction not listed in the combinations below.</p><hr>
					</div>
					<div class="col-lg-6 text-center">
						
						<h3><b>Ground Attacks</b></h3>
						<h4 class="btn btn-lg btn-default" onclick="glight();">Light Attacks</h4>
						<h4 class="btn btn-lg btn-default" onclick="gheavy();">Heavy Attacks</h4>
						
					</div>

					<div class="col-lg-6 text-center">
						
						<h3><b>Air Attacks</b></h3>
						
						<h4 class="btn btn-lg btn-default" onclick="alight();">Light Attacks</h4>
						<h4 class="btn btn-lg btn-default" onclick="aheavy();">Heavy Attacks</h4>

					</div>
					<div class="col-lg-12 text-center"  style="font-weight:bold">
						<hr>
						<div class="row text-center" id="putstuffhere">
						<br><br><br><br><br><br><br><br><br><br><br><br><br>
						</div>
					</div><!-- /.row -->
					
				</div><!-- /.image container -->


	
	<!-- image enlarger-->
	<script>
	function glight(){
		document.getElementById("putstuffhere").innerHTML = 
				"<h3>Ground Light Attacks</h3>"+
				"<br><br>Neutral<br>"+
				"<img src=\"/images/gif-library/unarmed/ua_gnl.gif\"/>"+

				"<br><br>Neutral (On Hit)"+
				"<br><img src=\"/images/gif-library/unarmed/ua_gnl_hit.gif\"/>"+

				"<br><br>Side"+
				"<br><img src=\"/images/gif-library/unarmed/ua_gsl.gif\"/>"+

				"<br><br>Down"+
				"<br><img src=\"/images/gif-library/unarmed/ua_gdl.gif\"/>";
	}
	
	function gheavy(){
		document.getElementById("putstuffhere").innerHTML =
				"<h3>Ground Heavy Attacks</h3>"+
				"<br><br>Neutral"+
				"<br><img src=\"/images/gif-library/unarmed/ua_gnh.gif\"/>"+

				"<br><br>Side"+
				"<br><img src=\"/images/gif-library/unarmed/ua_gsh.gif\"/>"+

				"<br><br>Down"+
				"<br><img src=\"/images/gif-library/unarmed/ua_gdh.gif\"/>";
	}
	
	function alight(){
		document.getElementById("putstuffhere").innerHTML =
				"<h3>Air Light Attacks</h3>"+

				"<br><br>Neutral"+
				"<br><img src=\"/images/gif-library/unarmed/ua_anl.gif\"/>"+

				"<br><br>Side"+
				"<br><img src=\"/images/gif-library/unarmed/ua_asl.gif\"/>"+

				"<br><br>Down"+
				"<br><img src=\"/images/gif-library/unarmed/ua_adl.gif\"/>";
	}
	
		
	function aheavy(){
		document.getElementById("putstuffhere").innerHTML =
				"<h3>Air Heavy Attacks</h3>"+
				"<br><br>Neutral"+
				"<br><img src=\"/images/gif-library/unarmed/ua_anh.gif\"/>"+

				"<br><br>Down"+
				"<br><img src=\"/images/gif-library/unarmed/ua_adh.gif\"/>";
	}
	
	</script>
	