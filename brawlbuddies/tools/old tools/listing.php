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

//REGISTRATION INITIALIZATION
$advflag = 0;
if(!isset($alias)){$alias = $reddit = "";}
$aliasErr = $redditErr = $gameErr = $mainErr = "";

//BEGIN POST OPTIONS
if ($_SERVER["REQUEST_METHOD"] == "POST") {


//CANCEL REGISTRATION
if(isset($_POST['cancel'])){
$_SESSION['register']=3;
require('updateUserReg.php');
require('updateRegList.php');
header('Location: index.php');
die();
}


//ALIAS AND REDDIT POST
if(isset($_POST['aliassubmit'])){
$testerror = 0;
if (empty($_POST["alias"])) {
 $aliasErr = "<span class=\"error\">An alias is required.<br></span>";
 $testerror = 1;
} else {
 $alias = test_input($_POST["alias"]);
 // check if alias only contains letters and whitespace
 if (!preg_match("/^[a-zA-Z0-9]*$/",$alias)) {
   $aliasErr = "<span class=\"error\">Only letters and numbers allowed.<br></span>"; 
   $testerror = 1;
 } else {
 if(!empty($_POST["reddit"])){$reddit = test_input($_POST["reddit"]);
     // check if reddit only contains letters and whitespace
     if (!preg_match("/^[-a-zA-Z0-9_]*$/",$reddit)) {
       $redditErr = "<span class=\"error\">Only letters, numbers, and underscore allowed.<br></span>";
	   $testerror = 1;
   }}}}
if($testerror == 0){
    $_SESSION['reddit']=$_POST['reddit'];
    $_SESSION['alias']=$_POST['alias'];
	$_SESSION['aliasflag']=1;
}}

//LEGEND POST
if(isset($_POST['legendsubmit'])){
if(empty($_POST['main'])){$mainErr = "<span class=\"error\">Please select a main legend.<br></span>";}
else{ if($_POST['main']==$_POST['alt1'] OR ($_POST['alt1'] == $_POST['alt2'] && !empty($_POST['alt1'])) OR $_POST['alt2'] == $_POST['main']){
$mainErr = "<span class=\"error\">Repeated legend found in selection.<br></span>";}
else{
$_SESSION['mainflag']=1;
$_SESSION['main'] = $_POST['main'];
$_SESSION['alt1'] = $_POST['alt1'];
$_SESSION['alt2'] = $_POST['alt2'];
}}}


//GAMETYPE POST
if (isset($_POST['quicksubmit']) || isset($_POST['advoption'])){
if(empty($_POST['gt1'])){$gameErr = "<span class=\"error\">Please select a Gametype 1.<br></span>";}
else{ if($_POST['gt1']==$_POST['gt2'] OR ($_POST['gt2'] == $_POST['gt3'] && !empty($_POST['gt2'])) OR $_POST['gt3'] == $_POST['gt1']){
$gameErr = "<span class=\"error\">Repeated gametype found in selection.<br></span>";}
else{
$_SESSION['gameflag']=1;
if($_POST['gt1']==1 || $_POST['gt2'] == 1 || $_POST['gt3'] == 1){
$_SESSION['gt1'] = 1;}else{$_SESSION['gt1'] = 0;}
if($_POST['gt1']==2 || $_POST['gt2'] == 2 || $_POST['gt3'] == 2){
$_SESSION['gt2'] = 1;}else{$_SESSION['gt2'] = 0;}
if($_POST['gt1']==3 || $_POST['gt2'] == 3 || $_POST['gt3'] == 3){
$_SESSION['gt3'] = 1;}else{$_SESSION['gt3'] = 0;}
}}}


//SUBMIT POST

//basic submit
if (isset($_POST['quicksubmit']) && isset($_SESSION['gameflag'])){
$_SESSION['finalflag']=1;
$_SESSION['register']=1;
require('tools/updateUserReg.php');

if($_SESSION['gt1']==1){
$_SESSION['opt3'] = 1;
$_SESSION['opt6'] = 1;
$_SESSION['opt7'] = 1;}

if($_SESSION['gt3']==1){
$_SESSION['opt12'] = 1;
$_SESSION['opt13'] = 1;
$_SESSION['opt14'] = 1;}

require('tools/updateRegList.php');
require('tools/getRegInfo.php');
header('Location: index.php');die();}


//advanced submit
if(isset($_POST['advsubmit'])){
$_SESSION['finalflag']=1;
$_SESSION['register']=1;
require('tools/updateUserReg.php');
if(isset($_POST['opt1'])){$_SESSION['opt1'] = $_POST['opt1'];}else{$_SESSION['opt1'] = 600;}
if(isset($_POST['opt2'])){$_SESSION['opt2'] = $_POST['opt2'];}else{$_SESSION['opt2'] = 600;}
if(isset($_POST['opt3'])){$_SESSION['opt3'] = 1;}else{$_SESSION['opt3'] = 0;}
if(isset($_POST['opt4'])){$_SESSION['opt4'] = $_POST['opt4'];}else{$_SESSION['opt4'] = 300;}
if(isset($_POST['opt5'])){$_SESSION['opt5'] = $_POST['opt5'];}else{$_SESSION['opt5'] = 300;}
if(isset($_POST['opt6'])){$_SESSION['opt6'] = 1;}else{$_SESSION['opt6'] = 0;}
if(isset($_POST['opt7'])){$_SESSION['opt7'] = 1;}else{$_SESSION['opt7'] = 0;}
if(isset($_POST['opt8'])){$_SESSION['opt8'] = $_POST['opt8'];}else{$_SESSION['opt8'] = 0;}
if(isset($_POST['opt9'])){$_SESSION['opt9'] = $_POST['opt9'];}else{$_SESSION['opt9'] = 0;}
if(isset($_POST['opt10'])){$_SESSION['opt10'] = $_POST['opt10'];}else{$_SESSION['opt10'] = 0;}
if(isset($_POST['opt11'])){$_SESSION['opt11'] = $_POST['opt11'];}else{$_SESSION['opt11'] = 0;}
if(isset($_POST['opt12'])){$_SESSION['opt12'] = 1;}else{$_SESSION['opt12'] = 0;}
if(isset($_POST['opt13'])){$_SESSION['opt13'] = 1;}else{$_SESSION['opt13'] = 0;}
if(isset($_POST['opt14'])){$_SESSION['opt14'] = 1;}else{$_SESSION['opt14'] = 0;}

require('tools/updateRegList.php');
header('Location: index.php');die();}}


//1: alias and reddit (save->next,cancel)
//2: legends (save->next,cancel)
//3: gametype (save->submit, adv options, cancel)
//4: advanced options (submit, cancel)

if(!isset($_SESSION['aliasflag'])){
echo "<img height=247 width=360 src=\"images/brawlbuddies.png\"/><br>";
echo "<h3>Alias and Reddit Username</h3><p>An alias is a Brawl Buddies specific name (A nice little way to keep your steam name hidden if you'd like).  ";
echo  "There is also the option to add your reddit name so users can find you on reddit.</p>";
echo "<hr><form role=\"form\" method=\"post\" action=\"".htmlspecialchars($_SERVER["PHP_SELF"])."\">";
echo "<div class=\"col-lg-12 text-center\"><h4>Enter an Alias";
	echo "<span class=\"error\">*</span></h4>".$aliasErr."</span>";
	echo "<div class=\"col-lg-12 text-center\">";
			echo "<input maxlength=\"24\" size=\"26\"/  name=\"alias\" value=\"".$alias."\">";
	echo "</div>";
echo "</div>";
echo "<div class=\"col-lg-12 text-center\"><br><h4>Reddit Username</h4>";
	echo $redditErr;
	echo "<div class=\"col-lg-12 text-center\">";
			echo "<input maxlength=\"24\" size=\"26\"/  name=\"reddit\" value=\"".$reddit."\"><br><br>";
	echo "</div>";
echo "</div>";
echo "<button class=\"btn btn-lg btn-default\" style=\"border: 3px solid darkorange; margin: 5px 10px;\" type=\"submit\" name=\"aliassubmit\" border=\"0\" alt=\"submit\" value=\"1\">Next</button>";
echo "<button class=\"btn btn-lg btn-default\" style=\"border: 3px solid darkorange; margin: 5px 10px;\" type=\"submit\" name=\"cancel\" border=\"0\" alt=\"submit\" value=\"1\">Cancel</button>";
echo "<br><br></form>";
}else{


if(!isset($_SESSION['mainflag'])){
echo "<img height=247 width=360 src=\"images/brawlbuddies.png\"/><br>";
echo "<h3>Legend Selection</h3><p>Here you will pick your most played legend as your main. You can also pick up to two additional legends as your alternates.</p>";
echo "<hr><form role=\"form\" method=\"post\" action=\"".htmlspecialchars($_SERVER["PHP_SELF"])."\">";
echo "<h4>Legend Preferences";
	echo "</h4>".$mainErr."</span>";
	echo "<label>Main Legend</label><span class=\"error\">*</span>";
	echo "<select style=\"width:250px;margin:auto;\" class=\"form-control\" name=\"main\">";
		echo "<option value=\"\">Please Select</option>";
		echo "<option value=\"1\">Ada</option>";
		echo "<option value=\"2\">Asuri</option>";
		echo "<option value=\"18\">Azoth</option>";
		echo "<option value=\"3\">Barraza</option>";
		echo "<option value=\"4\">B&#246;dvar</option>";
		echo "<option value=\"5\">Brynn</option>";
		echo "<option value=\"6\">Cassidy</option>";
		echo "<option value=\"7\">Ember</option>";
		echo "<option value=\"8\">Gnash</option>";
		echo "<option value=\"19\">Hattori</option>";
		echo "<option value=\"20\">Koji</option>";
		echo "<option value=\"9\">Lord Vraxx</option>";
		echo "<option value=\"10\">Lucien</option>";
		echo "<option value=\"11\">Orion</option>";
		echo "<option value=\"12\">Queen Nai</option>";
		echo "<option value=\"13\">Scarlet</option>";
		echo "<option value=\"14\">Sentinel</option>";
		echo "<option value=\"15\">Sir Roland</option>";
		echo "<option value=\"16\">Teros</option>";
		echo "<option value=\"17\">Thatch</option>";
	echo "</select>";
	echo "<label>Alternate Legend #1</label>";
	echo "<select style=\"width:250px;margin:auto;\" class=\"form-control\" name=\"alt1\">";
		echo "<option value=\"0\">None</option>";
		echo "<option value=\"1\">Ada</option>";
		echo "<option value=\"2\">Asuri</option>";
		echo "<option value=\"18\">Azoth</option>";
		echo "<option value=\"3\">Barraza</option>";
		echo "<option value=\"4\">B&#246;dvar</option>";
		echo "<option value=\"5\">Brynn</option>";
		echo "<option value=\"6\">Cassidy</option>";
		echo "<option value=\"7\">Ember</option>";
		echo "<option value=\"8\">Gnash</option>";
		echo "<option value=\"19\">Hattori</option>";
		echo "<option value=\"20\">Koji</option>";
		echo "<option value=\"9\">Lord Vraxx</option>";
		echo "<option value=\"10\">Lucien</option>";
		echo "<option value=\"11\">Orion</option>";
		echo "<option value=\"12\">Queen Nai</option>";
		echo "<option value=\"13\">Scarlet</option>";
		echo "<option value=\"14\">Sentinel</option>";
		echo "<option value=\"15\">Sir Roland</option>";
		echo "<option value=\"16\">Teros</option>";
		echo "<option value=\"17\">Thatch</option>";
	echo "</select>";
	echo "<label>Alternate Legend #2</label>";
	echo "<select style=\"width:250px;margin:auto;\" class=\"form-control\" name=\"alt2\">";
		echo "<option value=\"0\">None</option>";
		echo "<option value=\"1\">Ada</option>";
		echo "<option value=\"2\">Asuri</option>";
		echo "<option value=\"18\">Azoth</option>";
		echo "<option value=\"3\">Barraza</option>";
		echo "<option value=\"4\">B&#246;dvar</option>";
		echo "<option value=\"5\">Brynn</option>";
		echo "<option value=\"6\">Cassidy</option>";
		echo "<option value=\"7\">Ember</option>";
		echo "<option value=\"8\">Gnash</option>";
		echo "<option value=\"19\">Hattori</option>";
		echo "<option value=\"20\">Koji</option>";
		echo "<option value=\"9\">Lord Vraxx</option>";
		echo "<option value=\"10\">Lucien</option>";
		echo "<option value=\"11\">Orion</option>";
		echo "<option value=\"12\">Queen Nai</option>";
		echo "<option value=\"13\">Scarlet</option>";
		echo "<option value=\"14\">Sentinel</option>";
		echo "<option value=\"15\">Sir Roland</option>";
		echo "<option value=\"16\">Teros</option>";
		echo "<option value=\"17\">Thatch</option>";
	echo "</select><br>";
echo "<button class=\"btn btn-lg btn-default\" style=\"border: 3px solid darkorange; margin: 5px 10px;\" type=\"submit\" name=\"legendsubmit\" border=\"0\" alt=\"submit\">Next</button>";
echo "<button class=\"btn btn-lg btn-default\" style=\"border: 3px solid darkorange; margin: 5px 10px;\" type=\"submit\" name=\"cancel\" border=\"0\" alt=\"submit\" value=\"1\">Cancel</button>";
echo "<br><br></form>";

}else{


if(!isset($_SESSION['gameflag'])){
echo "<img height=247 width=360 src=\"images/brawlbuddies.png\"/><br>";
echo "<h3>Gametype Selection</h3><p>These are used as filters when searching Brawl Buddies.  Select whichever game modes you like to play!  More advanced options are available, but not required.</p>";
echo "<hr><form role=\"form\" method=\"post\" action=\"".htmlspecialchars($_SERVER["PHP_SELF"])."\">";
echo "<h4>Gametypes played:";
	echo "</h4>".$gameErr."</span>";
	echo "<label>Gametype 1:</label><span class=\"error\">*</span>";
	echo "<select style=\"width:250px;margin:auto;\" class=\"form-control\" name=\"gt1\">";
		echo "<option value=\"\">Please Select</option>";
		echo "<option value=\"1\">Ranked (1v1 or 2v2)</option>";
		echo "<option value=\"2\">Free For All</option>";
		echo "<option value=\"3\">Custom Online (Brawlball, Snowbrawl, etc)</option>";
	echo "</select>";
	echo "<label>Gametype 2:</label>";
	echo "<select style=\"width:250px;margin:auto;\" class=\"form-control\" name=\"gt2\">";
		echo "<option value=\"\">None</option>";
		echo "<option value=\"1\">Ranked (1v1 or 2v2)</option>";
		echo "<option value=\"2\">Free For All</option>";
		echo "<option value=\"3\">Custom Online (Brawlball, Snowbrawl, etc)</option>";
	echo "</select>";
	echo "<label>Gametype 3:</label>";
	echo "<select style=\"width:250px;margin:auto;\" class=\"form-control\" name=\"gt3\">";
		echo "<option value=\"\">None</option>";
		echo "<option value=\"1\">Ranked (1v1 or 2v2)</option>";
		echo "<option value=\"2\">Free For All</option>";
		echo "<option value=\"3\">Custom Online (Brawlball, Snowbrawl, etc)</option>";
	echo "</select><br>";
echo "<button class=\"btn btn-lg btn-default\" style=\"border: 3px solid darkorange; margin: 5px 10px;\" type=\"submit\" name=\"quicksubmit\" border=\"0\" alt=\"submit\" value=\"1\">Finish and Submit</button>";
echo "<button class=\"btn btn-lg btn-default\" style=\"border: 3px solid darkorange; margin: 5px 10px;\" type=\"submit\" name=\"advoption\" border=\"0\" alt=\"submit\" value=\"1\">Advanced Options</button>";
echo "<button class=\"btn btn-lg btn-default\" style=\"border: 3px solid darkorange; margin: 5px 10px;\" type=\"submit\" name=\"cancel\" border=\"0\" alt=\"submit\" value=\"1\">Cancel</button>";
echo "<br><br></form>";
}else{




if (!isset($_SESSION['finalflag'])){
//advanced options
echo "<h3>Advanced Options</h3>";
echo "<hr><form role=\"form\" method=\"post\" action=\"".htmlspecialchars($_SERVER["PHP_SELF"])."\">";
if($_SESSION['gt1']==1){

echo "<div class=\"col-lg-12 text-center\">";
echo "<div class=\"col-lg-6 text-center\">";
//gametype 1 options
echo "<h4><b><u>Ranked 1v1</b></u></h4>";
echo "Visibility ELO Range (only people with elo in this range can see your profile):<br>";
echo "<input type=\"number\" name=\"opt1\" min=\"0\" max=\"1000\" step=\"1\" value=\"600\"> Max ELO Above Mine (Choose '0' for no limit)<br>";
echo "<input type=\"number\" name=\"opt2\" min=\"0\" max=\"1000\" step=\"1\" value=\"600\"> Min ELO Below Mine (Choose '0' for no limit)<br>";
echo "I am looking for a sparring partner to practice ranked 1v1: <input type=\"checkbox\"  name=\"opt3\" value=\"1\" checked><br>";
echo "</div><div class=\"col-lg-6 text-center\">";
echo "<h4><b><u>Ranked 2v2</b></u></h4>";
echo "<input type=\"number\" size=\"6\" name=\"opt4\" min=\"0\" max=\"1000\" step=\"1\" value=\"300\"> Max ELO Above Mine (Choose '0' for no limit)<br>";
echo "<input type=\"number\" name=\"opt5\" min=\"0\" max=\"1000\" step=\"1\" value=\"300\"> Min ELO Below Mine (Choose '0' for no limit)<br>";
echo "I am looking for:<br> A teammate for Ranked 2v2: <input type=\"checkbox\"  name=\"opt6\" value=\"1\" checked><br>";
echo "Sparring with 2v2 teams: <input type=\"checkbox\"  name=\"opt7\" value=\"1\" checked><br>";
echo "</div></div>";
}
echo "<div class=\"col-lg-12 text-center\">";
if($_SESSION['gt2']==1){
//gametype 2 options
echo "<div class=\"col-lg-6 text-center\">";
echo "<br><br><h4><b><u>Free For All</b></u></h4>";
echo "Visibility ELO Range (only people with elo in this range can see your profile):<br>";
echo "<input type=\"number\" name=\"opt8\" min=\"0\" max=\"1000\" step=\"1\" value=0> Max ELO Above Mine (Choose '0' for no limit)<br>";
echo "<input type=\"number\" name=\"opt9\" min=\"0\" max=\"1000\" step=\"1\" value=\"0\"> Min ELO Below Mine (Choose '0' for no limit)<br>";
echo "I am looking for people to FFA with: <input type=\"checkbox\"  name=\"ffa\" value=\"1\" checked><br>";
echo "</div>";
}
if($_SESSION['gt3']==1){
//gametype 3 options
echo "<div class=\"col-lg-6 text-center\">";
echo "<br><br><h4><b><u>Custom Online</b></u></h4>";
echo "Visibility ELO Range (only people with elo in this range can see your profile):<br>";
//<input type="number" name="points" min="0" max="100" step="10" value="30">
echo "<input type=\"number\" name=\"opt10\" min=\"0\" max=\"1000\" step=\"1\" value=\"0\"> Max ELO Above Mine (Choose '0' for no limit)<br>";
echo "<input type=\"number\" name=\"opt11\" min=\"0\" max=\"1000\" step=\"1\" value=\"0\"> Min ELO Below Mine (Choose '0' for no limit)<br>";
echo "I am looking for:<br> Brawlball: <input type=\"checkbox\"  name=\"opt12\" value=\"1\" checked><br>";
echo "Bombsketball: <input type=\"checkbox\"  name=\"opt13\" value=\"1\" checked><br>";
echo "Snowbrawl: <input type=\"checkbox\"  name=\"opt14\" value=\"1\" checked><br>";
echo "</div>";
}
echo "</div>";
echo "<div class=\"col-lg-12 text-center\"><br><br><br>";
echo "<button class=\"btn btn-lg btn-default\" style=\"border: 3px solid darkorange; margin: 5px 10px;\" type=\"submit\" name=\"advsubmit\" border=\"0\" alt=\"submit\" value=\"1\">Change Advanced Options</button>";
echo "<button class=\"btn btn-lg btn-default\" style=\"border: 3px solid darkorange; margin: 5px 10px;\" type=\"submit\" name=\"quicksubmit\" border=\"0\" alt=\"submit\" value=\"1\">Cancel</button>";
echo "</form><br><br><br><br><br><br><br><br><br>";
echo "</div>";
}}}}
?>
