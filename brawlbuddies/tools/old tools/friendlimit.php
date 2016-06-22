<?php
if(!isset($_SESSION)) 
{ 
	session_start(); 
} 
require ('steamauth/steamauth.php'); 
?>
<!DOCTYPE html>

<html lang="en">

<head>

	<script>
	setTimeout(function () {
		window.location.href= 'index.php';
	},5000); 
	</script>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="brawlhalla, find games, find teams, guide, guides, info, information, streams, brawl buddies, friend finder, legends, maps, items, weapons, realms, combos">
    <meta name="author" content="Zachary Bagley">

    <title>Welcome to BrawlKing!</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
	<style>
	.error {color: #FF0000;}
	</style>
 
</head>

<body>





    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="../index.php" ;></a>
            </div>
			<ul class="nav top-nav" align="right">
				<span class="pull-left"><li><a href="../index.php"><img src="../images/title.png"></a></li></span>
				<li><?php
				if(!isset($_SESSION['steamid'])) {
					steamlogin(); //login button
					
				}  else {
					include ('steamauth/userInfo.php');
					echo "<img src=\"".$steamprofile['avatarmedium']."\"/>";
					
					logoutbutton();
				}    
				?>
			</li>
			</ul>
            <!-- Sidebar Menu Gadgets - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
					<li class="active">
                        <a href="../index.php">Home</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#general">General Guides<i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="general" class="collapse">
                            <li>
                                <a href="../general/intro.php">Intro</a>
                            </li>
                            <li>
                                <a href="../general/realms.php">Realms</a>
                            </li>
                            <li>
                                <a href="../general/unarmed.php">Unarmed Combat</a>
                            </li>
                            <li>
                                <a href="../general/dodges.php">Jumps and Dodges</a>
                            </li>
                            <li>
                                <a href="../general/gadgets.php">Gadgets</a>
                            </li>
                            <li>
                                <a href="../general/weapons.php">Weapons</a>
                            </li>
                            <li>
                                <a href="../general/legends.php">Legends</a>
                            </li>
                            <li>
                                <a href="../general/combos.php">Combos</a>
                            </li>
							
                        </ul>
					<li class="active">
                        <a href="index.php">Brawl Buddies</a>
                    </li>
					<li class="active">
                        <a href="../resources.php">Other Resources</a>
                    </li>
					<li class="active">
                        <a href="../streams.php">Live Streams</a>
                    </li>
					<li class="active">
                        <a href="../calendar.php">Tournament Calendar</a>
                    </li>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12 text-center">
						<h1>Search Brawl Buddies</h1><p>You have reached your maximum (3) steam friend requests for today.  Come back tomorrow to add more users on steam, or try messaging players on reddit!</p>
                    </div>
					<div class="col-lg-12 text-center">
					<hr>This page will redirect you to the Brawl Buddies main page shortly.<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					</div>
                </div>
                <!-- /.row -->


            </div>
            <!-- /.container-fluid --><footer class="footer text-center"><a href="../privacy.php">privacy policy</a> / <a href="../contact.php">contact me</a></footer>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>

	<script src="../js/myscript.js"></script>


</body>

</html>