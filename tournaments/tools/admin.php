<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
echo '<h1>Admin Tools</h1><br>';
include('menuTools/adminMenu.php');
echo '<br>';
?>
