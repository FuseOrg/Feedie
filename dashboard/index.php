<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<script src="../scripts/material.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="../styles/material.min.css">
	<link rel="stylesheet" href="../styles/main.css">
	<link rel="icon" type="image/png" href="../images/logo.png">
	<title>Dashboard | Feedie</title>
</head>

<body class="mdl-demo mdl-color-text--grey-900 mdl-base">
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<header class="mdl-layout__header mdl-color--white mdl-color-text--grey-600">
			<div class="mdl-layout__header-row">
				<a href="../">
					<button class="mdl-button mdl-js-button mdl-button--icon">
						<i class="material-icons">home</i>
					</button>
				</a>
				<div class="mdl-layout-spacer"></div>
				<span class="mdl-layout-title">Feedie</span>
				<div class="mdl-layout-spacer"></div>
				<button id="more" class="mdl-button mdl-js-button mdl-button--icon">
					<i class="material-icons">account_circle</i>
				</button>
				<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="more">
					<a href="../?logout=1">
						<li class="mdl-menu__item">
							<i class="material-icons" role="presentation">exit_to_app</i>
							Logout
						</li>
					</a>
				</ul>
			</div>
			<div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--white">
				<div class="mdl-layout-spacer"></div>
				<a href="#overview" class="mdl-layout__tab is-active">Feedback</a>
				<a href="#account" class="mdl-layout__tab">
					<?php
						session_start();
						if (!isset($_SESSION["st_username"])){
						 sleep(1);
						 header('Location: ../');
						}
						echo $_SESSION["st_username"];
						echo " &middot; ";
						echo $_SESSION["class"];
					?>
				</a>
				<div class="mdl-layout-spacer"></div>
			</div>
		</header>
		<main class="mdl-layout__content">
			<div class="mdl-layout__tab-panel is-active" id="overview">
				<section class="section--center mdl-card mdl-grid mdl-grid--no-spacing">
					<h4 class="mdl-cell mdl-cell--12-col">Subjects</h4>
					<?php
						include('../db_config.php');
						$sql = "SELECT te_username, sub_name, sub_code FROM teachersinfo WHERE class = '".$_SESSION["class"]."'";
						$result = $conn->query($sql);
						if($result->num_rows > 0) {
						while($row = $result->fetch_assoc()){
					?>
					<div onclick="location.href='feedform/?sub_name=<?php echo $row["sub_name"]; ?>'" class="mdl-cell mdl-cell--12-col mdl-grid subjects">
						<div class="section__circle-container mdl-cell mdl-cell--1-col">
							<?php
								$sql1 = "SELECT st_username FROM feeds WHERE st_username = '".$_SESSION["st_username"]."' AND sub_code = '".$row["sub_code"]."' AND class = '".$_SESSION["class"]."'";
								$result1 = $conn->query($sql1);
								if( $result1->num_rows > 0 ) {
							?>
							<div class="section__circle-container__circle mdl-color-text--green-a400">
								<i class="material-icons">done</i>
							</div>
							<?php
								}
								else {
							?>
							<div class="section__circle-container__circle mdl-color-text--red-a400">
								<i class="material-icons">close</i>
							</div>
							<?php
								}
							?>
						</div>
						<div class="section__text mdl-cell mdl-cell--11-col-desktop mdl-cell--7-col-tablet mdl-cell--3-col-phone">
							<h5>
								<?php echo $row["sub_name"]; ?>
							</h5>
						</div>
					</div>
					<?php
							}
						}
					?>
				</section>
			</div>
			<div class="mdl-layout__tab-panel" id="account">
				<section class="section--center mdl-card mdl-grid mdl-grid--no-spacing">
					<h4 class="mdl-cell mdl-cell--12-col">Account</h4>
					<form action="" method="post">
						<div class="mdl-grid mdl-grid--no-spacing">
							<h5 class="mdl-cell mdl-cell--12-col questions">Change password</h5>
							<div class="section__circle-container mdl-cell mdl-cell--1-col">
								<div class="section__circle-container__circle mdl-color-text--green-a400">
									<i class="material-icons">vpn_key</i>
								</div>
							</div>
							<div class="section__text mdl-cell mdl-cell--11-col-desktop mdl-cell--7-col-tablet mdl-cell--3-col-phone">
								<div class="mdl-textfield mdl-js-textfield">
									<input class="mdl-textfield__input" type="password" name="currentpassword">
									<label class="mdl-textfield__label" for="sample1">Current password</label>
								</div>
							</div>
							<div class="section__circle-container mdl-cell mdl-cell--1-col">
								<div class="section__circle-container__circle mdl-color-text--green-a400">
									<i class="material-icons">vpn_key</i>
								</div>
							</div>
							<div class="section__text mdl-cell mdl-cell--11-col-desktop mdl-cell--7-col-tablet mdl-cell--3-col-phone">
								<div class="mdl-textfield mdl-js-textfield">
									<input class="mdl-textfield__input" type="password" name="newpassword">
									<label class="mdl-textfield__label" for="sample1">New password</label>
								</div>
							</div>
							<div class="section__circle-container mdl-cell mdl-cell--1-col">
								<div class="section__circle-container__circle mdl-color-text--green-a400">
									<i class="material-icons">vpn_key</i>
								</div>
							</div>
							<div class="section__text mdl-cell mdl-cell--11-col-desktop mdl-cell--7-col-tablet mdl-cell--3-col-phone">
								<div class="mdl-textfield mdl-js-textfield">
									<input class="mdl-textfield__input" type="password" name="renewpassword">
									<label class="mdl-textfield__label" for="sample1">Retype new password</label>
								</div>
							</div>
							<div class="mdl-cell mdl-cell--12-col questions">
								<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
									Change password
								</button>
							</div>
							<div class="mdl-cell mdl-cell--12-col mdl-color--yellow-300 questions">
								<?php
									$servername = "127.0.0.1";
									$username = "root";
									$password = "";
									$dbname = "feedie_base";
									if (isset($_POST["currentpassword"]) AND isset($_POST["newpassword"]) AND isset($_POST["renewpassword"])){
										// Create connection
										$conn = new mysqli($servername, $username, $password, $dbname);
										$sql = "SELECT password FROM students WHERE st_username = '".$_SESSION["st_username"]."' AND class = '".$_SESSION["class"]."'";
										$result = $conn->query($sql);
										if ($result->num_rows > 0) {
											// output data of each row
											$row = $result->fetch_assoc();
											if( $_POST["currentpassword"] == $row["password"] ){
												if($_POST["newpassword"] != $_POST["renewpassword"]){
													echo "Password didn't match, Retype new password!";
												}
												else{
												$newpassword = $_POST["newpassword"];
												$sql1 = "UPDATE students SET password = '".$newpassword."' WHERE rollno = '".$_SESSION["rollno"]."' AND class = '".$_SESSION["class"]."'";
												$result1 = $conn->query($sql1);
												if($result1){
													echo "Password changed!";
												}
												else{
													echo "Try again!";
												}
											 }
											}
											else
												echo "Current password incorrect!";
										} 
										$conn->close();
									}
								?>
							</div>
						</div>
					</form>
				</section>
			</div>
		</main>
	</div>
	<div id="snackbar">Some text some message..</div>
	<?php
	  //Toast setting-up
	  if (isset($_SESSION["toast_type"])) {
	  	if($_SESSION["toast_type"] == "update") {
	     echo 
                '<script type="text/javascript">
                 function showsnackbar() {
                  var x = document.getElementById("snackbar");
                  x.innerHTML = "Response updated";
                  x.className = "show";
                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 4000);
                  }
                 showsnackbar()
                 </script>';
          unset($_SESSION["toast_type"]);
	  	}
        elseif ($_SESSION["toast_type"] == "first-time") {
         echo 
                '<script type="text/javascript">
                 function showsnackbar() {
                  var x = document.getElementById("snackbar");
                  x.innerHTML = "Response added";
                  x.className = "show";
                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 4000);
                  }
                 showsnackbar()
                 </script>';
          unset($_SESSION["toast_type"]);
        }
      }
	?>
</body>

</html>
