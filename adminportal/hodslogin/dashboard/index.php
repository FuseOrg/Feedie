<html>
 <head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="../../../css.css">
	<link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet'>
	<link rel="icon" type="image/png" href="../../../images/logo.png">
	<title>Feedie | Dashboard</title>
 </head>
 <body>
  <div class="header">
		<div><a href="../"><img src="../../../images/back.svg" class="home"></a></div>
		<img src="../../../images/logo.svg" class="logo"/>
		<div class="title">Feedie</div>
    <a href="../../?logout=1"><div class="logout">Logout</div></a>
  </div>
  <div class="wrapper">
    <div class="container">
    	<div class="heading">
 
      <?php
  	   session_start();

       if (!isset($_SESSION["hod_username"])){
          sleep(1);
          header('Location: ../../');
       }

  	   echo $_SESSION["hod_username"];
       echo ", ";
       echo $_SESSION["dept"];
  	  ?> 

			Department
	    </div>
      <?php
        include('../../../db_config.php');

        $sql = "SELECT te_username FROM teachers WHERE dept = '".$_SESSION["dept"]."'";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
      ?>
      <button onclick="location.href='teachersmenu/?te_username=<?php echo $row["te_username"]; ?>'" class="button">
      <?php
        echo $row["te_username"];
      ?>
      </button>
    <?php
      }
     }
    ?>
      <div class="heading">
        Other Department's Collabrating Teachers
      </div>
      <?php
       include('../../../db_config.php');

        $sql = "SELECT te_username FROM teachers WHERE dept NOT LIKE '".$_SESSION["dept"]."' AND te_username = ANY (SELECT te_username FROM teachersinfo WHERE class_dept LIKE '".$_SESSION["dept"]."')";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
      ?>
      <button onclick="location.href='teachersmenu/?te_username=<?php echo $row["te_username"]; ?>'" class="button">
      <?php
        echo $row["te_username"];
      ?>
      </button>
      <?php
       }
      }
     ?>
    </div>
  </div>
  <footer><a href="https://fuseorg.github.io/Feedie" class="link" target="_blank">Fuse Org</a></footer>
</body>
</html>
