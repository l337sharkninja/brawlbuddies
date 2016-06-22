<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
function array_search2d_by_field($needle, $haystack, $field) {
    foreach ($haystack as $index => $innerArray) {
        if (isset($innerArray[$field]) && $innerArray[$field] === $needle) {
            return $index;
        }
    }
    return false;
}
$key1 = array_search2d_by_field($_SESSION['guideid'],$_SESSION['guideData'],'guideid');
$key = array_search($_SESSION['userData'][0]['brawlid'],$_SESSION['guideData'][$key1]['upvotes']);
unset($_SESSION['guideData'][$key1]['upvotes'][$key]);
echo 'upvote  upvotekey:'.$key.'    guidekey:'.$key1;
echo var_dump($_SESSION['guideData'][$key1]);
$servername = "localhost";
$username = "BrawlBuddy";
$password = "Brawl123!";
$dbname = "brawlbuddiesinfo";
$info = new mysqli($servername, $username, $password, $dbname);
if ($info->connect_error) {
    die("Connection failed: " . $info->connect_error);
}

$createGuide = $info->prepare("UPDATE guidelist SET upvotes = ? WHERE guideid=?");
$createGuide->bind_param("si",$upvotes,$guideid);
$guideid = $_SESSION['guideid'];
$upvotes = serialize($_SESSION['guideData'][$key1]['upvotes']);
$createGuide->execute();
$createGuide->close();
$info->close();
echo $upvotes;
require('getGuides.php');
?>