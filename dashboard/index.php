<html>
 <head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="../css.css">
	<link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet'>
   <link rel="icon" type="image/png" href="../images/logo.png">
   <title>Feedie | Dashboard</title>
 </head>
 <body>
  <div class="header">
		<div><a href="../"><img src="../images/home.svg" class="home"></a></div>
		<img src="../images/logo.png" class="logo"/>
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
        <a href="changepw" style="link">Change password</a>
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
      </button>
    <?php
      }
     }
    ?>
  </div>
  </div>
  <footer>&copy;<a href="https://fuse-org.firebaseapp.com" class="link" target="_blank">Fuse Org</a></footer>
</body>
</html>
