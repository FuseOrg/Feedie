<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="../../../../css.css">
	<link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet'>
	<link rel="icon" type="image/png" href="../../../../images/logo.png">
	<title>Feedie | Dashboard</title>
</head>

<body>
	<div class="header">
		<div><a href="../"><img src="../../../../images/back.svg" class="home"></a></div>
		<img src="../../../../images/logo.svg" class="logo" />
		<div class="title">Feedie</div>
		<a href="../../../?logout=1">
			<div class="logout">Logout</div>
		</a>
	</div>
	<div class="details">

		<?php
  	   session_start();

       if (!isset($_SESSION["hod_username"])){
          sleep(1);
          header('Location: ../../../');
       }

       $te_username = $_GET["te_username"];
       $te_dept = $_GET["te_dept"];
       $_SESSION["te_username"] = $te_username;
       $_SESSION["te_dept"] = $te_dept;
  	   echo $_SESSION["te_username"];
       echo ", ";
       echo $te_dept;
  	  ?>

	</div>
	<div class="page">
		<div class="container">
			<div class="heading">Select class</div>
			<?php
        include('../../../../db_config.php');
        
        $_SESSION["te_username"] = $te_username;
        $sql = "SELECT sub_name, sub_code, class FROM teachersinfo WHERE te_username = '".$te_username."' AND class_dept = '".$te_dept."'";
        $result = $conn->query($sql);

        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
      ?>
				<button onclick="location.href='scorecard/?class=<?php echo $row["class"]; ?>&sub_name=<?php echo $row["sub_name"] ?>&sub_code=<?php echo $row["sub_code"] ?>'" class="button">
      <?php
        echo $row["sub_name"].", ".$row["class"];
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
