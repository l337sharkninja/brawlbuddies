<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['server1']==1){$servertitle1 = "US-EAST ";}else{
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['server1']==2){$servertitle1 = "US-WEST ";}else{
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['server1']==3){$servertitle1 = "EU ";}else{
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['server1']==4){$servertitle1 = "BR ";}else{
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['server1']==5){$servertitle1 = "AUS ";}else{
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['server1']==6){$servertitle1 = "SEA ";}else{
}}}}}}
$servertitle2 = "";
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['server2']==1){$servertitle2 = "[US-EAST]";}else{
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['server2']==2){$servertitle2 = "[US-WEST]";}else{
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['server2']==3){$servertitle2 = "[EU]";}else{
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['server2']==4){$servertitle2 = "[BR]";}else{
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['server2']==5){$servertitle2 = "[AUS]";}else{
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['server2']==6){$servertitle2 = "[SEA]";}else{
}}}}}}
$servertitle3 = "";
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['server3']==1){$servertitle3 = "[US-EAST]";}else{
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['server3']==2){$servertitle3 = "[US-WEST]";}else{
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['server3']==3){$servertitle3 = "[EU]";}else{
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['server3']==4){$servertitle3 = "[BR]";}else{
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['server3']==5){$servertitle3 = "[AUS]";}else{
if($_SESSION['primaryData'][$_SESSION['cacheList'][$_SESSION['counter']]]['server3']==6){$servertitle3 = "[SEA]";}else{
}}}}}}
if(isset($_SESSION['userReg'])){
if($_SESSION['userReg']['server1']==1){$profileservertitle1 = "US-EAST ";}else{
if($_SESSION['userReg']['server1']==2){$profileservertitle1 = "US-WEST ";}else{
if($_SESSION['userReg']['server1']==3){$profileservertitle1 = "EU ";}else{
if($_SESSION['userReg']['server1']==4){$profileservertitle1 = "BR ";}else{
if($_SESSION['userReg']['server1']==5){$profileservertitle1 = "AUS ";}else{
if($_SESSION['userReg']['server1']==6){$profileservertitle1 = "SEA ";}else{
}}}}}}
$profileservertitle2 = "";
if($_SESSION['userReg']['server2']==1){$profileservertitle2 = "[US-EAST]";}else{
if($_SESSION['userReg']['server2']==2){$profileservertitle2 = "[US-WEST]";}else{
if($_SESSION['userReg']['server2']==3){$profileservertitle2 = "[EU]";}else{
if($_SESSION['userReg']['server2']==4){$profileservertitle2 = "[BR]";}else{
if($_SESSION['userReg']['server2']==5){$profileservertitle2 = "[AUS]";}else{
if($_SESSION['userReg']['server2']==6){$profileservertitle2 = "[SEA]";}else{
}}}}}}
$profileservertitle3 = "";
if($_SESSION['userReg']['server3']==1){$profileservertitle3 = "[US-EAST]";}else{
if($_SESSION['userReg']['server3']==2){$profileservertitle3 = "[US-WEST]";}else{
if($_SESSION['userReg']['server3']==3){$profileservertitle3 = "[EU]";}else{
if($_SESSION['userReg']['server3']==4){$profileservertitle3 = "[BR]";}else{
if($_SESSION['userReg']['server3']==5){$profileservertitle3 = "[AUS]";}else{
if($_SESSION['userReg']['server3']==6){$profileservertitle3 = "[SEA]";}else{
}}}}}}}
?>