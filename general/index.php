<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="View Brawlhalla guides and streams.  Find Brawl Buddies, information on the newest updates, and more!">
    <meta name="keywords" content="brawlhalla, find teams, guide, guides, info, information, twitch streams, streams, party, brawl buddies, friend finder, legends, maps, items, weapons, realms, combos">
	<meta name="author" content="Zachary Bagley">

    <title>Introduction to Brawlhalla - by BrawlKing!</title>

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/sb-admin.css" rel="stylesheet">

    <!-- SPRITE CSS -->
    <link href="/css/legends.css" rel="stylesheet">
    <link href="/css/menu.css" rel="stylesheet">
    <link href="/css/realm.css" rel="stylesheet">
    <link href="/css/servers.css" rel="stylesheet">
    <link href="/css/weapons.css" rel="stylesheet">
</head>

<body>
    <!-- jQuery -->
    <script src="/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>
	<script src="/js/myscript.js"></script>

<!-- PRELOAD IMAGES -->
<div id="preloader">
	<img src="/images/sprites/menusprites.png" width="1" height="1" />
	<img src="/images/sprites/realmsprites.jpg" width="1" height="1" />
	<img src="/images/sprites/legendsprites.png" width="1" height="1" />
	<img src="/images/sprites/serversprites.png" width="1" height="1" />
	<img src="/images/sprites/weaponsprites.png" width="1" height="1" />
</div>	

<!-- TOP MENU BAR -->
<nav class="navbar navbar-inverse navbar-static-top nav-box">
	<div class="container">
	<div class="navbar-header"> 
	<a class="navbar-brand myheader myheader" href="/">
		<img title="BrawlKing - Home" class="home" src="/images/blankimg.png">
	</a>
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>
	</div>
	<div id="navbar" class="navbar-collapse collapse">
		<ul class="nav navbar-nav">
		<li><a href="/brawlbuddies/"><img class="brawlbuddies" title="Brawl Buddies" src="/images/blankimg.png"/></a></li>
		<li><a href="/community/"><img class="guides" title="Community Guides" src="/images/blankimg.png" /></a></li>
		<li><a href="/streams.php"><img class="streams" title="Twitch Streams" src="/images/blankimg.png" /></a></li>
		<li><a href="/calendar.php"><img class="tournaments" title="Tournaments" src="/images/blankimg.png" /></a></li>
		<li><a href="/resources.php"><img class="resources" title="External Resources" src="/images/blankimg.png" /></a></li>
		<li><a href="/general/"><img class="library" title="GIF Library" src="/images/blankimg.png" /></a></li>
		<li><a href="/special.php"><img class="special" title="Special Thank You" src="/images/blankimg.png" /></a></li>
		</ul>
	</div><!--/.nav-collapse -->
	</div>
</nav>

<div class="container-fluid info-box"><div class="row text-box col-lg-12 text-center">

				<!-- 
				DIV LIST:
					homeimg
					searchimg
					menu1
					searchmenu
					searchadv
					returnsearc
					-->
				
				
				<!-- Top Portion -->
				<div id="menu1" class="text-left"> <?php include("tools/home.php"); ?> </div>
				
				
				
				
				<!-- Bot Portion -->
				<div id="returnsearch"><br></div>
				


                </div>
                <!-- /.row -->


            </div>
            <!-- /.container-fluid --><footer class="footer text-center"><a href="../privacy.php">privacy policy</a> / <a href="../contact.php">contact me</a></footer>

        </div>
        <!-- /#page-wrapper -->




<script>
$(document).ready(function(){
$("#intro").click(function(){$('#returnsearch').load('tools/intro.php');});
$("#unarmed").click(function(){$('#returnsearch').load('tools/unarmed.php');});
$("#weapons").click(function(){$('#returnsearch').load('tools/weapons.php');});
$("#legends").click(function(){$('#returnsearch').load('tools/legends.php');});
$("#combos").click(function(){$('#returnsearch').load('tools/combos.php');});
$("#jumps").click(function(){$('#returnsearch').load('tools/dodges.php');});
$("#gadgets").click(function(){$('#returnsearch').load('tools/gadgets.php');});
$("#realms").click(function(){$('#returnsearch').load('tools/realms.php');});
$('#returnsearch').load('tools/intro.php',function(){$("#overlay").hide();$('body').removeClass('loading');$("#loading1").hide();});
});






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
			"<h3>Legends</h3><br>" +
			"<img src=\"images/legend_overview.png\"/><br><br>"+
			"<p>Brawlhalla has a selection of 18 Legends, as well as a Random option.  All Legends have the same attacks while "+
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
<!-- Start Open Web Analytics Tracker -->
<script type="text/javascript">
//<![CDATA[
var owa_baseUrl = 'http://brawlking.com/owa/';
var owa_cmds = owa_cmds || [];
owa_cmds.push(['setSiteId', 'c6838b006ff897803cb4c49938bb3c9d']);
owa_cmds.push(['trackPageView']);
owa_cmds.push(['trackClicks']);
owa_cmds.push(['trackDomStream']);

(function() {
	var _owa = document.createElement('script'); _owa.type = 'text/javascript'; _owa.async = true;
	owa_baseUrl = ('https:' == document.location.protocol ? window.owa_baseSecUrl || owa_baseUrl.replace(/http:/, 'https:') : owa_baseUrl );
	_owa.src = owa_baseUrl + 'modules/base/js/owa.tracker-combined-min.js';
	var _owa_s = document.getElementsByTagName('script')[0]; _owa_s.parentNode.insertBefore(_owa, _owa_s);
}());
//]]>
</script>
<!-- End Open Web Analytics Code -->



<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//brawlking.com/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//brawlking.com/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->

</body>

</html>
