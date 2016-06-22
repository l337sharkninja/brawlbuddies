<!DOCTYPE html>

<html lang="en">

<head>
	<meta name="msvalidate.01" content="11B29EC0BB823E32D44958D5FDA66015" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="View Brawlhalla guides and streams.  Find Brawl Buddies, information on the newest updates, and more!">
    <meta name="keywords" content="brawlhalla, find teams, guide, guides, info, information, twitch streams, streams, party, brawl buddies, friend finder, legends, maps, items, weapons, realms, combos">
	<meta name="author" content="Zachary Bagley">
	
    <title>Welcome to BrawlKing!</title>

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

<!-- MAIN CONTAINER -->
<div class="container-fluid info-box"><div class="row text-box col-lg-12 text-center">
<h1>Brawlhalla News!</h1><hr>
<?php
$link = file_get_contents('http://api.steampowered.com/ISteamNews/GetNewsForApp/v0002/?appid=291550&count=6&maxlength=600&format=json');
$news = json_decode($link, true);
for ($i = 0; $i < 6; $i++){
echo "<h3><a href=\"".$news['appnews']['newsitems'][$i]['url']."\" target=\"_blank\">";
echo $news['appnews']['newsitems'][$i]['title'];
echo "</a></h3>";
echo "<p><small><b>";
echo gmdate("Y-m-d", $news['appnews']['newsitems'][$i]['date']);
echo "</b></small><br><br>";
echo $news['appnews']['newsitems'][$i]['contents'];
echo "... <a href=\"".$news['appnews']['newsitems'][$i]['url']."\" target=\"_blank\"><span class=\"small\">read more...</span></a></p>";
}
?>
</div></div>

<!-- FOOTER -->
<footer class="footer text-center"><a href="privacy.php">privacy policy</a> / <a href="contact.php">contact me</a></footer>




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
