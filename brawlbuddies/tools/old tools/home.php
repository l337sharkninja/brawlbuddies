<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
////random functions//

//register
if(isset($_POST['register'])){
$_SESSION['register'] = 4;
require('updateUserReg.php');
require('updateRegList.php');
header('Location: index.php');
}

////page initialization//
$mainErr = $optionSuccess = "";


//OPTIONS FORWARD POST
if(isset($_POST['advsubmit'])){

if($_POST['main']==$_POST['alt1'] OR ($_POST['alt1'] == $_POST['alt2'] && !empty($_POST['alt1'])) OR $_POST['alt2'] == $_POST['main']){
$mainErr = "<span class=\"error\">Repeated legend found in selection.  No legend updates were made.<br></span>";}
else{
$_SESSION['main'] = $_POST['main'];
$_SESSION['alt1'] = $_POST['alt1'];
$_SESSION['alt2'] = $_POST['alt2'];
}
$_SESSION['server'] = $_POST['server'];
$_SESSION['opt1'] = $_POST['opt1'];
$_SESSION['opt2'] = $_POST['opt2'];
if(isset($_POST['opt3'])){$_SESSION['opt3'] = 1;}else{$_SESSION['opt3'] = 0;}
$_SESSION['opt4'] = $_POST['opt4'];
$_SESSION['opt5'] = $_POST['opt5'];
if(isset($_POST['opt6'])){$_SESSION['opt6'] = 1;}else{$_SESSION['opt6'] = 0;}
if(isset($_POST['opt7'])){$_SESSION['opt7'] = 1;}else{$_SESSION['opt7'] = 0;}
$_SESSION['opt8'] = $_POST['opt8'];
$_SESSION['opt9'] = $_POST['opt9'];
$_SESSION['opt10'] = $_POST['opt10'];
$_SESSION['opt11'] = $_POST['opt11'];
if(isset($_POST['opt12'])){$_SESSION['opt12'] = 1;}else{$_SESSION['opt12'] = 0;}
if(isset($_POST['opt13'])){$_SESSION['opt13'] = 1;}else{$_SESSION['opt13'] = 0;}
if(isset($_POST['opt14'])){$_SESSION['opt14'] = 1;}else{$_SESSION['opt14'] = 0;}
if(isset($_POST['ffa'])){$_SESSION['gt2'] = 1;}else{$_SESSION['gt2'] = 0;}
require('tools/updateRegList.php');
require('tools/updateServer.php');
$optionSuccess = "<span class=\"error\">Options Successfully Updated.<br></span>";
}


$optflag3 = $optflag6 = $optflag7 = $optflag12 = $optflag13 = $optflag14 = $ffaflag = "";
//SEARCH POST
if(isset($_POST['search'])){
//ADD CHECKED
if(isset($_POST['opt1'])){$optflag1 = $_POST['opt1'];}else{$optflag1 = 600;}
if(isset($_POST['opt2'])){$optflag2 = $_POST['opt2'];}else{$optflag2 = 600;}

if(isset($_POST['opt3'])){$optflag3 = 'checked';}
if(isset($_POST['opt6'])){$optflag6 = 'checked';}
if(isset($_POST['opt7'])){$optflag7 = 'checked';}
if(isset($_POST['opt12'])){$optflag12 = 'checked';}
if(isset($_POST['opt13'])){$optflag13 = 'checked';}
if(isset($_POST['opt14'])){$optflag14 = 'checked';}
if(isset($_POST['ffa'])){$ffaflag = 'checked';}

if(!isset($_POST['legendsearch'])){$optflag3 = $optflag6 = $optflag7 = $optflag12 = $optflag13 = $optflag14 = $ffaflag = 'checked'; $_POST['legendsearch']=0; $_POST['serversearch']=0; $searchtitle='Recent Additions to Brawl Buddies';}else{$searchtitle='Advanced Search Results';}
$legendsearchflag0 = $legendsearchflag1=$legendsearchflag2=$legendsearchflag3=$legendsearchflag4=$legendsearchflag5=$legendsearchflag6=$legendsearchflag7=$legendsearchflag8=$legendsearchflag9=$legendsearchflag10=$legendsearchflag11=$legendsearchflag12=$legendsearchflag13=$legendsearchflag14=$legendsearchflag15=$legendsearchflag16=$legendsearchflag17=$legendsearchflag18=$legendsearchflag19="";
$serversearchflag0=$serversearchflag1=$serversearchflag2=$serversearchflag3='';
//ADD SELECTED
if($_POST['serversearch'] == 0){$serversearchflag0 = 'selected';}
if($_POST['serversearch'] == 1){$serversearchflag1 = 'selected';}
if($_POST['serversearch'] == 2){$serversearchflag2 = 'selected';}
if($_POST['serversearch'] == 3){$serversearchflag3 = 'selected';}
if($_POST['legendsearch'] == 0){$legendsearchflag0 = 'selected';}
if($_POST['legendsearch'] == 1){$legendsearchflag1 = 'selected';}
if($_POST['legendsearch'] == 2){$legendsearchflag2 = 'selected';}
if($_POST['legendsearch'] == 3){$legendsearchflag3 = 'selected';}
if($_POST['legendsearch'] == 4){$legendsearchflag4 = 'selected';}
if($_POST['legendsearch'] == 5){$legendsearchflag5 = 'selected';}
if($_POST['legendsearch'] == 6){$legendsearchflag6 = 'selected';}
if($_POST['legendsearch'] == 7){$legendsearchflag7 = 'selected';}
if($_POST['legendsearch'] == 8){$legendsearchflag8 = 'selected';}
if($_POST['legendsearch'] == 9){$legendsearchflag9 = 'selected';}
if($_POST['legendsearch'] == 10){$legendsearchflag10 = 'selected';}
if($_POST['legendsearch'] == 11){$legendsearchflag11 = 'selected';}
if($_POST['legendsearch'] == 12){$legendsearchflag12 = 'selected';}
if($_POST['legendsearch'] == 13){$legendsearchflag13 = 'selected';}
if($_POST['legendsearch'] == 14){$legendsearchflag14 = 'selected';}
if($_POST['legendsearch'] == 15){$legendsearchflag15 = 'selected';}
if($_POST['legendsearch'] == 16){$legendsearchflag16 = 'selected';}
if($_POST['legendsearch'] == 17){$legendsearchflag17 = 'selected';}
if($_POST['legendsearch'] == 18){$legendsearchflag18 = 'selected';}
if($_POST['legendsearch'] == 19){$legendsearchflag19 = 'selected';}
}

////Page Displays//



//Brawl Buddies home button


//Page Title
echo "<a href=\"index.php\"><h1>{$steamprofile['personaname']} - ELO: {$_SESSION['elo']}</h1></a><p>{$optionSuccess}{$mainErr}</p>";

//Adv Search / Register OR Advance Options / View Listing
echo "<form role=\"form\" method=\"post\" action=\"".htmlspecialchars($_SERVER["PHP_SELF"])."\">";

//search
echo "<button class=\"btn btn-med btn-default\" style=\"border: 3px solid darkorange; margin: 5px 10px;\" type=\"submit\" name=\"search\" border=\"0\" alt=\"submit\" value=\"1\">Player Search</button>";
//register
if($_SESSION['register'] != 1){
echo "<button class=\"btn btn-med btn-default\" style=\"border: 3px solid darkorange; margin: 5px 10px;\" type=\"submit\" name=\"register\" border=\"0\" alt=\"submit\" value=\"1\">Join Brawl Buddies (May Require Steam Re-Login)</button>";
//adv opts / view listing
}else{
echo "<form role=\"form\" method=\"post\" action=\"".htmlspecialchars($_SERVER["PHP_SELF"])."\">";
echo "<button class=\"btn btn-med btn-default\" style=\"border: 3px solid darkorange; margin: 5px 10px;\" type=\"submit\" name=\"options\" border=\"0\" alt=\"submit\" value=\"1\">View My Profile Settings</button>";
echo "<button class=\"btn btn-med btn-default\" style=\"border: 3px solid darkorange; margin: 5px 10px;\" type=\"submit\" name=\"preview\" border=\"0\" alt=\"submit\" value=\"1\">Preview my Profile</button>";
echo "<button class=\"btn btn-med btn-default\" style=\"border: 3px solid darkorange; margin: 5px 10px;\" type=\"submit\" name=\"mail\" border=\"0\" alt=\"submit\" value=\"1\">Messages</button>";
}
echo "</form><hr>";

//if view listing
if(isset($_POST['preview'])){require("preview.php");}else{
if(isset($_POST['options'])){require("options.php");}else{
if(isset($_POST['search'])){
echo "<h4 class=\"btn btn-lg btn-default\" id=\"showadv\">Show Advanced Search Options</h4>";
echo "<div id=\"putstuffhere\">";
require("search.php");
echo "</div><hr><h2>{$searchtitle}</h2><hr>";
require("getSearchInfo.php");
require("returnSearch.php");}else{
if(isset($_POST['mail']) || isset($_POST['sentmail'])){require("mail.php");}else{
echo "<img height=247 width=360 src=\"images/brawlbuddies.png\"/><br><br><br><br><br><br>";}}}}

?>