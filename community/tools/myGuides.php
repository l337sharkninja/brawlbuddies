<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}




if(isset($_SESSION['steamid'])){
//pull guides
for($i=0;$i<count($_SESSION['guideData']);$i++){
if($_SESSION['guideData'][$i]['brawlid']==$_SESSION['userData'][0]['brawlid']){$generalguides[] = $_SESSION['guideData'][$i];}}

if(isset($generalguides)){
//base loop
for($i=0;$i<count($generalguides);$i=$i+2){
echo "<br><br><div class=\"col-lg-12 text-center\">";
echo "<div title=\"Click to View/Edit Guide\" onclick=\"vieweditGuide({$generalguides[$i]['guideid']})\" style='height:400px;overflow:hidden;' class=\"col-lg-6 text-center guidewell\">";
if($generalguides[$i]['upvotes']){$score=count($generalguides[$i]['upvotes'])+1;}else{$score = '1';}
echo "<div style='float:left;margin-left:25px;'>Score: <b>{$score}</b></div>";
if($_SESSION['guideData'][$i]['guidetype']==4){
$content = file_get_contents("http://youtube.com/get_video_info?video_id=".$generalguides[$i]['subject']);
parse_str($content, $ytarr);
echo "<h3>{$ytarr['title']}</h3>";}else{echo "<h3>{$generalguides[$i]['title']}</h3>";}
echo "<small><b>Submitted by: {$generalguides[$i]['alias']}</b></small><br><br>";
//show legend
if($_SESSION['guideData'][$i]['guidetype']==2){
$legendname = $generalguides[$i]['opt'];
require("mainDecode.php");
echo "<div style='float:left;margin-left:25px;'>";
echo "<img class='{$legendcode}' title='{$legendtitle}' src='/images/blankimg.png'/></div>";}
//show weapon
if($_SESSION['guideData'][$i]['guidetype']==3){
$weaponname = $generalguides[$i]['opt'];
require("weapDecode.php");
echo "<div style='float:left;margin-left:25px;'>";
echo "<img  class='{$weaponcode}' title='{$weapontitle}' src='/images/blankimg.png'/></div>";}
//show vid thumb
if($_SESSION['guideData'][$i]['guidetype']==4){
echo "<p><img width=300 height=225 src=\"http://img.youtube.com/vi/{$generalguides[$i]['subject']}/0.jpg\" /></p></div>";}else{
if($generalguides[$i]['qt1']!="-1" || $generalguides[$i]['qt2']!="-1" || $generalguides[$i]['qt3']!="-1"){echo "<small><b>Quick Tips:</b></small><ul>";}
if($generalguides[$i]['qt1']!="-1"){echo "<li>{$generalguides[$i]['qt1']}</li>";}
if($generalguides[$i]['qt2']!="-1"){echo "<li>{$generalguides[$i]['qt2']}</li>";}
if($generalguides[$i]['qt3']!="-1"){echo "<li>{$generalguides[$i]['qt3']}</li>";}
echo "</ul>";
if($generalguides[$i]['subject']!="-1"){echo $generalguides[$i]['subject'];}}


if(($i+1)<count($generalguides)){
echo "<div title=\"Click to View Guide\" onclick=\"vieweditGuide({$generalguides[$i+1]['guideid']})\" style='height:400px;overflow:hidden;' class=\"col-lg-6 text-center guidewell\">";
if($generalguides[$i+1]['upvotes']){$score=count($generalguides[$i+1]['upvotes'])+1;}else{$score = '1';}
echo "<div style='float:left;margin-left:25px;'>Score: <b>{$score}</b></div>";
if($_SESSION['guideData'][$i+1]['guidetype']==4){
$content = file_get_contents("http://youtube.com/get_video_info?video_id=".$generalguides[$i+1]['subject']);
parse_str($content, $ytarr);
echo "<h3>{$ytarr['title']}</h3>";}else{echo "<h3>{$generalguides[$i+1]['title']}</h3>";}
echo "<small><b>Submitted by: {$generalguides[$i+1]['alias']}</b></small><br><br>";
//show legend
if($generalguides[$i+1]['guidetype']==2){
$legendname = $generalguides[$i+1]['opt'];
require("mainDecode.php");
echo "<div style='float:left;margin-left:25px;'>";
echo "<img class='{$legendcode}' title='{$legendtitle}' src='/images/blankimg.png'/></div>";}
//show weapon
if($generalguides[$i+1]['guidetype']==3){
$weaponname = $generalguides[$i+1]['opt'];
require("weapDecode.php");
echo "<div style='float:left;margin-left:25px;'>";
echo "<img class='{$weaponcode}' title='{$weaponcode}' src='/images/blankimg.png'/></div>";}
//show vid thumb
if($generalguides[$i+1]['guidetype']==4){
echo "<p><img width=300 height=225 src=\"http://img.youtube.com/vi/{$generalguides[$i+1]['subject']}/0.jpg\" /></p></div>";}else{
if($generalguides[$i+1]['qt1']!="-1" || $generalguides[$i+1]['qt2']!="-1" || $generalguides[$i+1]['qt3']!="-1"){echo "<small><b>Quick Tips:</b></small><ul>";}
if($generalguides[$i+1]['qt1']!="-1"){echo "<li>{$generalguides[$i+1]['qt1']}</li>";}
if($generalguides[$i+1]['qt2']!="-1"){echo "<li>{$generalguides[$i+1]['qt2']}</li>";}
if($generalguides[$i+1]['qt3']!="-1"){echo "<li>{$generalguides[$i+1]['qt3']}</li>";}
echo "</ul>";
if($generalguides[$i+1]['subject']!="-1"){echo $generalguides[$i+1]['subject'];}}
}
}echo "</div>";}else{echo "<h3><span class=\"error\">You haven't submitted any guides.</span></h3><br><br><br><br><br><br><br><br><br><br>";}}
else{
	echo "<h3><span class='error'>Log in through steam above to view your guides.</span></h3><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
}

