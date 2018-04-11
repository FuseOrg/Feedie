<html>
 <head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="../css.css">
	<link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet'>
  <link rel="icon" type="image/png" href="../images/favicon.svg">
  <title>Feedie | Maintainer Login</title>
 </head>
 <body>
  <?php

   session_start();
   if (isset($_SESSION["ma_username"])){
     sleep(1);
     header('Location: dashboard/');
   }

 ?>
  <div class="header">
		<img src="../images/logo.svg" class="logo"/>
		<div class="title">Feedie</div>
  </div>
  <div class="wrapper">
  <div class="container">
		<div class="heading">Maintainer Login</div>
		<center><img src="../images/maintainer.svg" class="avatar"/></center>
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

      if (isset($_GET["logout"])){
        if ($_GET["logout"] == 1){
          session_start();
          session_destroy();
        }
      }

      $servername = "127.0.0.1";
      $username = "root";
      $password = "";
      $dbname = "feedie_base";
            
      if (isset($_POST["username"]) AND isset($_POST["password"])){
      // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $ma_username = $_POST["username"];
        $sql = "SELECT ma_username, password FROM maintainers WHERE ma_username = '".$ma_username."'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          $row = $result->fetch_assoc();
          if( $_POST["password"] == $row["password"] ){
            echo "Logging you in..";    
            session_start();
            $_SESSION["ma_username"] = $_POST["username"];
            sleep(1);
            header("Location: dashboard/");  // lines
          }
          else
            echo "Password incorrect!";
          } 
        else {
            echo "Unknown User name!";
        }
        $conn->close();
      }

    ?>
    </label>
    </div>
    </form>
  </div>
  </div>
  <footer><a href="https://fuseorg.github.io/Feedie" class="link" target="_blank">Fuse Org</a></footer>
 </body>
</html>
