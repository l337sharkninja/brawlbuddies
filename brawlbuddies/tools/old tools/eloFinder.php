<?php
if(!isset($_SESSION)) 
{ 
	session_start();
} 

if($_SESSION['server']=="1"){$server="us";}
if($_SESSION['server']=="2"){$server="eu";}
if($_SESSION['server']=="3"){$server="sea";}
$name = $_SESSION['steam_personaname'];
$url     = "http://www.brawlhalla.com/rankings/".$server."/1v1/?p=" . urlencode($name);
        $handler = curl_init();
        curl_setopt($handler, CURLOPT_URL, $url);
        curl_setopt($handler, CURLOPT_USERAGENT, "BrawlKing.com");
        curl_setopt($handler, CURLOPT_RETURNTRANSFER, true);
        $str = curl_exec($handler);
        curl_close($handler);
$DOM = new DOMDocument;
@$DOM->loadHTML($str);

$items = $DOM->getElementsByTagName('tr');
for ($itr = 4; $itr < $items->length - 1; $itr++) {
	$thisitems = $items->item($itr)->getElementsByTagName('td');
	$data      = array();
	for ($itd = 1; $itd < $thisitems->length; $itd++) {
		if ($itd != 3) {
			if ($itd != 4) {
				$data[] = $thisitems->item($itd)->nodeValue;
			} else {
				$winslosses = explode("-", $thisitems->item($itd)->nodeValue);
				$data[]     = $winslosses[0];
				$data[]     = $winslosses[1];
			}
		}
	}
}
$_SESSION['elo']= $data[4];

?>