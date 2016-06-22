
                <div class="row">
                    <div class="col-lg-12 text-center">
						<h1>Legends</h1><br>
						<p>This section details the statistics and signature attacks for each legend.  Click below for details regarding that specific legend.</p>
						<h4 class="btn btn-lg btn-default" onclick="ada();leg();">Ada</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="asu();leg();">Asuri</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="azo();leg();">Azoth</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="bar();leg();">Barraza</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="bod();leg();">B&#246;dvar</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="bry();leg();">Brynn</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="cas();leg();">Cassidy</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="emb();leg();">Ember</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="gna();leg();">Gnash</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="koj();leg();">Koji</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="vra();leg();">Lord Vraxx</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="luc();leg();">Lucien</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="ori();leg();">Orion</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="nai();leg();">Queen Nai</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="sca();leg();">Scarlet</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="sen();leg();">Sentinel</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="rol();leg();">Sir Roland</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="ter();leg();">Teros</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="tha();leg();">Thatch</h4></a>
						<hr>
						<div class="row text-center" id="putstuffhere">
							<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
						</div>
                    </div>

<script>
function leg(){
	document.getElementById("putstuffhere").innerHTML = 
		
        "<div class=\"col-lg-12 text-center\"><h1>" + title + "</h1>"+
        "<div class=\"col-lg-6 text-right\">"+
		"<img class=\"" + name + "\" src=\"/images/blankimg.png\"/><br><br>"+
        "</div><div class=\"col-lg-6 text-left\">"+
		"<h4>Stats</h4>"+
		"<b>Strength</b>:  "+str+"<br>"+
		"<b>Dexterity</b>:  "+dex+"<br>"+
		"<b>Armor</b>:  "+arm+"<br>"+
		"<b>Speed</b>:  "+spd+"</div></div><br><br>"+
		"<hr><h2>Signature Attacks</h3>"+
		"<hr><b><h3>"+weapon1+"</h3>"+
		"<br>Neutral Heavy<br>"+
		"<img src=\"/images/gif-library/sigs/"+name+"_"+w1+"n.gif\"/><br><br>"+
		"Side Heavy<br>"+
		"<img src=\"/images/gif-library/sigs/"+name+"_"+w1+"s.gif\"/><br><br>"+
		"Down Heavy<br>"+
		"<img src=\"/images/gif-library/sigs/"+name+"_"+w1+"d.gif\"/><br><br><br>"+
		"<h3>"+weapon2+"</h3>"+
		"<br>Neutral Heavy<br>"+
		"<img src=\"/images/gif-library/sigs/"+name+"_"+w2+"n.gif\"/><br><br>"+
		"Side Heavy<br>"+
		"<img src=\"/images/gif-library/sigs/"+name+"_"+w2+"s.gif\"/><br><br>"+
		"Down Heavy<br>"+
		"<img src=\"/images/gif-library/sigs/"+name+"_"+w2+"d.gif\"/><br><br><br>";
	}

function ada(){
title = "Ada";
name = "ada";
str = "6";
dex = "7";
arm = "3";
spd = "6";
weapon1 = "Blasters";
weapon2 = "Spear";
w1 = "b";
w2 = "s";
}

function koj(){
title = "Koji";
name = "koj";
str = "5";
dex = "8";
arm = "4";
spd = "5";
weapon1 = "Bow";
weapon2 = "Sword";
w1 = "b";
w2 = "s";
}

function asu(){
title = "Asuri";
name = "asu";
str = "4";
dex = "7";
arm = "5";
spd = "6";
weapon1 = "Sword";
weapon2 = "Katars";
w1 = "s";
w2 = "k";
}

function azo(){
title = "Azoth";
name = "azo";
str = "7";
dex = "5";
arm = "6";
spd = "4";
weapon1 = "Axe";
weapon2 = "Bow";
w1 = "a2";
w2 = "b";
}

function bar(){
title = "Barraza";
name = "bar";
str = "6";
dex = "4";
arm = "8";
spd = "4";
weapon1 = "Blasters";
weapon2 = "Axe";
w1 = "b";
w2 = "a2";
}

function bod(){
title = "B&#246;dvar";
name = "bod";
str = "6";
dex = "6";
arm = "5";
spd = "5";
weapon1 = "Sword";
weapon2 = "Hammer";
w1 = "s";
w2 = "h";
}

function bry(){
title = "Brynn";
name = "bry";
str = "5";
dex = "5";
arm = "5";
spd = "7";
weapon1 = "Spear";
weapon2 = "Axe";
w1 = "s";
w2 = "a2";
}

function cas(){
title = "Cassidy";
name = "cas";
str = "6";
dex = "8";
arm = "4";
spd = "4";
weapon1 = "Blasters";
weapon2 = "Hammer";
w1 = "b";
w2 = "h";
}

function emb(){
title = "Ember";
name = "emb";
str = "6";
dex = "6";
arm = "3";
spd = "7";
weapon1 = "Bow";
weapon2 = "Katars";
w1 = "b1";
w2 = "k1";
}

function gna(){
title = "Gnash";
name = "gna";
str = "7";
dex = "3";
arm = "5";
spd = "7";
weapon1 = "Hammer";
weapon2 = "Spear";
w1 = "h";
w2 = "s";
}

function hat(){
title = "Hattori";
name = "hat";
str = "6";
dex = "7";
arm = "3";
spd = "6";
weapon1 = "Sword";
weapon2 = "Spear";
w1 = "sw";
w2 = "sp";
}

function luc(){
title = "Lucien";
name = "luc";
str = "3";
dex = "5";
arm = "6";
spd = "8";
weapon1 = "Blasters";
weapon2 = "Katars";
w1 = "b";
w2 = "k";
}

function nai(){
title = "Queen Nai";
name = "nai";
str = "7";
dex = "4";
arm = "8";
spd = "3";
weapon1 = "Spear";
weapon2 = "Katars";
w1 = "s";
w2 = "k";
}

function ori(){
title = "Orion";
name = "ori";
str = "4";
dex = "7";
arm = "6";
spd = "5";
weapon1 = "Rocket Lance";
weapon2 = "Spear";
w1 = "l";
w2 = "s";
}

function rol(){
title = "Sir Roland";
name = "rol";
str = "5";
dex = "5";
arm = "8";
spd = "4";
weapon1 = "Sword";
weapon2 = "Rocket Lance";
w1 = "s";
w2 = "l";
}

function sca(){
title = "Scarlet";
name = "sca";
str = "8";
dex = "5";
arm = "5";
spd = "4";
weapon1 = "Hammer";
weapon2 = "Rocket Lance";
w1 = "h";
w2 = "l";
}

function sen(){
title = "Sentinel";
name = "sen";
str = "5";
dex = "4";
arm = "7";
spd = "6";
weapon1 = "Katars";
weapon2 = "Hammer";
w1 = "k";
w2 = "h";
}

function ter(){
title = "Teros";
name = "ter";
str = "8";
dex = "3";
arm = "6";
spd = "5";
weapon1 = "Axe";
weapon2 = "Hammer";
w1 = "a";
w2 = "h";
}

function tha(){
title = "Thatch";
name = "tha";
str = "7";
dex = "5";
arm = "3";
spd = "7";
weapon1 = "Blasters";
weapon2 = "Sword";
w1 = "b";
w2 = "s";
}

function vra(){
title = "Lord Vraxx"
name = "vra";
str = "4";
dex = "8";
arm = "4";
spd = "6";
weapon1 = "Blasters";
weapon2 = "Rocket Lance";
w1 = "b";
w2 = "l";
}

</script>
