<html>
 <head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="../../css.css">
	<link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet'>
  <link rel="icon" type="image/png" href="../../images/favicon.svg">
  <title>Feedie | Teacher Login</title>
 </head>
 <body>
  <div class="header">
		<div><a href="../"><img src="../../images/home.svg" class="home"></a></div>
		<img src="../../images/logo.svg" class="logo"/>
		<div class="title">Feedie</div>
  </div>
  <div class="wrapper">
   <div class="container">
		<div class="heading">Teacher Login</div>
		<center><img src="../../images/teacher.svg" class="avatar"/></center>
		<form class="myform" action="" method="post">
		<input type="text" class="inputvalue" name="username" placeholder="Username"/>
		<input id="password" type="password" class="inputvalue" name="password" placeholder="Password"/>
		<div class="psw"><span class="shp" onclick="toggler(this)" type="button">Show</span></div>
		<script>
			function toggler(e) {
				if( e.innerHTML == 'Show' ) {
					e.innerHTML = 'Hide'
					document.getElementById('password').type="text";
				} else {
					e.innerHTML = 'Show'
					document.getElementById('password').type="password";
				}
			}
		</script>
		<div style="text-align: right">
			<input class="button" type="submit" id="login_btn" value="Login"/>
		</div>
		<div class="phpr" style="color:red">
		<label>
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
						sleep(2);
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
		</label>
		</div>
	 	</form>
   </div>
  </div>
  <footer><a href="https://fuse-org.firebaseapp.com" class="link" target="_blank">Fuse Org</a></footer>
 </body>
</html>