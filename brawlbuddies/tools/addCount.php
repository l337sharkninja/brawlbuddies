<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
if($_SESSION['counter']==$_SESSION['counterMax']){
	$_SESSION['counter']=0;
}else{$_SESSION['counter']++;}

?>