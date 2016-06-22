<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="An assortment of resources for Brawlhalla.">
    <meta name="keywords" content="brawlhalla, find teams, guide, guides, info, information, twitch streams, streams, party, brawl buddies, friend finder, legends, maps, items, weapons, realms, combos">
	<meta name="author" content="Zachary Bagley">

    <title>Additional Resources for Brawlhalla - by BrawlKing!</title>

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
	<img src="/images/sprites/legendsprites.png" width="1" height="1" />
	<img src="/images/sprites/serversprites.png" width="1" height="1" />
	<img src="/images/sprites/realmsprites.png" width="1" height="1" />
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
		<li><a href="/general/"><img class="library" title="External Resources" src="/images/blankimg.png" /></a></li>
		<li><a href="/special.php"><img class="special" title="External Resources" src="/images/blankimg.png" /></a></li>
		</ul>
	</div><!--/.nav-collapse -->
	</div>
</nav>


<div class="container-fluid info-box"><div class="row text-box col-lg-12 text-center">
						<h1>Other Brawlhalla Resources</h1>
						<p>There are many people that have made specific media to help the community improve their Brawlhalla gameplay.  This section is dedicated 
						to catalog and direct you to this information.  Everything in this section is created by the Brawlhalla community, and they are all external sources.</p>
						
						<h4 class="btn btn-lg btn-default" onclick="webs()">Relevant Websites</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="stats()">Attacks/Frames/Hitbox Statistics</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="potc()">PartOfTheCreed's Video Guides</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="raid()">Raidhyn's Video Guides</h4></a>
						<h4 class="btn btn-lg btn-default" onclick="others()">Other Guides and Information</h4></a>
						<hr>
						<div class="row text-center" id="putstuffhere">
							<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
						</div>
                    </div>

                <!-- /.row -->


            </div>
            <!-- /.container-fluid --><footer class="footer text-center"><a href="privacy.php">privacy policy</a> / <a href="contact.php">contact me</a></footer>

        </div>
        <!-- /#page-wrapper -->


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

	<script src="js/myscript.js"></script>

	<script>
	function webs(){
	document.getElementById("putstuffhere").innerHTML = 
		"<h2>Brawlhalla Related Websites</h2>"+
		
		"<div class=\"col-lg-12 text-center\">"+
		"<div class=\"col-lg-6 text-center\">"+
		"<h3>Brawlhalla Homepage</h3>"+
		"<a href=\"http://www.brawlhalla.com\" target=\"_new\">"+
		"<img src=\"images/resources/webpreview/brawlhallamain.jpg\"/></a><br>"+
		"<small>Description:  The homepage for Brawlhalla.</small><br>"+
		"</div>"+
		"<div class=\"col-lg-6 text-center\">"+
		"<h3>Blue Mammoth Games Homepage</h3>"+
		"<a href=\"http://www.bluemammoth.com\" target=\"_new\">"+
		"<img src=\"images/resources/webpreview/bluemammoth.jpg\"/></a><br>"+
		"<small>Description:  The homepage for the developers of Brawlhalla.</small><br>"+
		"</div></div>"+
		
		"<div class=\"col-lg-12 text-center\">"+
		"<div class=\"col-lg-6 text-center\">"+
		"<h3>Steam - Get Brawlhalla</h3>"+
		"<a href=\"http://store.steampowered.com/app/291550\" target=\"_new\">"+
		"<img src=\"images/resources/webpreview/brawlhallaget.jpg\"/></a><br>"+
		"<small>Description:  The steam page to download Brawlhalla.</small><br>"+
		"</div>"+
		"<div class=\"col-lg-6 text-center\">"+
		"<h3>Current Ladder Rankings by Brawlhalla</h3>"+
		"<a href=\"http://www.brawlhalla.com/rankings\" target=\"_new\">"+
		"<img src=\"images/resources/webpreview/rankings.jpg\"/></a><br>"+
		"<small>Description:  Current rankings by Brawlhalla.com</small><br>"+
		"</div></div>"+
		
		"<div class=\"col-lg-12 text-center\">"+
		"<div class=\"col-lg-6 text-center\">"+
		"<h3>Discord Chat for Brawlhalla</h3>"+
		"<a href=\"https://discordapp.com/invite/0f8NrHSFtWCwFeLJ\" target=\"_new\">"+
		"<img src=\"images/resources/webpreview/discord.jpg\"/></a><br>"+
		"<small>Description:  A website where you can chat with other Brawlhalla players.</small><br>"+
		"</div>"+
		"<div class=\"col-lg-6 text-center\">"+
		"<h3>Reddit - Brawlhalla Subreddit</h3>"+
		"<a href=\"https://www.reddit.com/r/Brawlhalla\" target=\"_new\">"+
		"<img src=\"images/resources/webpreview/reddit.jpg\"/></a><br>"+
		"<small>Description:  A forum based community dedicated to Brawlhalla.</small><br>"+
		"</div></div>"+
		
		"<div class=\"col-lg-12 text-center\">"+
		"<div class=\"col-lg-6 text-center\">"+
		"<h3>Ladder Rank Over Time</h3>"+
		"<a href=\"http://stats.brawlhalla.fr\" target=\"_new\">"+
		"<img src=\"images/resources/webpreview/rankingsovertime.jpg\"/></a><br>"+
		"<small>Description:  Monitor your real-time ELO and rank over time.</small><br>"+
		"</div>"+
		"<div class=\"col-lg-6 text-center\">"+
		"<h3>Legend Skin Viewer</h3>"+
		"<a href=\"http://ni465394_2.vweb13.nitrado.net\" target=\"_new\">"+
		"<img src=\"images/resources/webpreview/skinviewer.jpg\"/></a><br>"+
		"<small>Description:  A website where you can view skins when you don't have access to Brawlhalla.</small><br>"+
		"</div></div>"+
		
		"<div class=\"col-lg-12 text-center\">"+
		"<div class=\"col-lg-6 text-center\">"+
		"<h3>List of Ad-Hoc Tournaments for Brawlhalla</h3>"+
		"<a href=\"http://challonge.com/games/brawlhalla/tournaments\" target=\"_new\">"+
		"<img src=\"images/resources/webpreview/tourny.jpg\"/></a><br>"+
		"<small>Description:  A website where you see all minor tournaments for Brawlhalla.  BrawlKing's calendar will always have a list of all major tournaments.</small><br>"+
		"</div></div>";
		

	}
	
	function stats(){
	document.getElementById("putstuffhere").innerHTML = 
		"<h2>Advanced Statistics</h2>"+
		
		"<div class=\"col-lg-12 text-center\">"+
		"<div class=\"col-lg-6 text-center\">"+
		"<h3>Horaderick's Weapon Hitbox Images</h3>"+
		"<a href=\"https://www.reddit.com/r/Brawlhalla/comments/3y2g0o/hitbox_diagram_for_each_weapon_colour_code_for/?ref=share&ref_source=link\" target=\"_new\">"+
		"<img src=\"images/resources/statpreview/hitboxes.jpg\"/></a><br>"+
		"<small>Description:  Horaderick's Hitbox diagrams (updated 2.4.3) for every weapon in the game.<br>Local links to download files: "+
		"<a href=\"/images/resources/horaderick_hitboxes_1.zip\" download>combined hitboxes</a> / <a href=\"/images/resources/horaderick_hitboxes_2.zip\" download>seperate air/ground</a>.</small><br>"+
		"</div>"+
		"<div class=\"col-lg-6 text-center\">"+
		"<h3>TWKSmash's Frame Data</h3>"+
		"<a href=\"https://www.reddit.com/r/Brawlhalla/comments/3ztp69/twksmashs_frame_data_compendium/?ref=share&ref_source=link\" target=\"_new\">"+
		"<img src=\"images/resources/statpreview/frame_data.jpg\"/></a><br>"+
		"<small>Description:  Details for frame information for every Legend (Last Updated 2.5.0).<br>Direct link to google doc: <a href=\"https://docs.google.com/spreadsheets/d/1jI3z1WbRGbcFMLoA5y221wy1GKDaQGpR69Dy2mIUnzo/edit?usp=sharing\">frame data</a></small><br>"+
		"</div></div>"+
		
		"<div class=\"col-lg-12 text-center\">"+
		"<div class=\"col-lg-6 text-center\">"+
		"<h3>Patch Notes 2.5.1 (Competitive Teir List) by [BOO] </h3>"+
		"<a href=\"https://www.reddit.com/r/Brawlhalla/comments/412y1q/boo_competitive_1v1_tier_list_for_patch_251/?ref=share&ref_source=link\" target=\"_new\">"+
		"<img src=\"images/resources/statpreview/patch.jpg\"/></a><br>"+
		"<small>Description:  Patch Notes in regards to 1v1 play by [boo]<br>Local links to download files: "+
		"<a href=\"/images/resources/boo_patch.png\" download>[boo]'s image</a>.</small><br>"+
		"</div>"+
		"<div class=\"col-lg-6 text-center\">"+
		"<h3>Milln's List of Damage to KO</h3>"+
		"<a href=\"https://www.reddit.com/r/Brawlhalla/comments/3zm2zr/list_of_damage_levels_moves_will_ko_at/?ref=share&ref_source=link\" target=\"_new\">"+
		"<img src=\"images/resources/statpreview/ko_dmg.jpg\"/></a><br>"+
		"<small>Description:  Details for damage required to KO (ad-hoc knockback statistic for moves).<br>Direct link to google doc: <a href=\"https://docs.google.com/spreadsheets/d/1vsWqVvbmpau1OnCWHmnGh6reebBrn3JQk2ky2RVhtwE/edit#gid=0\">damage to KO data</a></small><br>"+
		"</div></div>";
	}
	
	function potc(){
	document.getElementById("putstuffhere").innerHTML = 
		"<h2>PartOfTheCreed's Guides to Brawlhalla</h2>"+
		
		"<div class=\"col-lg-12 text-center\">"+
		"<div class=\"col-lg-6 text-center\">"+
		"<h3>Basic</h3>"+
		"<iframe width=\"373\" height=\"210\" src=\"https://www.youtube.com/embed/WQ8mH1g6Dyw\" frameborder=\"0\" allowfullscreen></iframe>"+
		"</div>"+
		"<div class=\"col-lg-6 text-center\">"+
		"<h3>Advanced</h3>"+
		"<iframe width=\"373\" height=\"210\" src=\"https://www.youtube.com/embed/zYaGERJIFpg\" frameborder=\"0\" allowfullscreen></iframe>"+
		"</div></div>"+
		
		"<div class=\"col-lg-12 text-center\">"+
		"<div class=\"col-lg-6 text-center\">"+
		"<h3>Gadgets</h3>"+
		"<iframe width=\"373\" height=\"210\" src=\"https://www.youtube.com/embed/ezpW7wesTNo\" frameborder=\"0\" allowfullscreen></iframe>"+
		"</div>"+
		"<div class=\"col-lg-6 text-center\">"+
		"<h3>Edge Guarding</h3>"+
		"<iframe width=\"373\" height=\"210\" src=\"https://www.youtube.com/embed/-ZpBaNJunNU\" frameborder=\"0\" allowfullscreen></iframe>"+
		"</div></div>";
	}
	
	function raid(){
	document.getElementById("putstuffhere").innerHTML = 
		"<h2>Raidhyn's Tips Tricks and Strategy</h2>"+
		
		"<div class=\"col-lg-12 text-center\">"+
		"<div class=\"col-lg-6 text-center\">"+
		"<h3>Bronze to Silver</h3>"+
		"<iframe width=\"373\" height=\"210\" src=\"https://www.youtube.com/embed/CyLoAXWofFw\" frameborder=\"0\" allowfullscreen></iframe>"+
		"</div>"+
		"<div class=\"col-lg-6 text-center\">"+
		"<h3>Silver to Gold</h3>"+
		"<iframe width=\"373\" height=\"210\" src=\"https://www.youtube.com/embed/s9MULpejzqc\" frameborder=\"0\" allowfullscreen></iframe>"+
		"</div></div>"+
		
		"<div class=\"col-lg-12 text-center\">"+
		"<div class=\"col-lg-6 text-center\">"+
		"<h3>Beginner's Guide</h3>"+
		"<iframe width=\"373\" height=\"210\" src=\"https://www.youtube.com/embed/A9k6JByDK5Y\" frameborder=\"0\" allowfullscreen></iframe>"+
		"</div>"+
		"<div class=\"col-lg-6 text-center\">"+
		"<h3>Playlist of Guides  (Multiple Videos)</h3>"+
		"<iframe width=\"373\" height=\"210\" src=\"https://www.youtube.com/embed/videoseries?list=PLchhmVDwfa3O7VNCWR5y94mc8fPYYWdpU\" frameborder=\"0\" allowfullscreen></iframe>"+
		"</div></div>";
	}
	
	function others(){
	document.getElementById("putstuffhere").innerHTML = 
		"<h2>Other Brawlhalla Guides</h2>"+
		
		"<div class=\"col-lg-12 text-center\">"+
		"<div class=\"col-lg-6 text-center\">"+
		"<h3>Dobrein's Combo Guide (1.19)</h3>"+
		"<iframe width=\"373\" height=\"210\" src=\"https://www.youtube.com/embed/28JIMNGzLO4\" frameborder=\"0\" allowfullscreen></iframe>"+
		"</div>"+
		"<div class=\"col-lg-6 text-center\">"+
		"<h3>Dobrein's Combo Guide (2.3.2)</h3>"+
		"<iframe width=\"373\" height=\"210\" src=\"https://www.youtube.com/embed/LZcDy7oZgCA\" frameborder=\"0\" allowfullscreen></iframe>"+
		"</div></div>"+
	
		"<div class=\"col-lg-12 text-center\">"+
		"<div class=\"col-lg-6 text-center\">"+
		"<h3>TWKSmash's Bow Combos in 26 Seconds</h3>"+
		"<iframe width=\"373\" height=\"210\" src=\"https://www.youtube.com/embed/O2drAoeYY9E\" frameborder=\"0\" allowfullscreen></iframe>"+
		"</div></div>";
	
	}
	</script>



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
