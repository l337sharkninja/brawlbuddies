<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}

//ADD CHECKED
$optflag3 = $optflag6 = $optflag7 = $optflag12 = $optflag13 = $optflag14 = $ffaflag = "";
if($_SESSION['opt3'] == 1){$optflag3 = 'checked';}
if($_SESSION['opt6'] == 1){$optflag6 = 'checked';}
if($_SESSION['opt7'] == 1){$optflag7 = 'checked';}
if($_SESSION['opt12'] == 1){$optflag12 = 'checked';}
if($_SESSION['opt13'] == 1){$optflag13 = 'checked';}
if($_SESSION['opt14'] == 1){$optflag14 = 'checked';}
if($_SESSION['gt2'] == 1){$ffaflag = 'checked';}

$serverflag1 = $serverflag2 = $serverflag3 = "";
$mainflag1=$mainflag2=$mainflag3=$mainflag4=$mainflag5=$mainflag6=$mainflag7=$mainflag8=$mainflag9=$mainflag10=$mainflag11=$mainflag12=$mainflag13=$mainflag14=$mainflag15=$mainflag16=$mainflag17=$mainflag18=$mainflag19="";
$alt2flag0 = $alt2flag1=$alt2flag2=$alt2flag3=$alt2flag4=$alt2flag5=$alt2flag6=$alt2flag7=$alt2flag8=$alt2flag9=$alt2flag10=$alt2flag11=$alt2flag12=$alt2flag13=$alt2flag14=$alt2flag15=$alt2flag16=$alt2flag17=$alt2flag18=$alt2flag19="";
$alt1flag0 = $alt1flag1=$alt1flag2=$alt1flag3=$alt1flag4=$alt1flag5=$alt1flag6=$alt1flag7=$alt1flag8=$alt1flag9=$alt1flag10=$alt1flag11=$alt1flag12=$alt1flag13=$alt1flag14=$alt1flag15=$alt1flag16=$alt1flag17=$alt1flag18=$alt1flag19="";
//ADD SELECTED
if($_SESSION['server'] == 1){$serverflag1 = 'selected';}
if($_SESSION['server'] == 2){$serverflag2 = 'selected';}
if($_SESSION['server'] == 3){$serverflag3 = 'selected';}
if($_SESSION['main'] == 1){$mainflag1 = 'selected';}
if($_SESSION['main'] == 2){$mainflag2 = 'selected';}
if($_SESSION['main'] == 3){$mainflag3 = 'selected';}
if($_SESSION['main'] == 4){$mainflag4 = 'selected';}
if($_SESSION['main'] == 5){$mainflag5 = 'selected';}
if($_SESSION['main'] == 6){$mainflag6 = 'selected';}
if($_SESSION['main'] == 7){$mainflag7 = 'selected';}
if($_SESSION['main'] == 8){$mainflag8 = 'selected';}
if($_SESSION['main'] == 9){$mainflag9 = 'selected';}
if($_SESSION['main'] == 10){$mainflag10 = 'selected';}
if($_SESSION['main'] == 11){$mainflag11 = 'selected';}
if($_SESSION['main'] == 12){$mainflag12 = 'selected';}
if($_SESSION['main'] == 13){$mainflag13 = 'selected';}
if($_SESSION['main'] == 14){$mainflag14 = 'selected';}
if($_SESSION['main'] == 15){$mainflag15 = 'selected';}
if($_SESSION['main'] == 16){$mainflag16 = 'selected';}
if($_SESSION['main'] == 17){$mainflag17 = 'selected';}
if($_SESSION['main'] == 18){$mainflag18 = 'selected';}
if($_SESSION['main'] == 19){$mainflag19 = 'selected';}
if($_SESSION['main'] == 20){$mainflag20 = 'selected';}
if($_SESSION['alt1'] == 0){$alt1flag0 = 'selected';}
if($_SESSION['alt1'] == 1){$alt1flag1 = 'selected';}
if($_SESSION['alt1'] == 2){$alt1flag2 = 'selected';}
if($_SESSION['alt1'] == 3){$alt1flag3 = 'selected';}
if($_SESSION['alt1'] == 4){$alt1flag4 = 'selected';}
if($_SESSION['alt1'] == 5){$alt1flag5 = 'selected';}
if($_SESSION['alt1'] == 6){$alt1flag6 = 'selected';}
if($_SESSION['alt1'] == 7){$alt1flag7 = 'selected';}
if($_SESSION['alt1'] == 8){$alt1flag8 = 'selected';}
if($_SESSION['alt1'] == 9){$alt1flag9 = 'selected';}
if($_SESSION['alt1'] == 10){$alt1flag10 = 'selected';}
if($_SESSION['alt1'] == 11){$alt1flag11 = 'selected';}
if($_SESSION['alt1'] == 12){$alt1flag12 = 'selected';}
if($_SESSION['alt1'] == 13){$alt1flag13 = 'selected';}
if($_SESSION['alt1'] == 14){$alt1flag14 = 'selected';}
if($_SESSION['alt1'] == 15){$alt1flag15 = 'selected';}
if($_SESSION['alt1'] == 16){$alt1flag16 = 'selected';}
if($_SESSION['alt1'] == 17){$alt1flag17 = 'selected';}
if($_SESSION['alt1'] == 18){$alt1flag18 = 'selected';}
if($_SESSION['alt1'] == 19){$alt1flag19 = 'selected';}
if($_SESSION['alt1'] == 20){$alt1flag20 = 'selected';}
if($_SESSION['alt2'] == 0){$alt2flag0 = 'selected';}
if($_SESSION['alt2'] == 1){$alt2flag1 = 'selected';}
if($_SESSION['alt2'] == 2){$alt2flag2 = 'selected';}
if($_SESSION['alt2'] == 3){$alt2flag3 = 'selected';}
if($_SESSION['alt2'] == 4){$alt2flag4 = 'selected';}
if($_SESSION['alt2'] == 5){$alt2flag5 = 'selected';}
if($_SESSION['alt2'] == 6){$alt2flag6 = 'selected';}
if($_SESSION['alt2'] == 7){$alt2flag7 = 'selected';}
if($_SESSION['alt2'] == 8){$alt2flag8 = 'selected';}
if($_SESSION['alt2'] == 9){$alt2flag9 = 'selected';}
if($_SESSION['alt2'] == 10){$alt2flag10 = 'selected';}
if($_SESSION['alt2'] == 11){$alt2flag11 = 'selected';}
if($_SESSION['alt2'] == 12){$alt2flag12 = 'selected';}
if($_SESSION['alt2'] == 13){$alt2flag13 = 'selected';}
if($_SESSION['alt2'] == 14){$alt2flag14 = 'selected';}
if($_SESSION['alt2'] == 15){$alt2flag15 = 'selected';}
if($_SESSION['alt2'] == 16){$alt2flag16 = 'selected';}
if($_SESSION['alt2'] == 17){$alt2flag17 = 'selected';}
if($_SESSION['alt2'] == 18){$alt2flag18 = 'selected';}
if($_SESSION['alt2'] == 19){$alt2flag19 = 'selected';}
if($_SESSION['alt2'] == 20){$alt2flag20 = 'selected';}

//advanced options
echo "<h3>Advanced Options</h3>";
echo "<hr><br><form role=\"form\" method=\"post\" action=\"".htmlspecialchars($_SERVER["PHP_SELF"])."\">";

echo "<div class=\"col-lg-12 text-center\">";
echo "<div class=\"col-lg-6 text-center\">";

echo "<h4>Legend Preferences</h4>";
	echo "<label>Main Legend</label><span class=\"error\">*</span>";
	echo "<select style=\"width:250px;margin:auto;\" class=\"form-control\" name=\"main\">";
		echo "<option value=\"1\" {$mainflag1}>Ada</option>";
		echo "<option value=\"2\" {$mainflag2}>Asuri</option>";
		echo "<option value=\"18\" {$mainflag18}>Azoth</option>";
		echo "<option value=\"3\" {$mainflag3}>Barraza</option>";
		echo "<option value=\"4\" {$mainflag4}>B&#246;dvar</option>";
		echo "<option value=\"5\" {$mainflag5}>Brynn</option>";
		echo "<option value=\"6\" {$mainflag6}>Cassidy</option>";
		echo "<option value=\"7\" {$mainflag7}>Ember</option>";
		echo "<option value=\"8\" {$mainflag8}>Gnash</option>";
		echo "<option value=\"19\" {$mainflag19}>Hattori</option>";
		echo "<option value=\"20\" {$mainflag20}>Koji</option>";
		echo "<option value=\"9\" {$mainflag9}>Lord Vraxx</option>";
		echo "<option value=\"10\" {$mainflag10}>Lucien</option>";
		echo "<option value=\"11\" {$mainflag11}>Orion</option>";
		echo "<option value=\"12\" {$mainflag12}>Queen Nai</option>";
		echo "<option value=\"13\" {$mainflag13}>Scarlet</option>";
		echo "<option value=\"14\" {$mainflag14}>Sentinel</option>";
		echo "<option value=\"15\" {$mainflag15}>Sir Roland</option>";
		echo "<option value=\"16\" {$mainflag16}>Teros</option>";
		echo "<option value=\"17\" {$mainflag17}>Thatch</option>";
	echo "</select>";
	echo "<label>Alternate Legend #1</label>";
	echo "<select style=\"width:250px;margin:auto;\" class=\"form-control\" name=\"alt1\">";
		echo "<option value=\"0\" {$alt1flag0}>None</option>";
		echo "<option value=\"1\" {$alt1flag1}>Ada</option>";
		echo "<option value=\"2\" {$alt1flag2}>Asuri</option>";
		echo "<option value=\"18\" {$alt1flag18}>Azoth</option>";
		echo "<option value=\"3\" {$alt1flag3}>Barraza</option>";
		echo "<option value=\"4\" {$alt1flag4}>B&#246;dvar</option>";
		echo "<option value=\"5\" {$alt1flag5}>Brynn</option>";
		echo "<option value=\"6\" {$alt1flag6}>Cassidy</option>";
		echo "<option value=\"7\" {$alt1flag7}>Ember</option>";
		echo "<option value=\"8\" {$alt1flag8}>Gnash</option>";
		echo "<option value=\"19\" {$alt1flag19}>Hattori</option>";
		echo "<option value=\"20\" {$alt1flag20}>Koji</option>";
		echo "<option value=\"9\" {$alt1flag9}>Lord Vraxx</option>";
		echo "<option value=\"10\" {$alt1flag10}>Lucien</option>";
		echo "<option value=\"11\" {$alt1flag11}>Orion</option>";
		echo "<option value=\"12\" {$alt1flag12}>Queen Nai</option>";
		echo "<option value=\"13\" {$alt1flag13}>Scarlet</option>";
		echo "<option value=\"14\" {$alt1flag14}>Sentinel</option>";
		echo "<option value=\"15\" {$alt1flag15}>Sir Roland</option>";
		echo "<option value=\"16\" {$alt1flag16}>Teros</option>";
		echo "<option value=\"17\" {$alt1flag17}>Thatch</option>";
	echo "</select>";
	echo "<label>Alternate Legend #2</label>";
	echo "<select style=\"width:250px;margin:auto;\" class=\"form-control\" name=\"alt2\">";
		echo "<option value=\"0\" {$alt2flag0}>None</option>";
		echo "<option value=\"1\" {$alt2flag1}>Ada</option>";
		echo "<option value=\"2\" {$alt2flag2}>Asuri</option>";
		echo "<option value=\"18\" {$alt2flag18}>Azoth</option>";
		echo "<option value=\"3\" {$alt2flag3}>Barraza</option>";
		echo "<option value=\"4\" {$alt2flag4}>B&#246;dvar</option>";
		echo "<option value=\"5\" {$alt2flag5}>Brynn</option>";
		echo "<option value=\"6\" {$alt2flag6}>Cassidy</option>";
		echo "<option value=\"7\" {$alt2flag7}>Ember</option>";
		echo "<option value=\"8\" {$alt2flag8}>Gnash</option>";
		echo "<option value=\"19\" {$alt2flag19}>Hattori</option>";
		echo "<option value=\"20\" {$alt2flag20}>Koji</option>";
		echo "<option value=\"9\" {$alt2flag9}>Lord Vraxx</option>";
		echo "<option value=\"10\" {$alt2flag10}>Lucien</option>";
		echo "<option value=\"11\" {$alt2flag11}>Orion</option>";
		echo "<option value=\"12\" {$alt2flag12}>Queen Nai</option>";
		echo "<option value=\"13\" {$alt2flag13}>Scarlet</option>";
		echo "<option value=\"14\" {$alt2flag14}>Sentinel</option>";
		echo "<option value=\"15\" {$alt2flag15}>Sir Roland</option>";
		echo "<option value=\"16\" {$alt2flag16}>Teros</option>";
		echo "<option value=\"17\" {$alt2flag17}>Thatch</option>";
	echo "</select>";
echo "</div><div class=\"col-lg-6 text-center\">";


echo "<h4>Server Preference</h4>";
	echo "<select style=\"width:250px;margin:auto;\" class=\"form-control\" name=\"server\">";
		echo "<option value=\"1\" {$serverflag1}>US</option>";
		echo "<option value=\"2\" {$serverflag2}>EU</option>";
		echo "<option value=\"3\" {$serverflag3}>SEA</option>";
	echo "</select>";

echo "</div></div>";

echo "<div class=\"col-lg-12 text-center\"><br><br>";
echo "<div class=\"col-lg-6 text-center\">";
//gametype 1 options
echo "<h4><b><u>Ranked 1v1</b></u></h4>";
echo "Visibility ELO Range:<br><small><b>(only people with elo in this range can see your profile)</small></b><br>";
echo "<input type=\"number\" name=\"opt1\" min=\"0\" max=\"1000\" step=\"1\" value=\"{$_SESSION['opt1']}\"> Max ELO Above Mine (Choose '0' for no limit)<br>";
echo "<input type=\"number\" name=\"opt2\" min=\"0\" max=\"1000\" step=\"1\" value=\"{$_SESSION['opt2']}\"> Min ELO Below Mine (Choose '0' for no limit)<br>";
echo "I am looking for a sparring partner to practice ranked 1v1 <input type=\"checkbox\"  name=\"opt3\" value=\"1\" {$optflag3}><br>";

echo "</div><div class=\"col-lg-6 text-center\">";
echo "<h4><b><u>Ranked 2v2</b></u></h4>";
echo "Visibility ELO Range:<br><small><b>(only people with elo in this range can see your profile)</small></b><br>";
echo "<input type=\"number\" size=\"6\" name=\"opt4\" min=\"0\" max=\"1000\" step=\"1\" value=\"{$_SESSION['opt4']}\"> Max ELO Above Mine (Choose '0' for no limit)<br>";
echo "<input type=\"number\" name=\"opt5\" min=\"0\" max=\"1000\" step=\"1\" value=\"{$_SESSION['opt5']}\"> Min ELO Below Mine (Choose '0' for no limit)<br>";
echo "I am looking for:<br> A teammate for Ranked 2v2: <input type=\"checkbox\"  name=\"opt6\" value=\"1\" {$optflag6}><br>";
echo "Sparring with 2v2 teams: <input type=\"checkbox\"  name=\"opt7\" value=\"1\" {$optflag7}><br>";

echo "</div></div>";

echo "<div class=\"col-lg-12 text-center\"><br><br><br>";
echo "<div class=\"col-lg-6 text-center\">";
//gametype 2 options
echo "<h4><b><u>Free For All</b></u></h4>";
echo "Visibility ELO Range:<br><small><b>(only people with elo in this range can see your profile)</small></b><br>";
echo "<input type=\"number\" name=\"opt8\" min=\"0\" max=\"1000\" step=\"1\" value=\"{$_SESSION['opt8']}\"> Max ELO Above Mine (Choose '0' for no limit)<br>";
echo "<input type=\"number\" name=\"opt9\" min=\"0\" max=\"1000\" step=\"1\" value=\"{$_SESSION['opt9']}\"> Min ELO Below Mine (Choose '0' for no limit)<br>";
echo "I am looking for people to FFA with: <input type=\"checkbox\"  name=\"ffa\" value=\"1\" {$ffaflag}><br>";


echo "</div><div class=\"col-lg-6 text-center\">";
//gametype 3 options
echo "<h4><b><u>Custom Online</b></u></h4>";
echo "Visibility ELO Range:<br><small><b>(only people with elo in this range can see your profile)</small></b><br>";
//<input type="number" name="points" min="0" max="100" step="10" value="30">
echo "<input type=\"number\" name=\"opt10\" min=\"0\" max=\"1000\" step=\"1\" value=\"{$_SESSION['opt10']}\"> Max ELO Above Mine (Choose '0' for no limit)<br>";
echo "<input type=\"number\" name=\"opt11\" min=\"0\" max=\"1000\" step=\"1\" value=\"{$_SESSION['opt11']}\"> Min ELO Below Mine (Choose '0' for no limit)<br>";
echo "I am looking for:<br> Brawlball: <input type=\"checkbox\"  name=\"opt12\" value=\"1\" {$optflag12}><br>";
echo "Bombsketball: <input type=\"checkbox\"  name=\"opt13\" value=\"1\" {$optflag13}><br>";
echo "Snowbrawl: <input type=\"checkbox\"  name=\"opt14\" value=\"1\" {$optflag14}><br>";

echo "</div></div>";

echo "<div class=\"col-lg-12 text-center\"><br><br><br>";
echo "<button class=\"btn btn-lg btn-default\" style=\"border: 3px solid darkorange; margin: 5px 10px;\" type=\"submit\" name=\"advsubmit\" border=\"0\" alt=\"submit\" value=\"1\">Submit Changes</button>";
echo "<button class=\"btn btn-lg btn-default\" style=\"border: 3px solid darkorange; margin: 5px 10px;\" type=\"submit\" name=\"cancel\" border=\"0\" alt=\"submit\" value=\"1\">Cancel</button>";
echo "</form><br><br></div>";



?>
