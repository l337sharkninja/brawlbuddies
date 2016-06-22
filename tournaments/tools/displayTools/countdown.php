<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
}
date_default_timezone_set ('EST');
$tournyname=$_SESSION['tournyInfo'][$tournytype][$tournynum]['tournyname'];
$tournytime=$_SESSION['tournyInfo'][$tournytype][$tournynum]['tournytime'];
$tournyid=$_SESSION['tournyInfo'][$tournytype][$tournynum]['tournyid'];
$dt = date('l M d, H:i T', $tournytime);
echo <<< EOT
<h1>{$tournyname}</h1>
<h3>{$dt}</h3>
<div class="row"><div class="col-lg-2"></div>
<div class="col-lg-8">
<div class="your-clock" style="margin:2em;"></div>
</div>
<div class="col-lg-2"></div></div>
<button onclick='register({$tournyid})' type='button' class='btn btn-lg btn-default'>
	Registration and Participants
</button>
EOT;

?>

<script>
var clock = $('.your-clock').FlipClock( <?php echo $tournytime - time(); ?> , {
	countdown: true,
	clockFace: 'DailyCounter'
});
</script>