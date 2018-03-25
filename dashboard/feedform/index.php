<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../../css.css">
	<link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet'>
	<title>Feedie | Form</title>
  <link rel="icon" type="image/png" href="../../images/logo.png">
</head>
<body>
  <?php 
    session_start();
    if (!isset($_SESSION["st_username"])){
         sleep(1);
         header('Location: ../../');
    }
  ?>
  <div class="header">
		<div><a href="../"><img src="../../images/back.svg" class="home"></a></div>
		<img src="../../images/logo.png" class="logo"/>
		<div class="title">Feedie</div>
    <a href="../../?logout=1"><div class="logout">Logout</div></a>
  </div>
	<div class="details">Subject name:&nbsp;
    <?php
     $_SESSION["sub_name"] = $_GET["sub_name"];
     echo $_GET["sub_name"];
    ?>
  <br>
  Teachers name:&nbsp;  
    <?php
    include('../../db_config.php');
    $sql1 = "SELECT sub_code, te_username FROM teachersinfo WHERE  sub_name='".$_GET["sub_name"]."' AND class='".$_SESSION["class"]."'";
    $result1 = $conn->query($sql1);
    if($result1->num_rows > 0){
      $row = $result1->fetch_assoc();
      $_SESSION["te_username"] = $row["te_username"];
      $_SESSION["sub_code"] = $row["sub_code"];
    }
    echo $_SESSION["te_username"];
    ?>
	</div>
  <div class="page">
<div id="snackbar">Some text some message..</div>
<div class="container">
<div class="phpr" style="color:red">
<?php
    
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "feedie_base";
    if ($_SESSION["st_username"] AND $_SESSION["te_username"] AND isset($_POST["cover"]) AND isset($_POST["discuss"]) AND isset($_POST["knowledge"]) AND isset($_POST["communicate"]) AND isset($_POST["inspire"]) AND isset($_POST["punctual"]) AND isset($_POST["engage"]) AND isset($_POST["prepare"]) AND isset($_POST["guidance"]) AND isset($_POST["available"])){
            // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);
              $cover = $_POST["cover"];
              $discuss = $_POST["discuss"];
              $knowledge = $_POST["knowledge"];
              $communicate = $_POST["communicate"];
              $inspire = $_POST["inspire"];
              $punctual = $_POST["punctual"];
              $engage = $_POST["engage"];
              $prepare = $_POST["prepare"];
              $guidance = $_POST["guidance"];
              $available = $_POST["available"];
              //For checking whether user have already submit a feed on this teacher
              $sql_check = "SELECT st_username FROM feeds WHERE st_username = '".$_SESSION["st_username"]."' AND te_username = '".$_SESSION["te_username"]."'";
              $result_check = $conn->query($sql_check);
              if($result_check->num_rows > 0){
                $sql = "UPDATE feeds SET cover='".$cover."', discuss='".$discuss."', knowledge='".$knowledge."', communicate='".$communicate."', inspire='".$inspire."', punctual='".$punctual."', engage='".$engage."', prepare='".$prepare."', guidance='".$guidance."', available='".$available."' WHERE st_username='".$_SESSION["st_username"]."' AND te_username='".$_SESSION["te_username"]."'";
                $result = $conn->query($sql);
                if($result){
                  //echo "Successful. ";
                  include('overall.php');
                }
                echo "Response updated";
                echo 
                '<script type="text/javascript">
                 function showsnackbar() {
                  var x = document.getElementById("snackbar");
                  x.innerHTML = "Response updated";
                  x.className = "show";
                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 4000);
                  }
                 showsnackbar()
                 </script>';
              }
              else{
                $sql1 = "UPDATE teachersinfo SET feed_applied = feed_applied + 1 WHERE te_username = '".$_SESSION["te_username"]."' AND class = '".$_SESSION["class"]."' AND sub_code = '".$_SESSION["sub_code"]."'";
                $result1 = $conn->query($sql1);
                
                /*
                if($result1){
                  echo "Updated";
                }
                */
                $sql = "INSERT INTO feeds (st_username, te_username, sub_code, sub_name, class, cover, discuss, knowledge, communicate, inspire,  punctual, engage, prepare, guidance, available) VALUES('".$_SESSION["st_username"]."','".$_SESSION["te_username"]."','".$_SESSION["sub_code"]."','".$_SESSION["sub_name"]."','".$_SESSION["class"]."','".$cover."','".$discuss."','".$knowledge."','".$communicate."','".$inspire."','".$punctual."','".$engage."','".$prepare."','".$guidance."','".$available."')";
                $result = $conn->query($sql);
                if($result){
                  //echo "Successful. ";
                  include('overall.php');
                }
                echo "First time response ";
                echo 
                '<script type="text/javascript">
                 function showsnackbar() {
                  var x = document.getElementById("snackbar");
                  x.innerHTML = "Response added";
                  x.className = "show";
                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 4000);
                  }
                 showsnackbar()
                 </script>';
              }
            
              $conn->close();
            }
            else{
              echo "Please complete the feedback<br><br>
	      Guidlines:<br>
	      &#9733 = Poor<br>
	      &#9733 &#9733 = Need improvements<br>
	      &#9733 &#9733 &#9733 = Average<br>
	      &#9733 &#9733 &#9733 &#9733        = Good<br>
	      &#9733 &#9733 &#9733 &#9733 &#9733 = Excellent";
            }
   ?>
	</div>
<form action="<?php  $_PHP_SELF ?>" method="post">
<fieldset class="rating">
   1. The teacher covers the entire syllabus
    <input type="radio" id="star5-1" name="cover" value="5" /><label for="star5-1" title="Rocks!"><span>&#9733</span></label>
    <input type="radio" id="star4-1" name="cover" value="4" /><label for="star4-1" title="Pretty good"><span>&#9733</span></label>
    <input type="radio" id="star3-1" name="cover" value="3" /><label for="star3-1" title="Meh"><span>&#9733</span></label>
    <input type="radio" id="star2-1" name="cover" value="2" /><label for="star2-1" title="Kinda bad"><span>&#9733</span></label>
    <input type="radio" id="star1-1" name="cover" value="1" /><label for="star1-1" title="Sucks big time"><span>&#9733</span></label>
</fieldset>
<fieldset class="rating">
   2. The teacher discusses topics in detail
    <input type="radio" id="star5-2" name="discuss" value="5" /><label for="star5-2" title="Rocks!"><span>&#9733</span></label>
    <input type="radio" id="star4-2" name="discuss" value="4" /><label for="star4-2" title="Pretty good"><span>&#9733</span></label>
    <input type="radio" id="star3-2" name="discuss" value="3" /><label for="star3-2" title="Meh"><span>&#9733</span></label>
    <input type="radio" id="star2-2" name="discuss" value="2" /><label for="star2-2" title="Kinda bad"><span>&#9733</span></label>
    <input type="radio" id="star1-2" name="discuss" value="1" /><label for="star1-2" title="Sucks big time"><span>&#9733</span></label>
</fieldset>
<fieldset class="rating">
   3. The teacher possesses deep knowledge of the subject taught
    <input type="radio" id="star5-3" name="knowledge" value="5" /><label for="star5-3" title="Rocks!"><span>&#9733</span></label>
    <input type="radio" id="star4-3" name="knowledge" value="4" /><label for="star4-3" title="Pretty good"><span>&#9733</span></label>
    <input type="radio" id="star3-3" name="knowledge" value="3" /><label for="star3-3" title="Meh"><span>&#9733</span></label>
    <input type="radio" id="star2-3" name="knowledge" value="2" /><label for="star2-3" title="Kinda bad"><span>&#9733</span></label>
    <input type="radio" id="star1-3" name="knowledge" value="1" /><label for="star1-3" title="Sucks big time"><span>&#9733</span></label>
</fieldset>
<fieldset class="rating">
   4. The teacher communicate clearly
    <input type="radio" id="star5-4" name="communicate" value="5" /><label for="star5-4" title="Rocks!"><span>&#9733</span></label>
    <input type="radio" id="star4-4" name="communicate" value="4" /><label for="star4-4" title="Pretty good"><span>&#9733</span></label>
    <input type="radio" id="star3-4" name="communicate" value="3" /><label for="star3-4" title="Meh"><span>&#9733</span></label>
    <input type="radio" id="star2-4" name="communicate" value="2" /><label for="star2-4" title="Kinda bad"><span>&#9733</span></label>
    <input type="radio" id="star1-4" name="communicate" value="1" /><label for="star1-4" title="Sucks big time"><span>&#9733</span></label>
</fieldset>
<fieldset class="rating">
   5. The teacher inspires me by his/her knowledge in the subject
    <input type="radio" id="star5-5" name="inspire" value="5" /><label for="star5-5" title="Rocks!"><span>&#9733</span></label>
    <input type="radio" id="star4-5" name="inspire" value="4" /><label for="star4-5" title="Pretty good"><span>&#9733</span></label>
    <input type="radio" id="star3-5" name="inspire" value="3" /><label for="star3-5" title="Meh"><span>&#9733</span></label>
    <input type="radio" id="star2-5" name="inspire" value="2" /><label for="star2-5" title="Kinda bad"><span>&#9733</span></label>
    <input type="radio" id="star1-5" name="inspire" value="1" /><label for="star1-5" title="Sucks big time"><span>&#9733</span></label>
</fieldset>
<fieldset class="rating">
   6. The teacher is punctual to the class
    <input type="radio" id="star5-6" name="punctual" value="5" /><label for="star5-6" title="Rocks!"><span>&#9733</span></label>
    <input type="radio" id="star4-6" name="punctual" value="4" /><label for="star4-6" title="Pretty good"><span>&#9733</span></label>
    <input type="radio" id="star3-6" name="punctual" value="3" /><label for="star3-6" title="Meh"><span>&#9733</span></label>
    <input type="radio" id="star2-6" name="punctual" value="2" /><label for="star2-6" title="Kinda bad"><span>&#9733</span></label>
    <input type="radio" id="star1-6" name="punctual" value="1" /><label for="star1-6" title="Sucks big time"><span>&#9733</span></label>
</fieldset>
<fieldset class="rating">
   7. The teacher engages the class for the full duration and completes the course in time
    <input type="radio" id="star5-7" name="engage" value="5" /><label for="star5-7" title="Rocks!"><span>&#9733</span></label>
    <input type="radio" id="star4-7" name="engage" value="4" /><label for="star4-7" title="Pretty good"><span>&#9733</span></label>
    <input type="radio" id="star3-7" name="engage" value="3" /><label for="star3-7" title="Meh"><span>&#9733</span></label>
    <input type="radio" id="star2-7" name="engage" value="2" /><label for="star2-7" title="Kinda bad"><span>&#9733</span></label>
    <input type="radio" id="star1-7" name="engage" value="1" /><label for="star1-7" title="Sucks big time"><span>&#9733</span></label>
</fieldset>
<fieldset class="rating">
   8. The teacher comes fully prepared for the class
    <input type="radio" id="star5-8" name="prepare" value="5" /><label for="star5-8" title="Rocks!"><span>&#9733</span></label>
    <input type="radio" id="star4-8" name="prepare" value="4" /><label for="star4-8" title="Pretty good"><span>&#9733</span></label>
    <input type="radio" id="star3-8" name="prepare" value="3" /><label for="star3-8" title="Meh"><span>&#9733</span></label>
    <input type="radio" id="star2-8" name="prepare" value="2" /><label for="star2-8" title="Kinda bad"><span>&#9733</span></label>
    <input type="radio" id="star1-8" name="prepare" value="1" /><label for="star1-8" title="Sucks big time"><span>&#9733</span></label>
</fieldset>
<fieldset class="rating">
   9. The teacher provide guidance outside/inside the class
    <input type="radio" id="star5-9" name="guidance" value="5" /><label for="star5-9" title="Rocks!"><span>&#9733</span></label>
    <input type="radio" id="star4-9" name="guidance" value="4" /><label for="star4-9" title="Pretty good"><span>&#9733</span></label>
    <input type="radio" id="star3-9" name="guidance" value="3" /><label for="star3-9" title="Meh"><span>&#9733</span></label>
    <input type="radio" id="star2-9" name="guidance" value="2" /><label for="star2-9" title="Kinda bad"><span>&#9733</span></label>
    <input type="radio" id="star1-9" name="guidance" value="1" /><label for="star1-9" title="Sucks big time"><span>&#9733</span></label>
</fieldset>
<fieldset class="rating">
   10. The teacher was available to answer questions in office hours
    <input type="radio" id="star5-10" name="available" value="5" /><label for="star5-10" title="Rocks!"><span>&#9733</span></label>
    <input type="radio" id="star4-10" name="available" value="4" /><label for="star4-10" title="Pretty good"><span>&#9733</span></label>
    <input type="radio" id="star3-10" name="available" value="3" /><label for="star3-10" title="Meh"><span>&#9733</span></label>
    <input type="radio" id="star2-10" name="available" value="2" /><label for="star2-10" title="Kinda bad"><span>&#9733</span></label>
    <input type="radio" id="star1-10" name="available" value="1" /><label for="star1-10" title="Sucks big time"><span>&#9733</span></label>
</fieldset>
    <div style="text-align: right">
<input type="submit" value="SUBMIT" class="button">
	  </div>
</form>
</div>
</div>
  <footer><a href="https://fuse-org.firebaseapp.com" class="link" target="_blank">Fuse Org</a></footer>
</body>
</html>
