<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
echo "<form role=\"form\" method=\"post\" action=\"".htmlspecialchars($_SERVER["PHP_SELF"])."\">";
echo "<button class=\"btn btn-med btn-default\" style=\"border: 3px solid darkorange; margin: 5px 10px;\" type=\"submit\" name=\"mail\" border=\"0\" alt=\"submit\" value=\"1\">Inbox</button>";
echo "<button class=\"btn btn-med btn-default\" style=\"border: 3px solid darkorange; margin: 5px 10px;\" type=\"submit\" name=\"sentmail\" border=\"0\" alt=\"submit\" value=\"1\">Sent</button>";
echo "</form>";

if(isset($_POST['mail'])){
echo "<h3>Inbox</h3><br>";
require('tools/getMail.php');
$_SESSION['mailcounter'] = 0;
echo "<div class=\"form-group col-lg-12 text-center\">";
echo "<div class='table-responsive'>";
echo "<table class='table table-bordered table-hover table-striped'>";
	echo "<thead>";
		echo "<tr>";
			echo "<th><b>From</b></th>";
			echo "<th><b>Subject</b></th>";
			echo "<th><b>Time</b></th>";
		echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
	if(isset($mailData)){
	for($i=0;$i<count($mailData);$i++){
		echo "<tr onclick='openmail(i);'>";
			echo "<td>{$mailData[$i]['sender']}</td>";
			echo "<td onclick='openmail({$i});'><a>{$mailData[$i]['subject']}</a></td>";
			echo "<td>{$mailData[$i]['time']}</td>";
		echo "</tr>";
		echo "<tr id='showstuff{$i}' style='display: none;'><td colspan='3'>{$mailData[$i]['message']}<br><a onclick=\"replymail({$i});\"><h4 class=\"btn btn-sm btn-default text-center\">Reply</h4></a></td></tr>";
		if($i==20){break;}
		}}else{
			echo "<tr>";
			echo "<td>SharkNinja</td>";
			echo "<a><td onclick='openmail(0);'><a>Welcome to Brawl Buddies!</a></td>";
			echo "<td></td>";
		echo "</tr>";
		echo "<tr id='showstuff0' style='display: none;'><td colspan='3'>Welcome to Brawl Buddies messages!  There's nothing here yet, but this messaging system has been created to make it easier to communicate with other Brawlers before adding them on steam.  This is the best way to hang out and brawl with others before adding them on steam!</td></tr>";
		}
	echo "</tbody>";
echo "</table>";
echo "<br><br><br><br><br><br><br><br></div></div>";}else{
echo "<h3>Sent Messages</h3><br>";
require('tools/getSentMail.php');
$_SESSION['mailcounter'] = 0;
echo "<div class=\"form-group col-lg-12 text-center\">";
echo "<div class='table-responsive'>";
echo "<table class='table table-bordered table-hover table-striped'>";
	echo "<thead>";
		echo "<tr>";
			echo "<th><b>To</b></th>";
			echo "<th><b>Subject</b></th>";
			echo "<th><b>Time</b></th>";
		echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
	if(isset($mailData)){
	for($i=0;$i<count($mailData);$i++){
		echo "<tr>";
			echo "<td>{$mailData[$i]['sender']}</td>";
			echo "<td onclick='openmail({$i});'><a>{$mailData[$i]['subject']}</a></td>";
			echo "<td>{$mailData[$i]['time']}</td>";
		echo "</tr>";
		echo "<tr id='showstuff{$i}' style='display: none;'><td colspan='3'>{$mailData[$i]['subject']}</td></tr>";
		if($i==20){break;}
		}}else{
			echo "<tr>";
			echo "<td>SharkNinja</td>";
			echo "<td onclick='openmail(0);'><a>Welcome to Brawl Buddies!</a></td>";
			echo "<td></td>";
		echo "</tr>";
		echo "<tr id='showstuff0' style='display: none;'><td colspan='3'>Welcome to Brawl Buddies messages!  There's nothing here yet, but this messaging system has been created to make it easier to communicate with other Brawlers before adding them on steam.  This is the best way to hang out and brawl with others before adding them on steam!</td></tr>";
		}
	echo "</tbody>";
echo "</table>";
echo "<br><br><br><br><br><br><br><br></div></div>";
}

?>

<script>
function openmail(i){
 if( document.getElementById("showstuff"+i).style.display=='none' ){
   document.getElementById("showstuff"+i).style.display = '';
 }else{
   document.getElementById("showstuff"+i).style.display = 'none';
 }
}
var myWindow;

function replymail(i){
    myWindow = window.open("tools/replyMail.php?i="+i, "", "width=500, height=300");
}
</script>