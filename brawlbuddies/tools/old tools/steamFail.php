<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
echo "<img height=247 width=360 src=\"images/brawlbuddies.png\"/><br><h2  class=\"btn btn-lg btn-default\" onclick='openWin();'>What is Brawl Buddies?</h2>";
echo "<h4><span class=\"error\"><br>You must be logged in through steam to access this page.</span></h4><hr>Steam log in is used only to confirm your indenity, and there is no transfer of private information.  For more specific information about what information is gathered and used to make Brawl Buddies possible, please check out the privacy policy below!<br><br><br><br><br><br>";
?>
<script>
var myWindow;
function openWin() {
    myWindow = window.open("tools/bbInfo.php", "", "width=500, height=500");
}
</script>