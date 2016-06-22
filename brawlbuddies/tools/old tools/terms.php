<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
$termsErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(isset($_POST['termsubmit'])){
if (empty($_POST['terms'])) {
	$termsErr = "<span class=\"error\">You are required to read and agree to these before using Brawl Buddies.</span><br>";
}
else{
	//connecting to database
	$servername = "localhost";
	$username = "BrawlBuddy";
	$password = "Brawl123!";
	$dbname = "brawlbuddiesinfo";
	$info = new mysqli($servername, $username, $password, $dbname);
	if ($info->connect_error) {
		die("Connection failed: " . $info->connect_error);
	}
	$updateUser = "UPDATE userlist SET terms = 1 WHERE  steamid = '{$_SESSION['steamid']}'";
	if ($info->query($updateUser) === TRUE) {
		include('tools/updateRegList.pp');
		header('Location: index.php');
		die();
}}}}


echo "<img height=247 width=360 src=\"images/brawlbuddies.png\"/><br>";
echo "<form role=\"form\" method=\"post\" action=\"".htmlspecialchars($_SERVER["PHP_SELF"])."\">";

echo "<div class=\"col-lg-12 text-center\"><br><h4>The end user license agreement is to make sure Brawl Buddies is used in accordance with the law.  The privacy policy was made to inform you that public information is gathered from external sites (steamcommunity.com, brawlhalla.com) and stored to use Brawl Buddies.  These are only the basic principals, and you should the entire documents before clicking.";
echo "<span class=\"error\">*</span></h4>".$termsErr."</span>";
echo "<label class=\"checkbox-inline\">";
echo "<input type=\"checkbox\"  name=\"terms\" value=\"1\">By selecting this I agree that I have read and agree to the <a href=\"../../privacy.php\" target=\"_blank\">privacy policy</a> and <a href=\"../eula.htm\" target=\"_blank\">end user license agreement</a>.";
echo "</label><br><br>";
echo "<button type=\"submit\" class=\"btn btn-default\" name=\"termsubmit\">I agree</button><br><br><br><br>";
echo "</form>";
?>