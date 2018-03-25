<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="../css.css">
	<link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet'>
	<link rel="icon" type="image/png" href="../images/logo.png">
	<title>Feedie | Admin portal</title>
</head>
<body>
  <?php

    if (isset($_GET["logout"])){
      if ($_GET["logout"] == 1){
        session_start();
        session_destroy();
      }
    }

  ?>
  <div class="header">
		<img src="../images/logo.png" class="logo"/>
		<div class="title">Feedie</div>
  </div>
  <div class="wrapper">
  	<div class="container">
			<div>
				<div class="tlogin">
				<img src="../images/teacher.svg" class="avatar">
				</div>
				<div class="hlogin">
				<img src="../images/hod.svg" class="avatar">
				</div>
				<div class="tlogin">
				<a href="teacherslogin"><button class="button">Teacher Login</button></a>
				</div>
				<div class="hlogin">
				<a href="hodslogin/index.php"><button class="button">HOD Login</button></a>
				</div>
			</div>
		</div>
	</div>
  <footer><a href="https://fuse-org.firebaseapp.com" class="link" target="_blank">Fuse Org</a></footer>
</body>
</html>
