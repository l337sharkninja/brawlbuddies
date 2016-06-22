<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

if(isset($_POST['i'])){$i = $_POST['i'];}
if(isset($_GET['i'])){$i = $_GET['i'];}

$subject=$subjecterror=$message=$messageerror=$subjectflag=$subjecterror="";
//ALIAS AND REDDIT POST
if(isset($_POST['sendmessage'])){
if(empty($_POST['subject'])){
$subjectflag = 0;
$subjecterror = "<span class='error'>A subject is required.</span>";
}else{
	$subjecterror = "";
	$subject = test_input($_POST['subject']);
	$subjectflag = 1;
}
if(empty($_POST['message'])){
$messageflag = 0;
$messageerror = "<span class='error'>A message is required.</span>";
}else{
	$messageerror = "";
	$message = test_input($_POST['message']);
	$messageflag = 1;
}
if($subjectflag == 1 && $messageflag==1){
$servername = "localhost";
$username = "BrawlBuddy";
$password = "Brawl123!";
$dbname = "brawlbuddiesinfo";
$info = new mysqli($servername, $username, $password, $dbname);
if ($info->connect_error) {
    die("Connection failed: " . $info->connect_error);
}
$querydata = "INSERT INTO usermail (toid,fromid,sender,receiver,subject,message) VALUES ('{$_SESSION['primaryData'][$i]['brawlid']}','{$_SESSION['brawlid']}','{$_SESSION['primaryData'][$i]['alias']}','{$_SESSION['alias']}','{$_POST['subject']}','{$_POST['message']}')";
if ($info->query($querydata) === TRUE) {echo "<h1>Mail Sent!</h1>";die();echo "<script>setTimeout(function(){window.close();},2000);</script>"; die();}else{echo $info->error;echo "<h1>Mail Sent!</h1>";die();echo "<script>setTimeout(function(){window.close();},2000);</script>"; die();}
}}

echo "<head>";


    echo "<title>Brawl Buddies - Find Brawlhalla Friends from BrawlKing!</title>";

	
	echo "<style>";
	echo ".error {color: #FF0000;}";
	echo "body{color:#001B33;text-align:center;";
    echo "background-color: #B0C8DC;}";
	echo "</style>";
 
echo "</head>";


echo "<body>";
	echo "<h1>Message {$_SESSION['primaryData'][$i]['alias']}:</h1>";
echo "<hr><form role=\"form\" method=\"post\" action=\"".htmlspecialchars($_SERVER["PHP_SELF"])."\">";
echo "<div class=\"col-lg-12 text-center\">Subject:";
	echo $subjecterror;
	echo "<div class=\"col-lg-12 text-center\">";
			echo "<input maxlength=\"50\" size=\"30\"/  name=\"subject\" value=\"".$subject."\">";
	echo "</div>";
echo "</div>";
echo "<input type='hidden' name='i' value='{$i}'/>";
echo "<div class=\"col-lg-12 text-center\"><br>Message:";
	echo $messageerror;
	echo "<div class=\"col-lg-12 text-center\">";
			echo "<textarea id=\"message\" class=\"input\" name=\"message\" rows=\"7\" cols=\"30\" value='{$message}'></textarea><br><br>";
	echo "</div>";
echo "</div>";
echo "<button class=\"btn btn-lg btn-default\" style=\"border: 3px solid darkorange; margin: 5px 10px;\" type=\"submit\" name=\"sendmessage\" border=\"0\" alt=\"submit\" value=\"1\">Send Message</button>";
echo "<br></form>";
	
	
	

echo "</div>";
echo "</body>";