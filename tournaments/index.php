<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
require ('steamauth/steamauth.php');
require('tools/initialize.php');
?>
<!DOCTYPE html>


<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Brawl Buddies - Find Brawlhalla Friends!">
    <meta name="keywords" content="brawlhalla, find teams, guide, guides, info, information, twitch streams, streams, party, brawl buddies, friend finder, legends, maps, items, weapons, realms, combos">
	<meta name="author" content="Zachary Bagley">

    <title>Tournaments - Participate in Tournaments on BrawlKing!</title>
	

    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/sb-admin.css" rel="stylesheet">
	
    <!-- Custom Fonts -->
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- SPRITE CSS -->
    <link href="/css/menu.css" rel="stylesheet">
    <link href="/css/legends.css" rel="stylesheet">
    <link href="/css/gametypes.css" rel="stylesheet">
    <link href="/css/realm.css" rel="stylesheet">
    <link href="/css/servers.css" rel="stylesheet">
    <link href="/css/weapons.css" rel="stylesheet">
    <link href="/css/buttons.css" rel="stylesheet">
	
	<!-- Flipclock css -->
	<link href="/css/flipclock.css" rel="stylesheet">
</head>

<body>
    <!-- jQuery -->
    <script src="/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>

	<!-- My random JS -->
	<script src="/js/myscript.js"></script>
	
	<!-- Flipclock JS-->
	<script src="/js/flipclock.min.js"></script>

<!-- PRELOAD IMAGES -->
<div id="preloader">
	<img src="/css/sprites/menusprites.png" width="1" height="1" />
	<img src="/css/sprites/buttonsprites.png" width="1" height="1" />
	<img src="/css/sprites/legendsprites.png" width="1" height="1" />
	<img src="/css/sprites/gametypesprites.png" width="1" height="1" />
	<img src="/css/sprites/serversprites.png" width="1" height="1" />
	<img src="/css/sprites/realmsprites.jpg" width="1" height="1" />
	<img src="/css/sprites/weaponsprites.png" width="1" height="1" />
</div>	

<!-- TOP MENU BAR -->
<nav class="navbar navbar-inverse navbar-static-top nav-box">
	<div class="container">
	<div class="navbar-header"> 
		<a class="navbar-brand myheader" href="/">
			<img title="BrawlKing - Home" class="home" src="/images/blankimg.png">
		</a>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
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
		<li><a href="/tournaments/"><img class="tournaments" title="Tournaments" src="/images/blankimg.png" /></a></li>
		<li><a href="/resources.php"><img class="resources" title="External Resources" src="/images/blankimg.png" /></a></li>
		<li><a href="/general/"><img class="library" title="Realms, Weapons, Legends, and More" src="/images/blankimg.png" /></a></li>
		<li><a href="/special.php"><img class="special" title="Special Thank You" src="/images/blankimg.png" /></a></li>
		</ul>
	</div><!--/.nav-collapse -->
	</div>
</nav>


<!--Loading Overlay-->
<div id="overlay"><div id="loadingdiv"><img id="loading" src="/images/loading.gif"><br>
<div id="loading1"><img id="loadingtext" src="/images/loadingtext.png"></div>
<div id="loading2"><img id="loadingtext" src="/images/resettingtext.png"></div>
<div id="loading3"><img id="loadingtext" src="/images/reloadingtext.png"></div>
<div id="loading4"><img id="loadingtext" src="/images/submittingtext.png"></div>
</div></div>
<script>
$("#loading2").hide();
$("#loading3").hide();
$("#loading4").hide();
</script>

<div class="container-fluid info-box">
				
				<!-- STEAM LOGIN/LOGOUT -->
				<div id="steamstuff" style="float:right;"><?php
				if(!isset($_SESSION['steamid'])) {
					steamlogin(); //login button
					
				}  else {
					include ('steamauth/userInfo.php');
					echo "<img src=\"".$steamprofile['avatarmedium']."\"/>";
					
					logoutbutton();
				}    
				?> </div>



				<!-- Top Portion -->
				
				<!-- HOME MENU - BASE - ALWAYS ACTIVE - TOGGLES SEARCH/rules MENUS AND RETURNS HOME -->
				<div id="menu1" class="text-left"><?php include("tools/menuTools/home.php"); ?></div>
				
				<!-- RULES MENU - TOGGLE ACTIVE -->
				<div id="rulesmenu" class="text-left"><?php include("tools/menuTools/rulesMenu.php"); ?></div>
				<script type="text/javascript">$("#rulesmenu").hide();</script>

				<!-- Bot Portion -->
				
				<!-- Using General Sections, and not caching data
					Each tool is currently small enough for no need to cache, and faster running w/o caching -->
				<div id="section1" class="text-center col-lg-12"><br></div>
				<div id="section2" class="text-center col-lg-12"><br></div>
				<script type="text/javascript">$("#section2").hide();</script>
				<div id="section3" class="text-center col-lg-12"><br></div>
				<script type="text/javascript">$("#section3").hide();</script>
				
				<!-- If tools get larger their own dedicated divs can be created here and cached for duration of stay on index -->



                <!-- /.row -->


            </div>
            <!-- /.container-fluid --><footer class="footer text-center"><a href="../privacy.php">privacy policy</a> / <a href="../contact.php">contact me</a></footer>

        </div>
        <!-- /#page-wrapper -->


<script type="text/javascript">

//initialize menu toggle vars
var scheduleflag=0;
var rulesflag=0;
var tournyflag=0;

//add function actions
$(document).ready(function(){
	//home menu
	$("#home").click(function(){home();});
	$("#schedule").click(function(){schedule();});
	$("#rules").click(function(){rules();});
	$("#tourny").click(function(){tourny();});
	$("#admin").click(function(){admin();});
	
	
	//rules menu and submenu actions
	$("#tournyrules").click(function(){tournyrules();});
	$("#conduct").click(function(){conduct();});

	
	//default displays
	$('#section1').load('tools/intro.php',function(){
		$("#overlay").hide();
		$('body').removeClass('loading');
		$("#loading1").hide();});

});

//HOME MENU BUTTON FUNCTIONS
function home(){
	scheduleflag = 0;
	rulesflag = 0;
	tournyflag = 0;
	$('#rulesmenu').hide();
	$('#section1').show().load('tools/intro.php');
	$('#section2').hide();
	$('#section3').hide();
}

function admin(){
	scheduleflag = 0;
	rulesflag = 0;
	tournyflag = 0;
	$('#rulesmenu').hide();
	$('#section1').show().load('tools/admin.php');
	$('#section2').hide();
	$('#section3').hide();
}

function schedule(){
	if(scheduleflag==0){
		rulesflag = 0;
		tournyflag = 0;
		scheduleflag=1;
		$('#rulesmenu').hide();
		$('#section1').show().load('tools/schedule.php');
		$('#section2').hide();
		$('#section3').hide();
	}else{
		$('#section1').show().load('tools/intro.php');
		$('#section2').hide();
		$('#section3').hide();
		scheduleflag=0;
	}
}

function rules(){
	if(rulesflag==0){
		scheduleflag=0;
		tournyflag = 0;
		rulesflag=1;
		$('#rulesmenu').show();
		$('#section1').show().load('tools/rules.php');
		$('#section2').hide();
		$('#section3').hide();
	}else{
		rulesflag=0;
		$('#rulesmenu').hide();
		$('#section1').show().load('tools/intro.php');
		$('#section2').hide();
		$('#section3').hide();
	}
}

function tourny(){
	if(tournyflag==0){
		scheduleflag=0;
		rulesflag = 0;
		tournyflag=1;
		$('#rulesmenu').hide();
		$('#section1').show().load('tools/tourny.php');
		$('#section2').hide();
		$('#section3').hide();
	}else{
		tournyflag=0;
		$('#section1').show().load('tools/intro.php');
		$('#section2').hide();
		$('#section3').hide();
	}
}

//RULES SUBMENU BUTTON FUNCTIONS
function tournyrules(){
	$('#section1').show().load('tools/rules.php');
	$('#section2').hide();
	$('#section3').hide();
}
function conduct(){
	$('#section1').show().load('tools/conduct.php');
	$('#section2').hide();
	$('#section3').hide();	
}


//
function register(i){
	$('#section1').hide();
	$('#section2').show().load('tools/register.php');
	$('#section3').hide();
}


<!-- Piwik -->
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
