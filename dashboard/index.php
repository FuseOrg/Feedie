<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="../css.css">
	<link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet'>
	<link rel="icon" type="image/png" href="../images/logo.png">
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
		<img src="../images/logo.svg" class="logo" />
		<div class="title">Feedie</div>
		<a href="../?logout=1">
			<div class="logout">Logout</div>
		</a>
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

        $sql1 = "SELECT st_username FROM feeds WHERE st_username = '".$_SESSION["st_username"]."' AND sub_code = '".$row["sub_code"]."' AND class = '".$_SESSION["class"]."'";
        $result1 = $conn->query($sql1);
        if( $result1->num_rows > 0 ){
      ?>
          <span class="given" style="display: block;">&#10004;</span>
          <span class="notgiven" style="display: none;">&#x2716;</span>   
      <?php
        }
        else{
      ?>   
          <span class="given" style="display: none;">&#10004;</span>
          <span class="notgiven" style="display: block;">&#x2716;</span>
      <?php
        }
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
