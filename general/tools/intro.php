
                <div class="row">
                    <div class="col-lg-12 text-center">
						<h1>Intro</h1><br>
						<p>
							Welcome to the world of Brawlhalla!<br><br>
							The general guides are here to serve as an introduction for the basic information
							every player needs to develope their general skills.  In this section we will explore
							the basic information needed to understand these guides.  If you already have 
							a general understanding of the controls and terminology, feel free to skip this Intro.  
							Click on a category's title to view details.
						</p>
						<h4 class="btn btn-lg btn-default" onclick="ctrls()">Controls</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="legends();">Legend Intro</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="gm();">Game Modes - A Brief Overview</h4></a>
						<hr>
						<div class="row text-center" id="putstuffhere">
							<br><br><br><br><br><br><br><br><br><br><br><br>
						</div>
                    </div>

<script>
	function ctrls(){
		document.getElementById("putstuffhere").innerHTML = 
			"<h3>Controls</h3><br>" +
			"<p>Mastery of the following controls are all that's needed to start fighting in Brawlhalla:<br><b>Light Attack<br>Heavy Attack"+
			"<br>Dodge<br>Throw Item<br>Up<br>Down<br>Left<br>Right<br>Jump</b><br><br>-To view or change the keys, click on \"Technical Options\"&rarr;\"Controls\"&rarr;"+
			"\"Change Controls\". This is found on the top right corner or your Main Menu screen.<br>"+
			"-Directions can be used together to create diagonals for movement or aiming thrown Gadgets.<br>"+
			"-<b>Up</b> can be used soley for aiming, or also for jumping.  (Recommended soley for aiming)<br>"+
			"-<b>Light Attack</b> or <b>Throw Item</b> may be used to pick up Gadgets.  (Recommended <b>Light Attack</b> does <b>not</b> pick up Gadgets)</p><br><br>";
	}
	
	function legends(){
		document.getElementById("putstuffhere").innerHTML = 
			"<h3>Legend Intro</h3><br>" +
			 
			"<div id=\"navbar\" class=\"navbar-collapse collapse\">"+
			"<ul class=\"nav navbar-nav\">"+
			"<li><img class=\"ada\" title=\"Ada\" src=\"/images/blankimg.png\"/></li>"+
			"<li><img class=\"asu\" title=\"Asuri\" src=\"/images/blankimg.png\" /></li>"+
			"<li><img class=\"azo\" title=\"Azoth\" src=\"/images/blankimg.png\" /></li>"+
			"<li><img class=\"bar\" title=\"Barraza\" src=\"/images/blankimg.png\" /></li>"+
			"<li><img class=\"bod\" title=\"B&#246;dvar\" src=\"/images/blankimg.png\" /></li>"+
			"<li><img class=\"bry\" title=\"Brynn\" src=\"/images/blankimg.png\" /></li>"+
			"<li><img class=\"cas\" title=\"Cassidy\" src=\"/images/blankimg.png\" /></li>"+
			"<li><img class=\"emb\" title=\"Ember\" src=\"/images/blankimg.png\" /></li>"+
			"<li><img class=\"gna\" title=\"Gnash\" src=\"/images/blankimg.png\" /></li>"+
			"<li><img class=\"koj\" title=\"Koji\" src=\"/images/blankimg.png\" /></li>"+
			"<li><img class=\"vra\" title=\"Lord Vraxx\" src=\"/images/blankimg.png\" /></li>"+
			"<li><img class=\"luc\" title=\"Lucien\" src=\"/images/blankimg.png\" /></li>"+
			"<li><img class=\"ori\" title=\"Orion\" src=\"/images/blankimg.png\" /></li>"+
			"<li><img class=\"nai\" title=\"Queen Nai\" src=\"/images/blankimg.png\" /></li>"+
			"<li><img class=\"sca\" title=\"Scarlet\" src=\"/images/blankimg.png\" /></li>"+
			"<li><img class=\"sen\" title=\"Sentinel\" src=\"/images/blankimg.png\" /></li>"+
			"<li><img class=\"rol\" title=\"Sir Roland\" src=\"/images/blankimg.png\" /></li>"+
			"<li><img class=\"ter\" title=\"Teros\" src=\"/images/blankimg.png\" /></li>"+
			"<li><img class=\"tha\" title=\"Thatch\" src=\"/images/blankimg.png\" /></li>"+
			"</ul>"+
			"</div>"+
			"<p>Brawlhalla has a selection of 20 Legends, as well as a Random option.  All Legends have the same attacks while "+
			 "unarmed, and can use two different weapons.  Each Legend has <b>Signature Attacks</b> unique to the Legend and weapon.  "+
			 "<b>Signatures</b> can be done by using <b>Heavy Attack</b> while weilding a weapon on the ground or after a gravity cancel.  "+
			 "Each Legend also has four stats: <b>strength</b>, <b>dexterity</b>, <b>armor</b>, and <b>speed</b>.</p><br><br>"+
			 "<h4>Statistics</h4>"+
			 "Strength:  Affects damage and knockback<br>"+
			 "Dexterity:  Affects recovery and heavy attack execution speed<br>"+
			 "Armor:  Affects damage and knockback taken<br>"+
			 "Speed:  Affects movement speed<br><br>"+
			 "<h4>Legend/Weapon Combinations</h4>"+
			 "Ada: Spear/Blasters<br>"+
			 "Asuri: Sword/Katars<br>"+
			 "Azoth: Axe/Bow<br>"+
			 "Barraza: Axe/Blasters<br>"+
			 "B&#246;dvar: Sword/Hammer<br>"+
			 "Brynn: Spear/Axe<br>"+
			 "Cassidy: Hammer/Blasters<br>"+
			 "Ember: Bow/Katars<br>"+
			 "Gnash: Spear/Hammer<br>"+
			 "Koji: Bow/Sword<br>"+
			 "Lord Vraxx: Rocket Lance/Blasters<br>"+
			 "Lucien: Katars/Blasters<br>"+
			 "Orion: Rocket Lance/Spear<br>"+
			 "Queen Nai: Spears/Katars<br>"+
			 "Scarlet: Rocket Lance/Hammer<br>"+
			 "Sentinel: Hammer/Katars<br>"+
			 "Sir Roland: Sword/Rocket Lance<br>"+
			 "Teros: Hammer/Axe<br>"+
			 "Thatch: Sword/Blasters<br><br><br>";
	}
	
	function gm(){
	document.getElementById("putstuffhere").innerHTML = 
		"<h3>Game Modes - A Brief Overview</h3><br>" +
		"<p><b>Couch Party - Offline with friends</b><br>"+
		"-Use multiple controllers to play with friends and bots<br>"+
		"-BrawlKing does not condone drinking games while playing this mode<br>"+
		"-Specifically, anything like <a href=\"https://www.reddit.com/r/smashbros/comments/2caah2/what_is_your_favorite_smash_bros_drinking_game/cjdijki\""+
		"target=\"_new\">this</a>.<br><br>"+
		"<b>Single Player - Tournament, Versus Bots, Training</b><br>"+
		"-Great for practicing for combos for ranked or when you're tired of dealing with people<br>"+
		"-Also great for making all the .gifs on BrawlKing!<br><br>"+
		"<b>Online - The \"Casual\" mode of Brawlhalla</b><br>"+
		"-Four players enter, four players leave... One player wins.<br>"+
		"-Timed game for points (a.k.a. \"Use your Signature on the guy with the most damage\")<br><br>"+
		"<b>Custom Online - The Go-To for sparring with friends.</b><br>"+
		"-The only option to play with more than one friend at a time online.<br>"+
		"-Choose your game mode options<br><br>"+
		"<b>Ranked</b><br>"+
		"-1v1 and 2v2 battle for ELO<br>"+
		"-Choose your server location in <b>settings</b>"+
		"<br><br></p>";
	}
	
	function videos(){
	document.getElementById("putstuffhere").innerHTML = 
		"<h3>Video Starter Resource</h3><br>" +
		"<p>This section is included for those that don't do the read words to learn thing good."+
		"Below you'll find a video created for people like you.  You lazy bastards. (Highly recommended watch for beginners!)<br><br>"+
		"PartOfTheCreed's Beginner's Guide to Brawlhalla<br>"+
		"<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/WQ8mH1g6Dyw\" frameborder=\"0\" allowfullscreen></iframe>"+
		"<br><br> </p>";
	}
	</script>
