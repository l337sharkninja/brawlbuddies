<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (!(!empty($_POST['reg1']) OR !empty($_POST['reg2']) OR !empty($_POST['reg3']))) {
	$termsErr = "<span class=\"error\">Please select a region.</span><br>";
}
else{
	if(!empty($_POST['reg1'])){$_SESSION['register']=4;}
	if(!empty($_POST['reg2'])){$_SESSION['register']=2;}
	if(!empty($_POST['reg3'])){$_SESSION['register']=3;}
	//connecting to database
	$servername = "localhost";
	$username = "BrawlBuddy";
	$password = "Brawl123!";
	$dbname = "brawlbuddiesinfo";
	$info = new mysqli($servername, $username, $password, $dbname);
	if ($info->connect_error) {
		die("Connection failed: " . $info->connect_error);
	}
	$updateUser = "UPDATE userlist SET register = '{$_SESSION['register']}' WHERE  steamid = '{$_SESSION['steamid']}'";
	if ($info->query($updateUser) === TRUE) {include('tools/updateRegList.pp');header('Location: index.php');die();
}}}


echo "<img height=247 width=360 src=\"images/brawlbuddies.png\"/><br>";
echo "<br><h2>Join The Brawl Buddies System</h2>";
echo "<br><h4>Fill out a few simple questions to quickly get listed in the brawl buddies system.</h4>";
echo "<form role=\"form\" method=\"post\" action=\"".htmlspecialchars($_SERVER["PHP_SELF"])."\">";
echo "<button class=\"btn btn-lg btn-default\" style=\"border: 3px solid darkorange; margin: 5px 10px;\" type=\"submit\" name=\"reg1\" border=\"0\" alt=\"submit\" value=\"1\">OK!</button>";
echo "<button class=\"btn btn-lg btn-default\" style=\"border: 3px solid darkorange; margin: 5px 10px;\" type=\"submit\" name=\"reg3\" border=\"0\" alt=\"submit\" value=\"3\">Skip, for now.</button>";
echo "<button class=\"btn btn-lg btn-default\" style=\"border: 3px solid darkorange; margin: 5px 10px;\" type=\"submit\" name=\"reg2\" border=\"0\" alt=\"submit\" value=\"2\">No, thanks.</button>";
echo "<br><br><br></form>";
?>