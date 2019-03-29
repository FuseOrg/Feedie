<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<script src="../../scripts/material.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="../../styles/material.min.css">
	<link rel="stylesheet" href="../../styles/main.css">
	<link rel="icon" type="image/png" href="../../images/logo.png">
	<title>Faculty Login | Feedie</title>
</head>

<body class="mdl-demo mdl-color-text--grey-900 mdl-base">
	<?php
   session_start();
   if (isset($_SESSION["te_username"])){
     //Add sleep here
     header('Location: dashboard/');
   }
 ?>
	<div class="mdl-grid mdl-grid--no-spacing mdl-layout mdl-js-layout">
		<div class="mdl-cell mdl-cell--6-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone section--center mdl-grid mdl-grid--no-spacing">
			<div class="mdl-cell mdl-cell--12-col">
			</div>
			<form action="" method="post">
				<div class="mdl-grid mdl-grid--no-spacing">
					<h4 class="mdl-cell mdl-cell--12-col questions">Faculty sign in</h4>
					<div class="mdl-cell mdl-cell--12-col questions" style="flex-direction: column;">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" name="username" id="username">
							<label class="mdl-textfield__label">Register number</label>
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
							Log in
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
				$servername = "127.0.0.1";
				$username = "root";
				$password = "";
				$dbname = "feedie_base";
				if (isset($_POST["username"]) AND isset($_POST["password"])){
				// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					$username = $_POST["username"];
					$sql = "SELECT password FROM teachers WHERE te_username = '".$username."'";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
					// output data of each row
					$row = $result->fetch_assoc();
					if( $_POST["password"] == $row["password"] ){
						echo "You are logged in...";
						session_start();
						$_SESSION["te_username"] = $_POST["username"];
						//Add sleep here
						header("Location: dashboard/");
					}
					else
						echo "Password incorrect";
					} 
					else {
						echo "Unknown username";
					}
					$conn->close();
				}
		?>
					</div>
				</div>
			</form>
		</div>
		<div class="mdl-layout--large-screen-only mdl-cell mdl-cell--6-col-desktop mdl-cell--4-col-phone banner">
		</div>
	</div>
</body>

</html>
