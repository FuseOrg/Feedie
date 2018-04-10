<html>
 <head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="../css.css">
	<link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet'>
  <link rel="icon" type="image/png" href="../images/favicon.svg">
  <title>Feedie | Dashboard</title>
  <style>
		.given {
			display: none;
			color: #fff;
			float: right;
		}
		.notgiven {
			display: none;
			color: #fff;
			float: right;
		}
	</style>
 </head>
 <body>
  <div class="header">
		<div><a href="../"><img src="../images/home.svg" class="home"></a></div>
		<img src="../images/logo.svg" class="logo"/>
		<div class="title">Feedie</div>
    <a href="../?logout=1"><div class="logout">Logout</div></a>
  </div>
  <div class="details">
  Hi  
  	  <?php
  	   session_start();

       if (!isset($_SESSION["st_username"])){
         sleep(1);
         header('Location: ../');
       }

  	   echo $_SESSION["st_username"];
       echo ", ";
       echo $_SESSION["class"];
  	  ?>
      <div class="changepw">
        <a href="changepw" class="link">Change password</a>
      </div>
  </div>
  <div class="page">
  <div class="container">
		<div class="heading">Subjects</div>
	<?php
     include('../db_config.php');

     $sql = "SELECT te_username, sub_name, sub_code FROM teachersinfo WHERE class = '".$_SESSION["class"]."'";
     $result = $conn->query($sql);

     if($result->num_rows > 0) {
      while($row = $result->fetch_assoc()){
    ?>
      <button onclick="location.href='feedform/?sub_name=<?php echo $row["sub_name"]; ?>'" class="button">
      <?php
        echo $row["sub_name"];
      ?>
      
<!--
      first uncomment this comment block
      
      using php, check wheather the sub's 'done' is true or not..
      
      if 'done' is true..
      make the following style tag visible using php..
      
      <style>
				.given {
					display: block;
				}
				.notgiven {
					display: none;
				}
			</style>
      
      if 'done' is false...
      make the following style tag visible using php..
      
      <style>
				.given {
					display: none;
				}
				.notgiven {
					display: block;
				}
			</style>
-->
      
      
      <span class="given">&#10004;</span>
      <span class="notgiven">&#x2716;</span>
      </button>
    <?php
      }
     }
    ?>
  </div>
  </div>
  <footer><a href="https://fuse-org.firebaseapp.com" class="link" target="_blank">Fuse Org</a></footer>
</body>
</html>
