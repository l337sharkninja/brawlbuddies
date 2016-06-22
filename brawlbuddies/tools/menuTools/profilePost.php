<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}


//First time registration
if($_SESSION['userReg']['isRegistered']==-1){
	$_SESSION['userReg']['alias'] = $_SESSION['userData'][0]['username'];
	$_SESSION['userReg']['reddit'] = '';
	$_SESSION['userReg']['eloMin'] = 0;
	$_SESSION['userReg']['eloMax'] = 0;
	$_SESSION['userReg']['server1'] = 0;
	$_SESSION['userReg']['server2'] = -1;
	$_SESSION['userReg']['server3'] = -1;
	$_SESSION['userReg']['legend1'] = 0;
	$_SESSION['userReg']['legend2'] = -1;
	$_SESSION['userReg']['legend3'] = -1;
	$_SESSION['userReg']['spar'] = 1;
	$_SESSION['userReg']['duo'] = 1;
	$_SESSION['userReg']['teamspar'] = 1;
	$_SESSION['userReg']['custom'] = 1;
	$_SESSION['userReg']['ffa'] = 1;
}

//registration post
if($_POST['item1']==-1){$_SESSION['userReg']['isRegistered']=0;}
if($_POST['item1']==777){$_SESSION['userReg']['isRegistered']=1;}

//aliaspost
if($_POST['item1']==22){
	$_SESSION['userReg']['alias']=stripslashes($_POST['alias']);
	$_SESSION['userReg']['reddit']=stripslashes($_POST['reddit']);
}

//legend post
if($_POST['item1']==1){
	if($_SESSION['userReg']['legend1']==0){$_SESSION['userReg']['legend1']=intval($_POST['item2']);}
	elseif($_SESSION['userReg']['legend2']==-1){$_SESSION['userReg']['legend2']=intval($_POST['item2']);}
	elseif($_SESSION['userReg']['legend3']==-1){$_SESSION['userReg']['legend3']=intval($_POST['item2']);}
	if($_POST['item3']==-1){
		$_SESSION['userReg']['legend1'] = 0;
		$_SESSION['userReg']['legend2'] = -1;
		$_SESSION['userReg']['legend3'] = -1;
	}
}

//gametype post
if($_POST['item1']==2){
	if($_POST['item2']==1){$_SESSION['userReg']['spar']=1;}
	if($_POST['item2']==2){$_SESSION['userReg']['ffa']=1;}
	if($_POST['item2']==3){$_SESSION['userReg']['duo']=1;}
	if($_POST['item2']==4){$_SESSION['userReg']['teamspar']=1;}
	if($_POST['item2']==5){$_SESSION['userReg']['custom']=1;}
	if($_POST['item3']==-1){
		$_SESSION['userReg']['spar']=0;
		$_SESSION['userReg']['ffa']=0;
		$_SESSION['userReg']['duo']=0;
		$_SESSION['userReg']['teamspar']=0;
		$_SESSION['userReg']['custom']=0;
	}
}

//server post
if($_POST['item1']==3){
	if($_SESSION['userReg']['server1']==0){$_SESSION['userReg']['server1']=intval($_POST['item2']);}
	elseif($_SESSION['userReg']['server2']==-1){$_SESSION['userReg']['server2']=intval($_POST['item2']);}
	elseif($_SESSION['userReg']['server3']==-1){$_SESSION['userReg']['server3']=intval($_POST['item2']);}
	if($_POST['item3']==-1){
		$_SESSION['userReg']['server1'] = 0;
		$_SESSION['userReg']['server2'] = -1;
		$_SESSION['userReg']['server3'] = -1;
	}	
}

//elo post
if($_POST['item1']==4){
	if($_POST['item2']==0){
	$_SESSION['userReg']['eloMin']=0;
	$_SESSION['userReg']['eloMax']=0;}else{
	$_SESSION['userReg']['eloMin']=intval($_POST['item2']);
	$_SESSION['userReg']['eloMax']=intval($_POST['item3']);}
}
?>