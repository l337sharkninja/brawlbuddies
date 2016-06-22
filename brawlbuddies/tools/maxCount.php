<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
echo "<input type='hidden' id='iCounterMax' value={$_SESSION['counterMax']} />";
?>