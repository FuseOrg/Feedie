<html>
 <head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="../../css.css">
	<link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet'>
  <link rel="icon" type="image/png" href="../../images/logo.png">
  <title>Feedie | Change Password</title>
 </head>
 <body>
  <div class="header">
		<div><a href="../"><img src="../../images/back.svg" class="home"></a></div>
		<img src="../../images/logo.svg" class="logo"/>
		<div class="title">Feedie</div>
    <a href="../../?logout=1"><div class="logout">Logout</div></a>
  </div>
  <div class="wrapper">
  <div class="container">
		<div class="heading">Change Password</div>
		<center><img src="../../images/student.svg" class="avatar"/></center>
    <form class="myform" action="" method="post">
		<input type="password" class="inputvalue" name="currentpassword" placeholder="Current Password"/>
		<input type="password" class="inputvalue" name="newpassword" placeholder="New Password"/>
		<input type="password" class="inputvalue" name="renewpassword" placeholder="Retype New Password"/>
    <div class="phpr" style="color:red">
    <label>
    <?php   
      
      session_start();
      $servername = "127.0.0.1";
      $username = "root";
      $password = "";
      $dbname = "feedie_base";
            
      if (isset($_POST["currentpassword"]) AND isset($_POST["newpassword"]) AND isset($_POST["renewpassword"])){
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT password FROM students WHERE st_username = '".$_SESSION["st_username"]."' AND class = '".$_SESSION["class"]."'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          $row = $result->fetch_assoc();
          if( $_POST["currentpassword"] == $row["password"] ){
            if($_POST["newpassword"] != $_POST["renewpassword"]){
              echo "Password didn't match, Retype new password!";
            }
            else{
            $newpassword = $_POST["newpassword"];
            $sql1 = "UPDATE students SET password = '".$newpassword."' WHERE rollno = '".$_SESSION["rollno"]."' AND class = '".$_SESSION["class"]."'";
            $result1 = $conn->query($sql1);
            if($result1){
              echo "Password changed!";
            }
            else{
              echo "Try again!";
            }
           }
          }
          else
            echo "Current password incorrect!";
        } 
        $conn->close();
      }

    ?>
    </label>
    </div>
    <div style="text-align: right">
    <input class="button" type="submit" value="Change Password"/>
	  </div>
    </form>
  </div>
  </div>
  <footer><a href="https://fuseorg.github.io/Feedie" class="link" target="_blank">Fuse Org</a></footer>
 </body>
</html>
