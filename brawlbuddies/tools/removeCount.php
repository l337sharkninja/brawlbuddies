<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}

if($_SESSION['counter']==0){$_SESSION['counter']=$_SESSION['counterMax'];}
else{$_SESSION['counter']--;}
?>

<script>
counter--;
</script>