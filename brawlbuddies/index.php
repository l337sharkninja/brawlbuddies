<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
require ('steamauth/steamauth.php');
require('tools/initialize.php');
echo <<< EOT
<script>
var counter=0,max_counter={$_SESSION['counterMax']},ecounter=999,end_flag=0;
</script>
EOT;
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

    <title>Brawl Buddies - Find Brawlhalla Friends on BrawlKing!</title>
	

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
</head>

<body>
    <!-- jQuery -->
    <script src="/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>
	<script src="/js/myscript.js"></script>

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
		<li><a href="/calendar.php"><img class="tournaments" title="Tournaments" src="/images/blankimg.png" /></a></li>
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
				
				<!-- HOME MENU - BASE - ALWAYS ACTIVE - TOGGLES SEARCH/PROFILE MENUS AND RETURNS HOME -->
				<div id="menu1" class="text-left"><?php include("tools/menuTools/home.php"); ?></div>
				
				<!-- SEARCH MENU - TOGGLE ACTIVE -->
				<div id="filtermenu" class="text-left"><?php include("tools/menuTools/filterMenu.php"); ?></div>
				<script type="text/javascript">$("#filtermenu").hide();</script>
				<!-- PROFILE MENU - TOGGLE ACTIVE -->
				<div id="profilemenu" class="text-left"><?php include("tools/menuTools/profileMenu.php"); ?></div>
				<script type="text/javascript">$("#profilemenu").hide();</script>
				
				<br><br>
				<div class="row">
				<div class="col-lg-4"> </div>
				<!-- SUBSET MENUS - TOGGLE ACTIVE -->
				<div id="lfbox" class="text-center col-lg-4 filterbox"><?php include("tools/menuTools/legendFilter.php"); ?></div>
				<script type="text/javascript">$("#lfbox").hide();</script>
				<div id="gfbox" class="text-center col-lg-4 filterbox"><?php include("tools/menuTools/gametypeFilter.php"); ?></div>
				<script type="text/javascript">$("#gfbox").hide();</script>
				<div id="sfbox" class="text-center col-lg-4 filterbox"><?php include("tools/menuTools/serverFilter.php"); ?></div>
				<script type="text/javascript">$("#sfbox").hide();</script>
				<div id="efbox" class="text-center col-lg-4 filterbox"><?php include("tools/menuTools/eloFilter.php"); ?></div>
				<script type="text/javascript">$("#efbox").hide();</script>
				
				<!-- SUBSET MENUS - TOGGLE ACTIVE -->
				<div id="apbox" class="text-center col-lg-4 filterbox"><?php include("tools/menuTools/aliasProfile.php"); ?></div>
				<script type="text/javascript">$("#apbox").hide();</script>
				<div id="lpbox" class="text-center col-lg-4 filterbox"><?php include("tools/menuTools/legendProfile.php"); ?></div>
				<script type="text/javascript">$("#lpbox").hide();</script>
				<div id="gpbox" class="text-center col-lg-4 filterbox"><?php include("tools/menuTools/gametypeProfile.php"); ?></div>
				<script type="text/javascript">$("#gpbox").hide();</script>
				<div id="spbox" class="text-center col-lg-4 filterbox"><?php include("tools/menuTools/serverProfile.php"); ?></div>
				<script type="text/javascript">$("#spbox").hide();</script>
				<div id="epbox" class="text-center col-lg-4 filterbox"><?php include("tools/menuTools/eloProfile.php"); ?></div>
				<script type="text/javascript">$("#epbox").hide();</script>
				
				<div class="col-lg-4"> </div>
				</div>
				
				<!-- Bot Portion -->
				
				<!-- RETURN SEARCH SECTION -->
				
				<!-- NAVIGATION ARROW -->
				<div id="rsp" class="text-center col-lg-2" style="margin-top:50px;margin-bottom:50px;"><img id='l-arrow' class='left-arrow' title='Previous Brawl Buddy' src="/images/blankimg.png"/></div>
				<script type="text/javascript">$("#l-arrow").hide();</script>
				<!-- RETURN FILTER + RETURN PROFILE -->
				<div class="text-center col-lg-8 returnfilterbox">
					<div id="returnfilter" class="row"><br></div>
					<div id="returnprofile" class="row"><br></div>
					<script type="text/javascript">$("#returnprofile").hide();</script>
				</div>
				<!-- NAVIGATION ARROW -->
				<div id="rsn" class="text-center col-lg-2" style="margin-top:50px;margin-bottom:50px;"><img id='r-arrow' class='right-arrow' title='Next Brawl Buddy' src="/images/blankimg.png" /></div>
				<script type="text/javascript">$("#r-arrow").hide();</script>
				

				<!-- RETURN SERACH EXPAND ARROW -->
				<div id="rse" class="text-center col-lg-12"><img id='d-arrow' class='down-arrow' title='Expand/Hide All Brawl Buddies' src="/images/blankimg.png"/></div>
				<script type="text/javascript">$("#d-arrow").hide();</script>



                <!-- /.row -->


            </div>
            <!-- /.container-fluid --><footer class="footer text-center"><a href="../privacy.php">privacy policy</a> / <a href="../contact.php">contact me</a></footer>

        </div>
        <!-- /#page-wrapper -->

<!-- HIDDEN BOX FOR MAXCOUNT [CACHE LIST SIZE] -->
<div id="maxcount"><?php include("tools/maxCount.php") ?></div>

<script type="text/javascript">

//initialize menu toggle vars
var rseflag = 0;
var filterflag = 0;
var lfilterflag = 0;
var gfilterflag = 0;
var sfilterflag = 0;
var efilterflag = 0;
var profileflag = 0;
var aprofileflag = 0;
var lprofileflag = 0;
var gprofileflag = 0;
var sprofileflag = 0;
var eprofileflag = 0;
//elo filter vars
var maxval=0;
var minval=0;

//add function actions
$(document).ready(function(){
	//home menu
	$("#home").click(function(){home();});
	$("#filter").click(function(){filter();});
	$("#profile").click(function(){bbprofile();});
	
	//filter menu and submenu actions
	$("#lfilter").click(function(){lfilter();});
	$("#gfilter").click(function(){gfilter();});
	$("#sfilter").click(function(){sfilter();});
	$("#efilter").click(function(){efilter();});
	$('#submitelo').click(function(){cacheFilter(4,minval,maxval);});
	$('#submitprofileelo').click(function(){cacheProfile(4,minval,maxval);});
	$("#cancelfilter").click(function(){cancelfilter();});
	$('#eloinput').change(function(){eloRangeFilter();});
	$('#profileeloinput').change(function(){eloRangeProfile();});
	$('#cancelelo').click(function(){
		$('#eloinput').val('0');
		$("#eloMin").html('From: No Min');
		$("#eloMax").html('To: No Max');
		cacheFilter(4,0,0);});
	$('#cancelprofileelo').click(function(){
		$('#profileeloinput').val('0');
		$("#profileeloMin").html('From: No Min');
		$("#profileeloMax").html('To: No Max');
		cacheProfile(4,0,0);});
	
	//profile menu and submenu actions
	$("#aprofile").click(function(){aprofile();});
	$("#lprofile").click(function(){lprofile();});
	$("#gprofile").click(function(){gprofile();});
	$("#sprofile").click(function(){sprofile();});
	$("#eprofile").click(function(){eprofile();});
	$("#closeprofile").click(function(){closeprofile();});
	$("#submitalias").click(function(){submitalias();});
	
	//return filter/profile and navigation, turn off "loading"
	$('#returnprofile').load('tools/returnProfile.php',function(){
		$('#returnfilter').load('tools/returnFilter.php',function(){
			$("#overlay").hide();
			$('body').removeClass('loading');
			$("#loading1").hide();});});
	$("#d-arrow").show().click(function(){rse();});
	$("#l-arrow").hide().click(function(){rsp();});
	$("#r-arrow").show().click(function(){rsn();});
	
});

//HOME MENU FUNCTIONS
function home(){
	filterflag = 0;
	lfilterflag = 0;
	gfilterflag = 0;
	sfilterflag = 0;
	efilterflag = 0;
	profileflag = 0;
	aprofileflag = 0;
	lprofileflag = 0;
	gprofileflag = 0;
	sprofileflag = 0;
	eprofileflag = 0;
	$("#homeimg").hide();
	$("#filtermenu").hide();
	$("#gfbox").hide();
	$("#sfbox").hide();
	$("#lfbox").hide();
	$("#efbox").hide();
	$("#apbox").hide();
	$("#profilemenu").hide();
	$("#gpbox").hide();
	$("#spbox").hide();
	$("#lpbox").hide();
	$("#epbox").hide();
	$("#apbox").hide();
	$('#returnprofile').hide();
	$('#returnfilter').show();
	manageArrows(1);
}
function filter(){
	if(filterflag==0){
	profileflag=0;
	lfilterflag = 0;
	gfilterflag = 0;
	sfilterflag = 0;
	efilterflag = 0;
	profileflag = 0;
	aprofileflag = 0;
	lprofileflag = 0;
	gprofileflag = 0;
	sprofileflag = 0;
	eprofileflag = 0;
	$("#profilemenu").hide();
	$("#gpbox").hide();
	$("#spbox").hide();
	$("#lpbox").hide();
	$("#epbox").hide();
	$("#apbox").hide();
	$("#filtermenu").show();filterflag=1;
	$('#returnprofile').hide();
	$('#returnfilter').show();
	manageArrows(1);}
	else{$("#filtermenu").hide();
	$("#gfbox").hide();
	$("#sfbox").hide();
	$("#apbox").hide();
	$("#lfbox").hide();$("#efbox").hide();filterflag=0;
	manageArrows(1);}
}
function bbprofile(){
	if(profileflag==0){
	filterflag = 0;
	lfilterflag = 0;
	gfilterflag = 0;
	sfilterflag = 0;
	efilterflag = 0;
	profileflag = 0;
	aprofileflag = 0;
	lprofileflag = 0;
	gprofileflag = 0;
	sprofileflag = 0;
	eprofileflag = 0;
	$("#filtermenu").hide();
	$('#returnfilter').hide();
	$("#gfbox").hide();
	$("#sfbox").hide();
	$("#lfbox").hide();
	$("#efbox").hide();
	$("#apbox").hide();
	$("#profilemenu").show();
	$('#returnprofile').show();
	manageArrows(0);
	profileflag=1;
	}else{
		$("#profilemenu").hide();
		$('#returnprofile').hide();
		$('#returnfilter').show();
		$("#gpbox").hide();
		$("#spbox").hide();
		$("#lpbox").hide();
		$("#epbox").hide();
		$("#apbox").hide();
		profileflag=0;
		manageArrows(1);
}}

//PROFILE MENU FUNCTIONS
function closeprofile(){
	filterflag = 0;
	lfilterflag = 0;
	gfilterflag = 0;
	sfilterflag = 0;
	efilterflag = 0;
	profileflag = 0;
	aprofileflag = 0;
	lprofileflag = 0;
	gprofileflag = 0;
	sprofileflag = 0;
	eprofileflag = 0;
	manageArrows(1);
	$.get('tools/menuTools/resetFilter.php',function(){$('#returnfilter').load('tools/returnFilter.php');});
	$("#homeimg").hide();
	$("#profilemenu").hide();
	$("#gpbox").hide();
	$("#spbox").hide();
	$("#lpbox").hide();
	$("#epbox").hide();
	$("#apbox").hide();
	$('#returnprofile').hide();
	$('#returnfilter').show();
}
function submitalias(){
	var reddit = $('#redditinput').val();
	var alias = $('#aliasinput').val();
	$.post('tools/menuTools/profilePost.php',{'item1':22,'alias':alias,'reddit':reddit},function(){
		$.get('../tools/updateReg.php',function(){
			$('#returnprofile').load('tools/returnProfile.php');
	});});
}
function aprofile(){
	if(aprofileflag==0){
		$("#apbox").show();
		$("#lpbox").hide();
		$("#gpbox").hide();
		$("#spbox").hide();
		$("#epbox").hide();
		aprofileflag=1;}
	else{
		$("#apbox").hide();
		aprofileflag=0;}
}
function lprofile(){
	if(lprofileflag==0){
		$("#lpbox").show();
		$("#gpbox").hide();
		$("#spbox").hide();
		$("#epbox").hide();
		$("#apbox").hide();
		lprofileflag=1;}
	else{
		$("#lpbox").hide();
		lprofileflag=0;}
}
function gprofile(){
	if(gprofileflag==0){
		$("#gpbox").show();
		$("#spbox").hide();
		$("#lpbox").hide();
		$("#epbox").hide();
		$("#apbox").hide();
		gprofileflag=1;}
	else{
		$("#gpbox").hide();
		gprofileflag=0;}
}
function sprofile(){
	if(sprofileflag==0){
		$("#spbox").show();
		$("#gpbox").hide();
		$("#lpbox").hide();
		$("#epbox").hide();
		$("#apbox").hide();
		sprofileflag=1;}
	else{
		$("#spbox").hide();
		sprofileflag=0;}
}
function eprofile(){
	if(eprofileflag==0){
		$("#epbox").show();
		$("#gpbox").hide();
		$("#lpbox").hide();
		$("#spbox").hide();
		$("#apbox").hide();
		eprofileflag=1;}
	else{
		$("#epbox").hide();
		eprofileflag=0;}
}
function eloRangeProfile(){
	minval = parseInt( <?php echo $_SESSION['elo'] ?> )- parseInt($('#profileeloinput').val());
	if(parseInt($('#eloinput').val())==0){
	$("#profileeloMin").html('From: No Min');}else{
	$("#profileeloMin").html('From: '+minval+' ELO');}
	maxval = parseInt( <?php echo $_SESSION['elo'] ?> )+ parseInt($('#profileeloinput').val());
	if(parseInt($('#eloinput').val())==0){
	$("#profileeloMax").html('To: No Max');}else{
	$("#profileeloMax").html('To: '+maxval+' ELO');}
}
function cacheProfile(d1,d2,d3){
	$('body').addClass('loading');
	$('#overylay').show();
	$('#loading1').show();
	$.ajax({
		type: 'POST',
		data: {'item1':d1,'item2':d2,'item3':d3},
		url:'tools/menuTools/profilePost.php',
		success: function(){
			$.ajax({
			url:'../tools/updateReg.php',
			type:'GET',
			success: function(){
				$('#returnprofile').load('tools/returnProfile.php');
				$("#overlay").hide();
				$('body').removeClass('loading');
				$("#loading1").hide();
}});}});}


//FILTER MENU FUNCTIONS
function cancelfilter(){
	filterflag = 0;
	lfilterflag = 0;
	gfilterflag = 0;
	sfilterflag = 0;
	efilterflag = 0;
	profileflag = 0;
	lprofileflag = 0;
	gprofileflag = 0;
	sprofileflag = 0;
	eprofileflag = 0;
	$.get('tools/menuTools/resetFilter.php',function(){
		$.get('tools/cacheList.php',function(){
			$('#returnfilter').load('tools/returnFilter.php');
			counter=0;
			$('#maxcount').load('tools/maxCount.php',function(){
				max_counter = parseInt($('#iCounterMax').val());
				manageArrows(1);
			});
			});});
	$("#homeimg").hide();
	$("#filtermenu").hide();
	$("#gfbox").hide();
	$("#sfbox").hide();
	$("#lfbox").hide();
	$("#efbox").hide();
}
function lfilter(){
	if(lfilterflag==0){
		$("#lfbox").show();
		$("#gfbox").hide();
		$("#sfbox").hide();
		$("#efbox").hide();
		lfilterflag=1;}
	else{
		$("#lfbox").hide();
		lfilterflag=0;}
}
function gfilter(){
	if(gfilterflag==0){
		$("#gfbox").show();
		$("#sfbox").hide();
		$("#lfbox").hide();
		$("#efbox").hide();
		gfilterflag=1;}
	else{
		$("#gfbox").hide();
		gfilterflag=0;}
}
function sfilter(){
	if(sfilterflag==0){
		$("#sfbox").show();
		$("#gfbox").hide();
		$("#lfbox").hide();
		$("#efbox").hide();
		sfilterflag=1;}
	else{
		$("#sfbox").hide();
		sfilterflag=0;}
}
function efilter(){
	if(efilterflag==0){
		$("#efbox").show();
		$("#gfbox").hide();
		$("#lfbox").hide();
		$("#sfbox").hide();
		efilterflag=1;}
	else{
		$("#efbox").hide();
		efilterflag=0;}
}
function eloRangeFilter(){
	minval = parseInt( <?php echo $_SESSION['elo'] ?> )- parseInt($('#eloinput').val());
	if(parseInt($('#eloinput').val())==0){
	$("#eloMin").html('No Min');}else{
	$("#eloMin").html('From: '+minval+' ELO');}
	maxval = parseInt( <?php echo $_SESSION['elo'] ?> )+ parseInt($('#eloinput').val());
	if(parseInt($('#eloinput').val())==0){
	$("#eloMax").html('No Max');}else{
	$("#eloMax").html('To: '+maxval+' ELO');}
}
function cacheFilter(d1,d2,d3){
	$('body').addClass('loading');
	$('#overylay').show();
	$('#loading1').show();
	$.ajax({
		type: 'POST',
		data: {'item1':d1,'item2':d2,'item3':d3},
		url:'tools/menuTools/filterPost.php',
		success: function(){
			$.ajax({
			url:'tools/cacheList.php',
			type:'GET',
			success: function(){
			$('#returnfilter').load('tools/returnFilter.php',function(){
				$("#overlay").hide();
				$('body').removeClass('loading');
				$("#loading1").hide();
				counter=0;
				$('#maxcount').load('tools/maxCount.php',function(){
					max_counter = parseInt($('#iCounterMax').val());
					manageArrows(1);
				});

});}});}});}

//RETURN SEARCH NAVIGATION FUNCTIONS
var myWindow;
function addbuddy(i){
window.open("tools/addFriend.php?i="+i);
}
function rsp(){
	counter--;
	$.ajax({
	url:'/brawlbuddies/tools/removeCount.php',
	type:'GET',
	success: function(){
		$("#d-arrow").removeClass('up-arrow');
		$("#returnfilter").load('/brawlbuddies/tools/returnFilter.php',manageArrows(1));
		rseflag=0;
}});}
function rsn(){
	counter++;
	$.ajax({
	url:'/brawlbuddies/tools/addCount.php',
	type:'GET',
	success: function(){
		$("#d-arrow").removeClass('up-arrow');
		$("#returnfilter").load('/brawlbuddies/tools/returnFilter.php',manageArrows(1));
		rseflag=0;
}});}
function rse(){
	if (rseflag == 0){
	$("#l-arrow").hide();
	$("#r-arrow").hide();
	$("#d-arrow").addClass('up-arrow');
	$("#returnfilter").load('/brawlbuddies/tools/expandFilter.php');
	rseflag=1;}else{
	$("#d-arrow").removeClass('up-arrow');
	$("#returnfilter").load('/brawlbuddies/tools/returnFilter.php',manageArrows(1));
	rseflag=0;
}}
function manageArrows(arrowflag){
	if(arrowflag==1){
		if(max_counter<2){
			$("#r-arrow").hide();
			$("#d-arrow").hide();
		}else{
			$("#r-arrow").show();
			$("#d-arrow").show();
		}
		if(counter==0){$('#l-arrow').hide();}else{$('#l-arrow').show();}
		if(counter==max_counter){$("#r-arrow").hide();}else{$('#r-arrow').show();}
	}
	if(arrowflag==0){
		$('#l-arrow').hide();
		$("#r-arrow").hide();
		$("#d-arrow").hide();
	}
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
