<html>
  <head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="../../css.css">
	<link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet'>
  <link rel="icon" type="image/png" href="../../images/logo.svg">
  <title>Feedie | HOD Login</title>
  </head>
  <body>
  <div class="header">
		<div><a href="../"><img src="../../images/home.svg" class="home"></a></div>
		<img src="../../images/logo.svg" class="logo"/>
		<div class="title">Feedie</div>
  </div>
  <div class="wrapper">
  <div class="container">
		<div class="heading">HOD Login</div>
		<center><img src="../../images/hod.svg" class="avatar"/></center>
    <form class="myform" action="" method="post">
      <input type="text" name="username" class="inputvalue" placeholder="Username"/> 
      <input type="password" name="password" class="inputvalue" placeholder="Password">
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
        $sql = "SELECT password, dept FROM hods WHERE hod_username = '".$username."'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          $row = $result->fetch_assoc();
          if( $_POST["password"] == $row["password"] ){
            echo "Logging you in...";    
            session_start();
            $_SESSION["hod_username"] = $_POST["username"];
            $_SESSION["dept"] = $row["dept"];
            sleep(1);
            header("Location: dashboard/");  // lines
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
    <div style="text-align: right">
      <input class="button" type="submit" id="login_btn" value="Login"/>
	  </div>
    </form>
		</div>
	</div>
  <footer><a href="https://fuse-org.firebaseapp.com" class="link" target="_blank">Fuse Org</a></footer>
  </body>
</html>