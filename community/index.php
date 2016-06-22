<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
require ('steamauth/steamauth.php'); 
require('tools/resetSearch.php')

?>
<!DOCTYPE html>


<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Community Guides - Search and Create Community Guides for Brawlhalla on BrawlKing!">
    <meta name="keywords" content="brawlhalla, find teams, guide, guides, info, information, twitch streams, streams, party, brawl buddies, friend finder, legends, maps, items, weapons, realms, combos">
	<meta name="author" content="Zachary Bagley">

    <title>Community Guides - Search and Create Community Guides for Brawlhalla on BrawlKing!</title>
    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/css/sb-admin.css" rel="stylesheet">
    <link href="/js/te/jquery-te-1.4.0.css" rel="stylesheet">
	
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
	<script src="/js/te/jquery-te-1.4.0.min.js"></script>
	
    <!-- TE -->
    <script type="text/javascript" src="/js/te/jquery-te-1.4.0.min.js"></script>
	
    <!-- Validate -->
    <script type="text/javascript" src="/js/validate/jquery.validate.js"></script>
	
<!-- PRELOAD IMAGES -->
<div id="preloader">
	<img src="/css/sprites/menusprites.png" width="1" height="1" />
	<img src="/css/sprites/legendsprites.png" width="1" height="1" />
	<img src="/css/sprites/serversprites.png" width="1" height="1" />
	<img src="/css/sprites/realmsprites.jpg" width="1" height="1" />
	<img src="/css/sprites/weaponsprites.png" width="1" height="1" />
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
		<li><a href="/general/"><img class="library" title="External Resources" src="/images/blankimg.png" /></a></li>
		<li><a href="/special.php"><img class="special" title="External Resources" src="/images/blankimg.png" /></a></li>
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
$.ajax({
url:'tools/getGuides.php',
type:'GET',
success: function(){
	$.ajax({
	url:'tools/getUserData.php',
	type:'GET'});}});

$("#loading2").hide();
$("#loading3").hide();
$("#loading4").hide();
</script>

<div class="container-fluid info-box"><div class="row text-box col-lg-12 text-center">
								<div id="steamstuff" style="position:absolute;right:0;"><?php
				if(!isset($_SESSION['steamid'])) {
					steamlogin(); //login button
					
				}  else {
					include ('steamauth/userInfo.php');
					echo "<img src=\"".$steamprofile['avatarmedium']."\"/>";
					
					logoutbutton();
				}    
				?> </div>
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
				
				
				<div id="searchmenu"> <?php include("tools/searchMenu.php"); ?> </div>
				<script type="text/javascript">$("#searchmenu").hide();</script>
				
				<div id="submitmenu"> <?php include("tools/submitMenu.php"); ?> </div>
				<script type="text/javascript">$("#submitmenu").hide();</script>
				
				<div id="vieweditmenu" class="text-left"> <?php include("tools/vieweditMenu.php"); ?> </div>
				<script type="text/javascript">$("#vieweditmenu").hide();</script>
				
				
				<!-- Bot Portion -->
				<div id="returnsearch"><br></div>
				<div id="openguide"><br></div>
				<script type="text/javascript">$("#openguide").hide();</script>
				
				<div id="myguides"><br></div>
				<script type="text/javascript">$("#myguides").hide();</script>
				
				<div id="submitguide"><br></div>
				<script type="text/javascript">$("#submitguide").hide();</script>

                </div>
                <!-- /.row -->


            </div>
            <!-- /.container-fluid --><footer class="footer text-center"><a href="../privacy.php">privacy policy</a> / <a href="../contact.php">contact me</a></footer>

        </div>
        <!-- /#page-wrapper -->


<script>

$(document).ready(function(){
$("#searchindex").click(function(){searchindex();});
$("#myguidesindex").click(function(){myguides();});
$("#submitguideindex").click(function(){submitguide();});
$("#home").click(function(){home2();});
$('#returnsearch').load('tools/returnSearch.php');
$('#myguides').load('tools/myGuides.php',function(){$("#overlay").hide();$('body').removeClass('loading');$("#loading1").hide();});
$('#submitguide').load('tools/submitGuide.php');
});

function searchindex(){
	$.ajax({
	url:'tools/resetSearch.php',
	type:'GET'});
	$("#searchmenu").show();
    $("#submitmenu").hide();
    $("#vieweditmenu").hide();
	$("#returnsearch").show();
	$("#openguide").hide();
	$("#myguides").hide();
	$("#submitguide").hide();
	}
	
function myguides(){
    $("#searchmenu").hide();
    $("#submitmenu").hide();
    $("#vieweditmenu").hide();
	$("#returnsearch").hide();
	$("#openguide").hide();
	$("#myguides").show();
	$("#submitguide").hide();
	}

function submitguide(){
    $("#searchmenu").hide();
    $("#submitmenu").show();
    $("#vieweditmenu").hide();
	$("#returnsearch").hide();
	$("#openguide").hide();
	$("#myguides").hide();
	$("#submitguide").show();
	}
	
function home(){
	$("#overlay").show();
	$("#loading3").show();
	$.ajax({
	url:'tools/resetSearch.php',
	type:'GET',
	success: function(){
	$("#searchmenu").load('tools/searchMenu.php',function(){
	$("#returnsearch").load('tools/returnSearch.php',function(){
	$("#submitmenu").load('tools/submitMenu.php',function(){
	$("#submitguide").load('tools/submitGuide.php',function(){
	$("#vieweditmenu").load('tools/vieweditMenu.php',function(){
    $("#searchmenu").hide();
    $("#submitmenu").hide();
    $("#vieweditmenu").hide();
	$("#returnsearch").show();
	$("#openguide").hide();
	$("#myguides").hide();
	$("#submitguide").hide();
	$("#overlay").hide();
	$("#loading3").hide();
});});});});});}});}
	
function home2(){
	$("#overlay").show();
	$("#loading3").show();
	$.ajax({
	url:'tools/resetSearch.php',
	type:'GET',
	success: function(){
    $("#searchmenu").hide();
    $("#submitmenu").hide();
    $("#vieweditmenu").hide();
	$("#returnsearch").show();
	$("#openguide").hide();
	$("#myguides").hide();
	$("#submitguide").hide();
	$("#overlay").hide();
	$("#loading3").hide();
}});}
	
function searchimg(){
	$("#overlay").show();
	$("#loading2").show();
	$.ajax({
	url:'tools/resetSearch.php',
	type:'GET',
	success: function(){
	$("#searchmenu").load('tools/searchMenu.php',function(){
	$("#returnsearch").load('tools/returnSearch.php',function(){
    $("#searchmenu").show();
    $("#submitmenu").hide();
    $("#vieweditmenu").hide();
	$("#returnsearch").show();
	$("#openguide").hide();
	$("#myguides").hide();
	$("#submitguide").hide();
	$("#overlay").hide();
	$("#loading2").hide();
	});});}});}
	
function submitimg(){
	$("#overlay").show();
	$("#loading2").show();
	$.ajax({
	url:'tools/resetSearch.php',
	type:'GET',
	success: function(){
	$("#submitmenu").load('tools/submitMenu.php',function(){
	$("#submitguide").load('tools/submitGuide.php',function(){
    $("#searchmenu").hide();
    $("#submitmenu").show();
    $("#vieweditmenu").hide();
	$("#returnsearch").hide();
	$("#openguide").hide();
	$("#myguides").hide();
	$("#submitguide").show();
	$("#overlay").hide();
	$("#loading2").hide();
	});});}});}

function openGuide(ii){
	$.ajax({
	url:'tools/setGuide.php',
	type:'GET',
	data: {id: ii},
	success: function(){
	$("#openguide").load("tools/openGuide.php",function(){
	$("#returnsearch").hide();
	$("#openguide").show();
	$("#myguides").hide();
	$("#submitguide").hide();
	$("#openguide").focus();
});}});}

function openEdit(){
	$("#openguide").load("tools/openEdit.php",function(){
	$("#returnsearch").hide();
	$("#openguide").show();
	$("#myguides").hide();
	$("#vieweditmenu").show();
	$("#submitguide").hide();
	$("#openEdit").hide();
	$("#deleteGuide").hide();
	$("#openguide").focus();
});}


function vieweditGuide(ii){
	$('body').addClass('loading');
	$.ajax({
	url:'tools/setGuide.php',
	type:'GET',
	data: {id: ii},
	success: function(){
	$("#openguide").load("tools/vieweditGuide.php",function(){
	$("#returnsearch").hide();
	$("#openguide").show();
	$("#myguides").hide();
	$("#submitguide").hide();
    $("#openEdit").show();
    $("#deleteGuide").show();
	$("#vieweditmenu").show();
	$("#openguide").focus();
	$('body').removeClass('loading');
});}});}

function hideGuide(){
	$("#returnsearch").show();
	$("#openguide").hide();
	$("#myguides").hide();
	$("#submitguide").hide();
	}

function hideGuide2(){
	$("#openguide").hide();
	$("#myguides").show();
	$("#submitguide").hide();
    $("#openEdit").hide();
	$("#deleteGuide").hide();
	}
	
function upvote(ii){
	$('body').addClass('loading');
	$.ajax({
	url:'tools/setGuide.php',
	type:'GET',
	data: {id: ii},
	success: function(){
		$.ajax({
		url:'tools/upvoteGuide.php',
		type:'GET',
		success: function(){
			$("#guidescore").load("tools/guideScoreUpdate.php",function(){
			$('body').removeClass('loading');});}
		});
		}
	});
	}
	
function downvote(ii){
	$.ajax({
	url:'tools/setGuide.php',
	type:'GET',
	data: {id: ii},
	success: function(){
		$.ajax({
		url:'tools/downvoteGuide.php',
		type:'GET',
		success: function(){
			$("#guidescore").load("tools/guideScoreUpdate.php",function(){
			$('body').removeClass('loading');});}
		});
		}
	});
}

function postGuide(e){
	$.ajax({
	url:'tools/submitPost.php',
	type:'POST',
	data: $('#frmMain').serialize(),
	success: function(){
		alert('Your guide has been submitted. Community Guides will reload momentarily.');
		window.location.replace('index.php');
		}
	});
	e.preventDefault(); 
 }
 
 function postUpdate(e){
	$.ajax({
	url:'tools/updatePost.php',
	type:'POST',
	data: $('#frmMain2').serialize(),
	success: function(){
		alert('Your guide has been updated. Community Guides will reload momentarily.');
		window.location.replace('index.php');
		}
	});
	e.preventDefault(); 
 }

function deleteGuide(){
	var r = confirm("Are you sure you want to permanently delete this guide?");
	if (r==true){
		$.get("tools/deleteGuide.php");
		alert('You guide has been deleted. Community Guides will reload momentarily.');
		window.location.replace('index.php');
	}
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
