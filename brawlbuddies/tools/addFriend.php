<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
include('../../tools/serverconfig.php');

if(isset($_SESSION['userData'])){
$limitflag=0;

//GET STEAM ID FROM BRAWL ID
$findBuddy = $info->prepare("SELECT steamid FROM userlist WHERE brawlid = ?");
$findBuddy->bind_param("i",$buddybrawlid);
$buddybrawlid = $_GET['i'];
$findBuddy->execute();
$findBuddy->bind_result($buddyid);
$findBuddy->fetch();
$findBuddy->close();
//UPDATE QUERYLIST INFO
$findSelf = $info->prepare("SELECT qtotal,q1,q2,q3 FROM querylist WHERE id = ?");
$findSelf->bind_param("i",$brawlid);
$brawlid = $_SESSION['userData'][0]['brawlid'];
$findSelf->execute();
$findSelf->bind_result($qtotal,$q1,$q2,$q3);
$findSelf->fetch();
$findSelf->close();


//FIRST BUDDY REQUEST
if($qtotal==null){
	$addBuddy = $info->prepare("INSERT INTO querylist (id,q1) VALUES (?,?)");
	$addBuddy->bind_param("ii",$mybrawlid,$buddybrawlid);
	$buddybrawlid=$_GET['i'];
	$mybrawlid=$_SESSION['userData'][0]['brawlid'];
	$addBuddy->execute();
	$addBuddy->close();
}
//SECOND BUDDY REQUEST
elseif($qtotal==1){
	if($q1!=$_GET['i']){
		$addBuddy = $info->prepare("UPDATE querylist SET qtotal=2,q2=? WHERE id=?");
		$addBuddy->bind_param("ii",$buddybrawlid,$mybrawlid);
		$buddybrawlid=$_GET['i'];
		$mybrawlid=$_SESSION['userData'][0]['brawlid'];
		$addBuddy->execute();
		$addBuddy->close();
	}
}

//THIRD BUDDY REQUEST
elseif($qtotal==2){
	if($q1!=$_GET['i'] && $q2!=$_GET['i']){
		$addBuddy = $info->prepare("UPDATE querylist SET qtotal=3,q3=? WHERE id=?");
		$addBuddy->bind_param("ii",$buddybrawlid,$mybrawlid);
		$buddybrawlid=$_GET['i'];
		$mybrawlid=$_SESSION['userData'][0]['brawlid'];
		$addBuddy->execute();
		$addBuddy->close();
	}
}

//SET LIMIT FLAG IF MORE THAN 3
elseif($qtotal==3){$limitflag=1;}


//WRITE TO NEW PAGE
if($limitflag==0){
	$url = "http://steamcommunity.com/profiles/".$buddyid;
    header('Location: '.$url);
}
else{
	echo <<< EOT
	<h1>You have reached your maximum (3) daily steam friend requests.<br>
	This is a safety precaution to prevent system abuse.<br>Come back tomorrow for more.</h1>
	<script>
		setTimeout('window.close()', 3500);
	</script>;
EOT;
}

}else{echo "<h1>Sign in through steam to start adding buddies!</h1><small><b>JavaScript and Cookies are used for Brawl Buddies.<br>Disable adblock or pop-up blockers for full functionality.</b></small><script>setTimeout(\"window.close()\", 3500);</script>";}

?>