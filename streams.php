<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="View a list of lives streams from Twitch.tv!">
    <meta name="keywords" content="brawlhalla, find teams, guide, guides, info, information, twitch streams, streams, party, brawl buddies, friend finder, legends, maps, items, weapons, realms, combos">
	<meta name="author" content="Zachary Bagley">

    <title>Live Stream of Brawlhalla - by BrawlKing!</title>

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
						<h1>Live Twitch Streams</h1><hr>
						<?php
						    $link = file_get_contents('https://api.twitch.tv/kraken/streams?game=Brawlhalla');
                            $sinfo = json_decode($link, true);
							for($i = 0; $i < $sinfo['_total']; ){
								if(!$sinfo['streams'][$i]['viewers']){break;}
								echo "<div class=\"col-lg-12 text-center\">";
								echo "<div class=\"col-lg-6 text-center\">";
								echo "<h3>".$sinfo['streams'][$i]['channel']['display_name']."</h3>";
								echo "<a href=\"".$sinfo['streams'][$i]['channel']['url']."\" target=\"_new\">";
								echo "<img src=\"".$sinfo['streams'][$i]['preview']['medium']."\"/></a><br>";
								echo "<small>Description:  ".$sinfo['streams'][$i]['channel']['status']."<br>";
								echo "Viewers:  ".$sinfo['streams'][$i]['viewers']."</small>";
								echo "</div>";
								if($sinfo['_total']%2==0){
									if(!$sinfo['streams'][$i+1]['viewers']){break;}
									echo "<div class=\"col-lg-6 text-center\">";
									echo "<h3>".$sinfo['streams'][$i+1]['channel']['display_name']."</h3>";
									echo "<a href=\"".$sinfo['streams'][$i+1]['channel']['url']."\" target=\"_new\">";
									echo "<img src=\"".$sinfo['streams'][$i+1]['preview']['medium']."\"/></a><br>";
									echo "<small>Description:  ".$sinfo['streams'][$i+1]['channel']['status']."<br>";
									echo "Viewers:  ".$sinfo['streams'][$i+1]['viewers']."</small>";
									echo "</div>";
									echo "<br>";
									}
								if($sinfo['_total']%2!=0 && ($i+1)!=$sinfo['_total']){
									if(!$sinfo['streams'][$i+1]['viewers']){break;}
									echo "<div class=\"col-lg-6 text-center\">";
									echo "<h3>".$sinfo['streams'][$i+1]['channel']['display_name']."</h3>";
									echo "<a href=\"".$sinfo['streams'][$i+1]['channel']['url']."\" target=\"_new\">";
									echo "<img src=\"".$sinfo['streams'][$i+1]['preview']['medium']."\"/></a><br>";
									echo "<small>Description:  ".$sinfo['streams'][$i+1]['channel']['status']."<br>";
									echo "Viewers:  ".$sinfo['streams'][$i+1]['viewers']."</small>";
									echo "</div>";
									echo "<br>";
									}
									echo "</div>";
								$i += 2;
							}
						?>
                    </div>
                </div>
                </div>
                <!-- /.row -->


            <!-- /.container-fluid --><footer class="footer text-center"><a href="privacy.php">privacy policy</a> / <a href="contact.php">contact me</a></footer>

        </div>
        <!-- /#page-wrapper -->



    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

	<script src="js/myscript.js"></script>



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
