<html>
 <head>
  <link rel="stylesheet" type="text/css" href="teacherscorecard.css">
  <link rel="stylesheet" type="text/css" href="../../../../../css.css">
	<link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet'>
  <link rel="icon" type="image/png" href="../../../../../images/logo.png">
  <title>Feedie | Scorecard</title>
 </head>
	 <body>
  <div class="header">
		<div><a href="../../"><img src="../../../../../images/back.svg" class="home"></a></div>
		<img src="../../../../../images/logo.png" class="logo"/>
		<div class="title">Feedie</div>
    <a href="../../../../?logout=1"><div class="logout">Logout</div></a>
  </div>
  <div class="wrapper">
	<div class="container">
	<div class="heading">Scorecard</div>
	
	<?php
	 session_start();

     if (!isset($_SESSION["hod_username"])){
        sleep(1);
        header('Location: ../../../../');
     }

	 $_SESSION["class"] = $_GET["class"];
	 $_SESSION["sub_name"] = $_GET["sub_name"];
	 $_SESSION["sub_code"] = $_GET["sub_code"];
	?>
	<div class="result">Teacher name: <?php echo $_SESSION["te_username"] ?></div>
	<div class="result">Class : <?php echo $_SESSION["class"] ?></div>
	<div class="result">Subject mane: <?php echo $_SESSION["sub_name"] ?></div>
	<div class="result">Subject Code: <?php echo $_SESSION["sub_code"] ?></div>
	<!--<div class="result">RANKING: <?php include('rank.php');?></div>-->
	<div class="result">Overall Score: <?php include('overall.php');?></div>
		<div><a href="teachersview"><button class="button">More details</button></a></div>
	</div>
	</div>
  <footer>&copy;<a href="https://fuse-org.firebaseapp.com" class="link" target="_blank">Fuse Org</a></footer>
</body>
</html>
