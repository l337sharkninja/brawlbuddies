<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
$termsErr = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (!(!empty($_POST['server1']) OR !empty($_POST['server2']) OR !empty($_POST['server3']))) {
	$termsErr = "<span class=\"error\">Please select a region.</span><br>";
}
else{
	if(!empty($_POST['server1'])){$_SESSION['server']=1;}
	if(!empty($_POST['server2'])){$_SESSION['server']=2;}
	if(!empty($_POST['server3'])){$_SESSION['server']=3;}
	//connecting to database
	require("eloFinder.php");
	$servername = "localhost";
	$username = "BrawlBuddy";
	$password = "Brawl123!";
	$dbname = "brawlbuddiesinfo";
	$info = new mysqli($servername, $username, $password, $dbname);
	if ($info->connect_error) {
		die("Connection failed: " . $info->connect_error);
	}
	$updateUser = "UPDATE userlist SET server = '{$_SESSION['server']}', elo = '{$_SESSION['elo']}' WHERE  steamid = '{$_SESSION['steamid']}'";
	if ($info->query($updateUser) === TRUE) {
		include('tools/updateRegList.pp');
		header('Location: index.php');
		die();
}}}


echo "<img height=247 width=360 src=\"images/brawlbuddies.png\"/><br>";
echo "<br><h4>Select a server region:</h4>";
echo "<form role=\"form\" method=\"post\" action=\"".htmlspecialchars($_SERVER["PHP_SELF"])."\">";
echo "<input style=\"border: 3px solid darkorange; margin: 5px 10px;\" width=300  height=200 type=\"image\" name=\"server1\" src=\"images/server_1.jpg\" border=\"0\" alt=\"submit\" value=\"1\"/>";
echo "<input style=\"border: 3px solid darkorange; margin: 5px 10px;\" width=300  height=200 type=\"image\" name=\"server2\" src=\"images/server_2.jpg\" border=\"0\" alt=\"submit\" value=\"2\"/>";
echo "<input style=\"border: 3px solid darkorange; margin: 5px 10px;\" width=300  height=200 type=\"image\" name=\"server3\" src=\"images/server_3.jpg\" border=\"0\" alt=\"submit\" value=\"3\"/>";
echo "</form>";
?>