<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
unset($_SESSION['cacheList']);
//only show results, else error
$_SESSION['counter'] = 0;

//search output loop
for($i=0;$i<count($_SESSION['primaryData']);$i++){
if((isset($_SESSION['userData'][0]['brawlid']) && ! ($_SESSION['userData'][0]['brawlid']==$_SESSION['primaryData'][$i]['brawlid'])) || ! isset($_SESSION['userData'][0]['brawlid'])){

//register check
if($_SESSION['primaryData'][$i]['isRegistered']==1){$regcheck=1;}else{$regcheck=0;}
//elo check
if(		//User elo within query selected elo
		(($_SESSION['primaryData'][$i]['eloMin'] > $_SESSION['elo'] OR $_SESSION['primaryData'][$i]['eloMin'] == 0) &&
		($_SESSION['elo'] > $_SESSION['primaryData'][$i]['eloMax'] OR $_SESSION['primaryData'][$i]['eloMax'] == 0)) &&
		

		((!($_SESSION['primaryData'][$i]['elo'] < $_SESSION['searchFlags']['eloMin']) OR $_SESSION['searchFlags']['eloMin'] == 0) &&
		(!($_SESSION['primaryData'][$i]['elo'] > $_SESSION['searchFlags']['eloMax']) OR $_SESSION['searchFlags']['eloMax'] == 0)))
		{$elocheck=1;}else{$elocheck=0;}

//legend check
if($_SESSION['primaryData'][$i]['legend1']==0){$legendcheck=0;}else{
if($_SESSION['searchFlags']['legend']!=0){$legendcheck = 0;
if($_SESSION['searchFlags']['legend'] == 1 && ($_SESSION['primaryData'][$i]['legend1'] == 1 OR $_SESSION['primaryData'][$i]['legend2'] == 1 OR $_SESSION['primaryData'][$i]['legend3'] == 1)){$legendcheck = 1;}
elseif($_SESSION['searchFlags']['legend'] == 2 && ($_SESSION['primaryData'][$i]['legend1'] == 2 OR $_SESSION['primaryData'][$i]['legend2'] == 2 OR $_SESSION['primaryData'][$i]['legend3'] == 2)){$legendcheck = 1;}
elseif($_SESSION['searchFlags']['legend'] == 3 && ($_SESSION['primaryData'][$i]['legend1'] == 3 OR $_SESSION['primaryData'][$i]['legend2'] == 3 OR $_SESSION['primaryData'][$i]['legend3'] == 3)){$legendcheck = 1;}
elseif($_SESSION['searchFlags']['legend'] == 4 && ($_SESSION['primaryData'][$i]['legend1'] == 4 OR $_SESSION['primaryData'][$i]['legend2'] == 4 OR $_SESSION['primaryData'][$i]['legend3'] == 4)){$legendcheck = 1;}
elseif($_SESSION['searchFlags']['legend'] == 5 && ($_SESSION['primaryData'][$i]['legend1'] == 5 OR $_SESSION['primaryData'][$i]['legend2'] == 5 OR $_SESSION['primaryData'][$i]['legend3'] == 5)){$legendcheck = 1;}
elseif($_SESSION['searchFlags']['legend'] == 6 && ($_SESSION['primaryData'][$i]['legend1'] == 6 OR $_SESSION['primaryData'][$i]['legend2'] == 6 OR $_SESSION['primaryData'][$i]['legend3'] == 6)){$legendcheck = 1;}
elseif($_SESSION['searchFlags']['legend'] == 7 && ($_SESSION['primaryData'][$i]['legend1'] == 7 OR $_SESSION['primaryData'][$i]['legend2'] == 7 OR $_SESSION['primaryData'][$i]['legend3'] == 7)){$legendcheck = 1;}
elseif($_SESSION['searchFlags']['legend'] == 8 && ($_SESSION['primaryData'][$i]['legend1'] == 8 OR $_SESSION['primaryData'][$i]['legend2'] == 8 OR $_SESSION['primaryData'][$i]['legend3'] == 8)){$legendcheck = 1;}
elseif($_SESSION['searchFlags']['legend'] == 9 && ($_SESSION['primaryData'][$i]['legend1'] == 9 OR $_SESSION['primaryData'][$i]['legend2'] == 9 OR $_SESSION['primaryData'][$i]['legend3'] == 9)){$legendcheck = 1;}
elseif($_SESSION['searchFlags']['legend'] == 10 && ($_SESSION['primaryData'][$i]['legend1'] == 10 OR $_SESSION['primaryData'][$i]['legend2'] == 10 OR $_SESSION['primaryData'][$i]['legend3'] == 10)){$legendcheck = 1;}
elseif($_SESSION['searchFlags']['legend'] == 11 && ($_SESSION['primaryData'][$i]['legend1'] == 11 OR $_SESSION['primaryData'][$i]['legend2'] == 11 OR $_SESSION['primaryData'][$i]['legend3'] == 11)){$legendcheck = 1;}
elseif($_SESSION['searchFlags']['legend'] == 12 && ($_SESSION['primaryData'][$i]['legend1'] == 12 OR $_SESSION['primaryData'][$i]['legend2'] == 12 OR $_SESSION['primaryData'][$i]['legend3'] == 12)){$legendcheck = 1;}
elseif($_SESSION['searchFlags']['legend'] == 13 && ($_SESSION['primaryData'][$i]['legend1'] == 13 OR $_SESSION['primaryData'][$i]['legend2'] == 13 OR $_SESSION['primaryData'][$i]['legend3'] == 13)){$legendcheck = 1;}
elseif($_SESSION['searchFlags']['legend'] == 14 && ($_SESSION['primaryData'][$i]['legend1'] == 14 OR $_SESSION['primaryData'][$i]['legend2'] == 14 OR $_SESSION['primaryData'][$i]['legend3'] == 14)){$legendcheck = 1;}
elseif($_SESSION['searchFlags']['legend'] == 15 && ($_SESSION['primaryData'][$i]['legend1'] == 15 OR $_SESSION['primaryData'][$i]['legend2'] == 15 OR $_SESSION['primaryData'][$i]['legend3'] == 15)){$legendcheck = 1;}
elseif($_SESSION['searchFlags']['legend'] == 16 && ($_SESSION['primaryData'][$i]['legend1'] == 16 OR $_SESSION['primaryData'][$i]['legend2'] == 16 OR $_SESSION['primaryData'][$i]['legend3'] == 16)){$legendcheck = 1;}
elseif($_SESSION['searchFlags']['legend'] == 17 && ($_SESSION['primaryData'][$i]['legend1'] == 17 OR $_SESSION['primaryData'][$i]['legend2'] == 17 OR $_SESSION['primaryData'][$i]['legend3'] == 17)){$legendcheck = 1;}
elseif($_SESSION['searchFlags']['legend'] == 18 && ($_SESSION['primaryData'][$i]['legend1'] == 18 OR $_SESSION['primaryData'][$i]['legend2'] == 18 OR $_SESSION['primaryData'][$i]['legend3'] == 18)){$legendcheck = 1;}
elseif($_SESSION['searchFlags']['legend'] == 19 && ($_SESSION['primaryData'][$i]['legend1'] == 19 OR $_SESSION['primaryData'][$i]['legend2'] == 19 OR $_SESSION['primaryData'][$i]['legend3'] == 19)){$legendcheck = 1;}
elseif($_SESSION['searchFlags']['legend'] == 20 && ($_SESSION['primaryData'][$i]['legend1'] == 20 OR $_SESSION['primaryData'][$i]['legend2'] == 20 OR $_SESSION['primaryData'][$i]['legend3'] == 20)){$legendcheck = 1;}
}else{$legendcheck = 1;}}
//server check
if($_SESSION['primaryData'][$i]['server1']==0){$servercheck=0;}else{
if($_SESSION['searchFlags']['server']!=0){$servercheck = 0;
if($_SESSION['searchFlags']['server'] == 1 && ($_SESSION['primaryData'][$i]['server1'] == 1 OR $_SESSION['primaryData'][$i]['server2'] == 1 OR $_SESSION['primaryData'][$i]['server3'] == 1)){$servercheck = 1;}
elseif($_SESSION['searchFlags']['server'] == 2 && ($_SESSION['primaryData'][$i]['server1'] == 2 OR $_SESSION['primaryData'][$i]['server2'] == 2 OR $_SESSION['primaryData'][$i]['server3'] == 2)){$servercheck = 1;}
elseif($_SESSION['searchFlags']['server'] == 3 && ($_SESSION['primaryData'][$i]['server1'] == 3 OR $_SESSION['primaryData'][$i]['server2'] == 3 OR $_SESSION['primaryData'][$i]['server3'] == 3)){$servercheck = 1;}
elseif($_SESSION['searchFlags']['server'] == 4 && ($_SESSION['primaryData'][$i]['server1'] == 4 OR $_SESSION['primaryData'][$i]['server2'] == 4 OR $_SESSION['primaryData'][$i]['server3'] == 4)){$servercheck = 1;}
elseif($_SESSION['searchFlags']['server'] == 5 && ($_SESSION['primaryData'][$i]['server1'] == 5 OR $_SESSION['primaryData'][$i]['server2'] == 5 OR $_SESSION['primaryData'][$i]['server3'] == 5)){$servercheck = 1;}
elseif($_SESSION['searchFlags']['server'] == 6 && ($_SESSION['primaryData'][$i]['server1'] == 6 OR $_SESSION['primaryData'][$i]['server2'] == 6 OR $_SESSION['primaryData'][$i]['server3'] == 6)){$servercheck = 1;}
}else{$servercheck = 1;}}

//options gametypes check
$opt3check = 0;
if($_SESSION['searchFlags']['spar'] == 'checked' && $_SESSION['primaryData'][$i]['spar'] == 1){$opt3check = 1;}
$opt6check = 0;
if($_SESSION['searchFlags']['duo'] == 'checked' && $_SESSION['primaryData'][$i]['duo'] == 1){$opt6check = 1;}
$opt7check = 0;
if($_SESSION['searchFlags']['teamspar'] == 'checked' && $_SESSION['primaryData'][$i]['teamspar'] == 1){$opt7check = 1;}
$opt12check = 0;
if($_SESSION['searchFlags']['custom'] == 'checked' && $_SESSION['primaryData'][$i]['custom'] == 1){$opt12check = 1;}
$ffacheck = 0;
if($_SESSION['searchFlags']['ffa'] == 'checked' && $_SESSION['primaryData'][$i]['ffa'] == 1){$ffacheck = 1;}

$optionscheck=0;
if($opt3check == 1 || $opt6check == 1 || $opt7check == 1 || $opt12check == 1 || $ffacheck == 1){$optionscheck=1;}

if($regcheck && $optionscheck && $servercheck && $legendcheck && $elocheck){$_SESSION['cacheList'][] = $i;}
}}

$_SESSION['counter'] = 0;
$_SESSION['counterMax'] = count($_SESSION['cacheList'])-1;
?>