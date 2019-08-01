<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<script src="../scripts/material.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Product+Sans:500,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="../styles/material.min.css">
	<link rel="stylesheet" href="../styles/main.css">
	<link rel="icon" type="image/png" href="../images/logo.png">
	<title>Student Signup | Feedie</title>
</head>

<body class="mdl-demo mdl-color-text--grey-900 mdl-base mdl-grid mdl-grid--no-spacing mdl-layout mdl-js-layout">
	<section class="horizontal-banner mdl-grid mdl-grid--no-spacing mdl-cell mdl-cell--12-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
		Horizontal banner
	</section>
	<section class="mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone section--center mdl-grid mdl-grid--no-spacing">
		<form action="" method="post">
			<div class="mdl-grid mdl-grid--no-spacing">
				<h4 class="mdl-cell mdl-cell--12-col questions">Student Sign Up</h4>
				<div class="mdl-cell mdl-cell--12-col questions" style="flex-direction: column;">
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="text" name="fullname" id="fullname">
						<label class="mdl-textfield__label">Full Name</label>
					</div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="text" name="rollno" id="rollno">
						<label class="mdl-textfield__label">Register Number</label>
					</div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="text" name="class" id="class">
						<label class="mdl-textfield__label">Class</label>
					</div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="number" name="phoneno" id="phoneno">
						<label class="mdl-textfield__label">Contact Number</label>
					</div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="email" name="email" id="email">
						<label class="mdl-textfield__label">Email Address</label>
					</div>
					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
						<input class="mdl-textfield__input" type="password" name="password" id="password">
						<label class="mdl-textfield__label">Password</label>
						<span onclick="toggler()" class="mdl-button mdl-js-button mdl-button--icon mdl-button--accent">
							<i id="sp" class="material-icons">visibility_off</i>
						</span>
					</div>
				</div>
				<div class="mdl-cell mdl-cell--12-col questions">
					<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--accent">
						Sign Up
					</button>
				</div>
				<script>
					function toggler() {
						if (document.getElementById("sp").innerHTML == 'visibility_off') {
							document.getElementById("sp").innerHTML = 'visibility';
							document.getElementById("password").type = "text";
						} else {
							document.getElementById("sp").innerHTML = 'visibility_off';
							document.getElementById("password").type = "password";
						}
					}

				</script>
				<div class="mdl-cell mdl-cell--12-col mdl-color-text--red-a400 questions">
					<?php
							session_start();
							include('../db_config.php');
							if (isset($_SESSION["st_username"])){
								//Add sleep here
								header('Location: ../dashboard/');
							}
							if (isset($_POST["fullname"]) AND isset($_POST["rollno"]) AND isset($_POST["class"]) AND isset($_POST["phoneno"]) AND isset($_POST["email"]) AND isset($_POST["password"])){
							    // Create connection
								//$conn = new mysqli($servername, $username, $password, $dbname);
								$sql = "INSERT INTO registrations (st_username, rollno, class, phoneno, email, password) VALUES('".$_POST["fullname"]."','".$_POST["rollno"]."','".$_POST["class"]."','".$_POST["phoneno"]."','".$_POST["email"]."','".$_POST["password"]."')";
							    $result = $conn->query($sql);
							    if($result){
							    	//echo "Successful. ";
							    	echo "Your account details has successfully registered! Now please wait for faculty verification!";
							    }
							    else {
							    	echo "Sorry please try again! Something went wrong!";
							    }
								$conn->close();
							}
						?>
				</div>
			</div>
		</form>
	</section>
</body>

</html>
