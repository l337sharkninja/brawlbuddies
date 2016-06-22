<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}

//only show results, else error
if(isset($primaryData)){
$_SESSION['counter'] = 0;

//search output loop
for($i=0;$i<count($primaryData);$i++){
$baseELOcheck=0;

//elo check
if(		(((($primaryData[$i]['opt1']+$primaryData[$i]['elo']) > $_SESSION['elo'] OR $primaryData[$i]['opt1'] == 0) &&
		(($_SESSION['elo'] > ($primaryData[$i]['elo']-$primaryData[$i]['opt2'])) OR $primaryData[$i]['opt2'] == 0) &&
		$primaryData[$i]['opt3'] == 1) OR
		
		((($primaryData[$i]['opt4']+$primaryData[$i]['elo']) > $_SESSION['elo'] OR $primaryData[$i]['opt4'] == 0) &&
		(($_SESSION['elo'] > ($primaryData[$i]['elo']-$primaryData[$i]['opt5'])) OR $primaryData[$i]['opt5'] == 0) &&
		($primaryData[$i]['opt6'] == 1 OR $primaryData[$i]['opt7'] == 1)) OR
		
		((($primaryData[$i]['opt8']+$primaryData[$i]['elo']) > $_SESSION['elo'] OR $primaryData[$i]['opt8'] == 0) &&
		($_SESSION['elo'] > ($primaryData[$i]['elo']-$primaryData[$i]['opt9']) OR $primaryData[$i]['opt9'] == 0) &&
		$primaryData[$i]['gt2'] == 1) OR
		
		((($primaryData[$i]['opt10']+$primaryData[$i]['elo']) > $_SESSION['elo'] OR $primaryData[$i]['opt10'] == 0) &&
		(($_SESSION['elo'] > ($primaryData[$i]['elo']-$primaryData[$i]['opt11'])) OR $primaryData[$i]['opt11'] == 0) &&
		(($primaryData[$i]['opt12'] == 1 OR $primaryData[$i]['opt13'] == 1 OR $primaryData[$i]['opt14'] == 1)))) &&
		
		
		(($primaryData[$i]['elo'] < ($_SESSION['elo'] + $optflag1)) OR $optflag1 == 0) &&
		(($primaryData[$i]['elo'] > ($_SESSION['elo'] - $optflag2)) OR $optflag2 == 0))
		{$baseELOcheck=1;}

//legend check
if($_POST['legendsearch']!=0){$legendcheck = 0;
if($_POST['legendsearch'] == 1 && ($primaryData[$i]['main'] == 1 OR $primaryData[$i]['alt1'] == 1 OR $primaryData[$i]['alt2'] == 1)){$legendcheck = 1;}
if($_POST['legendsearch'] == 2 && ($primaryData[$i]['main'] == 2 OR $primaryData[$i]['alt1'] == 2 OR $primaryData[$i]['alt2'] == 2)){$legendcheck = 1;}
if($_POST['legendsearch'] == 3 && ($primaryData[$i]['main'] == 3 OR $primaryData[$i]['alt1'] == 3 OR $primaryData[$i]['alt2'] == 3)){$legendcheck = 1;}
if($_POST['legendsearch'] == 4 && ($primaryData[$i]['main'] == 4 OR $primaryData[$i]['alt1'] == 4 OR $primaryData[$i]['alt2'] == 4)){$legendcheck = 1;}
if($_POST['legendsearch'] == 5 && ($primaryData[$i]['main'] == 5 OR $primaryData[$i]['alt1'] == 5 OR $primaryData[$i]['alt2'] == 5)){$legendcheck = 1;}
if($_POST['legendsearch'] == 6 && ($primaryData[$i]['main'] == 6 OR $primaryData[$i]['alt1'] == 6 OR $primaryData[$i]['alt2'] == 6)){$legendcheck = 1;}
if($_POST['legendsearch'] == 7 && ($primaryData[$i]['main'] == 7 OR $primaryData[$i]['alt1'] == 7 OR $primaryData[$i]['alt2'] == 7)){$legendcheck = 1;}
if($_POST['legendsearch'] == 8 && ($primaryData[$i]['main'] == 8 OR $primaryData[$i]['alt1'] == 8 OR $primaryData[$i]['alt2'] == 8)){$legendcheck = 1;}
if($_POST['legendsearch'] == 9 && ($primaryData[$i]['main'] == 9 OR $primaryData[$i]['alt1'] == 9 OR $primaryData[$i]['alt2'] == 9)){$legendcheck = 1;}
if($_POST['legendsearch'] == 10 && ($primaryData[$i]['main'] == 10 OR $primaryData[$i]['alt1'] == 10 OR $primaryData[$i]['alt2'] == 10)){$legendcheck = 1;}
if($_POST['legendsearch'] == 11 && ($primaryData[$i]['main'] == 11 OR $primaryData[$i]['alt1'] == 11 OR $primaryData[$i]['alt2'] == 11)){$legendcheck = 1;}
if($_POST['legendsearch'] == 12 && ($primaryData[$i]['main'] == 12 OR $primaryData[$i]['alt1'] == 12 OR $primaryData[$i]['alt2'] == 12)){$legendcheck = 1;}
if($_POST['legendsearch'] == 13 && ($primaryData[$i]['main'] == 13 OR $primaryData[$i]['alt1'] == 13 OR $primaryData[$i]['alt2'] == 13)){$legendcheck = 1;}
if($_POST['legendsearch'] == 14 && ($primaryData[$i]['main'] == 14 OR $primaryData[$i]['alt1'] == 14 OR $primaryData[$i]['alt2'] == 14)){$legendcheck = 1;}
if($_POST['legendsearch'] == 15 && ($primaryData[$i]['main'] == 15 OR $primaryData[$i]['alt1'] == 15 OR $primaryData[$i]['alt2'] == 15)){$legendcheck = 1;}
if($_POST['legendsearch'] == 16 && ($primaryData[$i]['main'] == 16 OR $primaryData[$i]['alt1'] == 16 OR $primaryData[$i]['alt2'] == 16)){$legendcheck = 1;}
if($_POST['legendsearch'] == 17 && ($primaryData[$i]['main'] == 17 OR $primaryData[$i]['alt1'] == 17 OR $primaryData[$i]['alt2'] == 17)){$legendcheck = 1;}
if($_POST['legendsearch'] == 18 && ($primaryData[$i]['main'] == 18 OR $primaryData[$i]['alt1'] == 18 OR $primaryData[$i]['alt2'] == 18)){$legendcheck = 1;}
if($_POST['legendsearch'] == 19 && ($primaryData[$i]['main'] == 19 OR $primaryData[$i]['alt1'] == 19 OR $primaryData[$i]['alt2'] == 19)){$legendcheck = 1;}
}else{$legendcheck = 1;}

//server check
if($_POST['serversearch']!=0){$servercheck = 0;
if($_POST['serversearch'] == 1 && $primaryData[$i]['server'] == 1){$servercheck = 1;}
if($_POST['serversearch'] == 2 && $primaryData[$i]['server'] == 2){$servercheck = 1;}
if($_POST['serversearch'] == 3 && $primaryData[$i]['server'] == 3){$servercheck = 1;}
}else{$servercheck = 1;}

//options gametypes check
$opt3check = 0;
if($optflag3 == 'checked' && $primaryData[$i]['opt3'] == 1){$opt3check = 1;}
$opt6check = 0;
if($optflag6 == 'checked' && $primaryData[$i]['opt6'] == 1){$opt6check = 1;}
$opt7check = 0;
if($optflag7 == 'checked' && $primaryData[$i]['opt7'] == 1){$opt7check = 1;}
$opt12check = 0;
if($optflag12 == 'checked' && $primaryData[$i]['opt12'] == 1){$opt12check = 1;}
$opt13check = 0;
if($optflag13 == 'checked' && $primaryData[$i]['opt13'] == 1){$opt13check = 1;}
$opt14check = 0;
if($optflag14 == 'checked' && $primaryData[$i]['opt14'] == 1){$opt14check = 1;}
$ffacheck = 0;
if($ffaflag == 'checked' && $primaryData[$i]['gt2'] == 1){$ffacheck = 1;}

$optionscheck=0;
if($opt3check == 1 || $opt6check == 1 || $opt7check == 1 || $opt12check == 1 || $opt13check == 1 || $opt14check == 1 || $ffacheck == 1){$optionscheck=1;}

//DISPLAY FIND IF
if($baseELOcheck==1 && $legendcheck==1 && $optionscheck==1 && $servercheck==1){
$_SESSION['counter']++;

echo "<div class=\"form-group col-lg-12 text-center\">";
if($_SESSION['counter']!=1){echo "<hr>";}
echo "<div class=\"form-group col-lg-6 text-left\">";
//Alias: 
echo "<h2  class=\"text-center\">".$primaryData[$i]['alias']." - ELO: ".$primaryData[$i]['elo']."<br>";

echo "</h2>";
$legendname = $primaryData[$i]['main'];
echo "<h4>Legend(s):</h4>";
require("tools/mainDecode.php");
echo "<img height=130 width=130 src=\"images/new/box.png\" style=\"vertical-align:bottom;\"/>";
echo "<img height=130 width=130 src=\"images/new/".$legendcode.".png\" style=\"vertical-align:bottom;margin-left:-130px;\"/>";

if($primaryData[$i]['alt1']>0){
$legendname = $primaryData[$i]['alt1'];
require("tools/mainDecode.php");
echo "<img height=130 width=130 src=\"images/new/box.png\" style=\"vertical-align:bottom;\"/>";
echo "<img height=130 width=130 src=\"images/new/".$legendcode.".png\" style=\"vertical-align:bottom;margin-left:-130px;\"/>";
}

if($primaryData[$i]['alt2']>0){
$legendname = $primaryData[$i]['alt2'];
require("tools/mainDecode.php");
echo "<img height=130 width=130 src=\"images/new/box.png\" style=\"vertical-align:bottom;\"/>";
echo "<img height=130 width=130 src=\"images/new/".$legendcode.".png\" style=\"vertical-align:bottom;margin-left:-130px;\"/>";
}

echo "<br><a onclick=\"addbuddy({$i});\"><h4 class=\"btn btn-lg btn-default text-center\">Add on Steam</h4></a>";
echo "<a onclick=\"sendmail({$i});\"><h4 class=\"btn btn-lg btn-default text-center\">Brawl Msg</h4></a>";
if($primaryData[$i]['reddit']!=""){
echo "<a href=\"http://reddit.com/u/".$primaryData[$i]['reddit']."\" target=\"_blank\"><h4 class=\"btn btn-lg btn-default text-center\">Msg on Reddit</h4></a>";
}
echo "</div>";


echo "<div class=\"form-group col-lg-6 text-center\">";
echo "<h3>Searching For:</h3><p>";
$alternate = 0;
for($jj=0;$jj<7;$jj++){
if($jj==0){
if($opt3check == 1){if($alternate==1){echo "| ";} echo "<img height=19 width=20 src='images/check.png'/>";
echo " 1v1 Sparring ";if($alternate==1){echo "<br>";$alternate=0;}else{$alternate=1;}}}
if($jj==1){
if($ffacheck == 1){if($alternate==1){echo "| ";} echo "<img height=19 width=20 src='images/check.png'/>";
echo " FFA Partner ";if($alternate==1){echo "<br>";$alternate=0;}else{$alternate=1;}}}
if($jj==2){
if($opt6check == 1){if($alternate==1){echo "| ";} echo "<img height=19 width=20 src='images/check.png'/>";
echo " 2v2 Partner ";if($alternate==1){echo "<br>";$alternate=0;}else{$alternate=1;}}}
if($jj==3){
if($opt7check == 1){if($alternate==1){echo "| ";} echo "<img height=19 width=20 src='images/check.png'/>";
echo " 2v2 Team Sparring ";if($alternate==1){echo "<br>";$alternate=0;}else{$alternate=1;}}}
if($jj==4){
if($opt12check == 1){if($alternate==1){echo "| ";} echo "<img height=19 width=20 src='images/check.png'/>";
echo " Brawlball ";if($alternate==1){echo "<br>";$alternate=0;}else{$alternate=1;}}}
if($jj==5){
if($opt13check == 1){if($alternate==1){echo "| ";} echo "<img height=19 width=20 src='images/check.png'/>";
echo " Bombsketball ";if($alternate==1){echo "<br>";$alternate=0;}else{$alternate=1;}}}
if($jj==6){
if($opt14check == 1){if($alternate==1){echo "| ";} echo "<img height=19 width=20 src='images/check.png'/>";
echo " Snowbrawl ";if($alternate==1){echo "<br>";$alternate=0;}else{$alternate=1;}}}
}



echo "<h3>Server:</h3>";
echo "<img width=150  height=100 src=\"images/server_".$primaryData[$i]['server'].".jpg\"/><br>";


include("tools/onlineStatus.php");
if($isVisible==3){
	if($onlineStatus==0){echo "<br><img width='150' height='40' src=\"images/offline.png\"/>";}else{
	echo "<br><img width='125' height='40' src=\"images/online.png\"/>";
	}
}
echo "</div></div>";
}
if($_SESSION['counter']==10){break;}}

if($_SESSION['counter']==0){
echo "<h3><span class=\"error\">This list is currently empty.</span></h3>";
echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br>";}
}


?>

<script>
var myWindow;
function addbuddy(i){
window.open("tools/addFriend.php?i="+i);
}
function sendmail(i){
    myWindow = window.open("tools/sendMail.php?i="+i, "", "width=500, height=300");
}
</script>