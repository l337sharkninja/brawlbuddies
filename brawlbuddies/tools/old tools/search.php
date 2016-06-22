<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
//advanced options
echo "<form role=\"form\" method=\"post\" action=\"".htmlspecialchars($_SERVER["PHP_SELF"])."\">";

echo "<div class=\"col-lg-12 text-center\">";
echo "<div class=\"col-lg-6 text-center\">";
echo "<h4>Legend:  </h4>";
	echo "<select style=\"width:150px;margin:auto;\" class=\"form-control\" name=\"legendsearch\">";
		echo "<option value=\"0\" {$legendsearchflag0}>ALL LEGENDS</option>";
		echo "<option value=\"1\" {$legendsearchflag1}>Ada</option>";
		echo "<option value=\"2\" {$legendsearchflag2}>Asuri</option>";
		echo "<option value=\"18\" {$legendsearchflag18}>Azoth</option>";
		echo "<option value=\"3\" {$legendsearchflag3}>Barraza</option>";
		echo "<option value=\"4\" {$legendsearchflag4}>B&#246;dvar</option>";
		echo "<option value=\"5\" {$legendsearchflag5}>Brynn</option>";
		echo "<option value=\"6\" {$legendsearchflag6}>Cassidy</option>";
		echo "<option value=\"7\" {$legendsearchflag7}>Ember</option>";
		echo "<option value=\"8\" {$legendsearchflag8}>Gnash</option>";
		echo "<option value=\"19\" {$legendsearchflag19}>Hattori</option>";
		echo "<option value=\"9\" {$legendsearchflag9}>Lord Vraxx</option>";
		echo "<option value=\"10\" {$legendsearchflag10}>Lucien</option>";
		echo "<option value=\"11\" {$legendsearchflag11}>Orion</option>";
		echo "<option value=\"12\" {$legendsearchflag12}>Queen Nai</option>";
		echo "<option value=\"13\" {$legendsearchflag13}>Scarlet</option>";
		echo "<option value=\"14\" {$legendsearchflag14}>Sentinel</option>";
		echo "<option value=\"15\" {$legendsearchflag15}>Sir Roland</option>";
		echo "<option value=\"16\" {$legendsearchflag16}>Teros</option>";
		echo "<option value=\"17\" {$legendsearchflag17}>Thatch</option>";
	echo "</select>";
echo "<br><h4>ELO Search Range</h4><small>(Relative to your own ELO, '0' for no limit)</small><br>";
echo "<input type=\"number\" style=\"width:50px;\" name=\"opt1\" min=\"0\" max=\"1000\" step=\"1\" value=\"{$optflag1}\"> ELO Above Mine<br><input type=\"number\" style=\"width:50px;\" name=\"opt2\" min=\"0\" max=\"1000\" step=\"1\" value=\"{$optflag2}\">ELO Below Mine";
echo "</div><div class=\"col-lg-6 text-center\">";
echo "<h4>Server:  </h4>";
	echo "<select style=\"width:150px;margin:auto;\" class=\"form-control\" name=\"serversearch\">";
		echo "<option value=\"0\" {$serversearchflag0}>ALL SERVERS</option>";
		echo "<option value=\"1\" {$serversearchflag1}>US</option>";
		echo "<option value=\"2\" {$serversearchflag2}>EU</option>";
		echo "<option value=\"3\" {$serversearchflag3}>SEA</option>";
	echo "</select>";
echo "<br><h4>Players looking for...</h4>1v1 Sparring: <input type=\"checkbox\"  name=\"opt3\" value=\"1\" {$optflag3}> | ";
echo "FFA Partner: <input type=\"checkbox\"  name=\"ffa\" value=\"1\" {$ffaflag}><br>";
echo "2v2 Partner: <input type=\"checkbox\"  name=\"opt6\" value=\"1\" {$optflag6}> | ";
echo "2v2 Team Sparring: <input type=\"checkbox\"  name=\"opt7\" value=\"1\" {$optflag7}><br>";
echo "Brawlball: <input type=\"checkbox\"  name=\"opt12\" value=\"1\" {$optflag12}> | ";
echo "Bombsketball: <input type=\"checkbox\"  name=\"opt13\" value=\"1\" {$optflag13}> | ";
echo "Snowbrawl: <input type=\"checkbox\"  name=\"opt14\" value=\"1\" {$optflag14}><br>";
echo "</div></div>";
echo "<div class=\"col-lg-12 text-center\">";
echo "<button class=\"btn btn-lg btn-default\" style=\"border: 3px solid darkorange; margin: 5px 10px;\" type=\"submit\" name=\"search\" border=\"0\" alt=\"submit\" value=\"1\">SUBMIT</button>";
echo "</form><hr></div>";
?>
