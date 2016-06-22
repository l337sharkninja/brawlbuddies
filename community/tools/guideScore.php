<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}


$scoreflag=4;
if($guide['upvotes']){$score=count($guide['upvotes'])+1;}else{$score = '1';}

if(isset($_SESSION['userData'])){
	if($guide['brawlid']==$_SESSION['userData'][0]['brawlid']){$scoreflag = 1;}
	elseif($guide['upvotes']){if(in_array($_SESSION['userData'][0]['brawlid'],$guide['upvotes'])){$scoreflag = 2;}else{$scoreflag = 3;}}else{$scoreflag = 3;}}else{$scoreflag=4;}


echo "<h3>Score: {$score}</h3>";
if(isset($_SESSION['userData'][0]['brawlid'])){
if($scoreflag==2){
echo <<< EOT
<a onclick="downvote({$_SESSION['guideid']});"><img style="margin:-250px;" title="Brawlin' Guide! +1! (Click to remove upvote)" src="/images/brawlin.png"  onmouseover="this.src='/images/brawlin2.png'" onmouseout="this.src='/images/brawlin.png'" height="30"/></a>
EOT;
}elseif($scoreflag==3){
echo <<< EOT
<a onclick="upvote({$_SESSION['guideid']});"><img style="margin:-250px;" title="Brawlin' Guide! +1! (Click to upvote)" src="/images/plus1.png" onmouseover="this.src='/images/plus12.png'" onmouseout="this.src='/images/plus1.png'" height="30"/></a>
EOT;
}elseif($scoreflag==1){
	echo <<< EOT
<img style="margin:-250px;" title="Brawlin' Guide! (Your Guide)!" src="/images/brawlin.png"  onmouseover="this.src='/images/brawlin2.png'" onmouseout="this.src='/images/brawlin.png'" height="30"/></a>
EOT;
}elseif($scoreflag==4){
	echo <<< EOT
<img style="margin:-250px;" title="Brawlin' Guide!" src="/images/brawlin.png"  onmouseover="this.src='/images/brawlin2.png'" onmouseout="this.src='/images/brawlin.png'" height="30"/></a>
EOT;
}}
?>