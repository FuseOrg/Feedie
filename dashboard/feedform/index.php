<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="../../css.css">
	<link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet'>
	<link rel="icon" type="image/png" href="../../images/logo.png">
	<title>Feedie | Form</title>
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
		<img src="../../images/logo.svg" class="logo" />
		<div class="title">Feedie</div>
		<a href="../../?logout=1">
			<div class="logout">Logout</div>
		</a>
	</div>
	<div class="details">Subject name:&nbsp;
		<?php
     $_SESSION["sub_name"] = $_GET["sub_name"];
     echo $_GET["sub_name"];
    ?>
			<br> Teachers name:&nbsp;
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
			<div class="phpr">
				<?php
    
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "feedie_base";

    $error = false;
    $counter = 0;
    
    if ( isset($_POST['q']) ){
      $q = $_POST['q'];
      foreach($q as $field) {
        ++$counter;
      }
    }
    
    if($counter != 10){
      $error = true;
    }

    if ( !$error ){
            // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);
              $q = $_POST['q'];
              $i = 1;
              foreach( $q as $key ){
                $qf[$i] = $key;
                ++$i;
              }
              //For checking whether user have already submit a feed on this teacher
              $sql_check = "SELECT st_username FROM feeds WHERE st_username = '".$_SESSION["st_username"]."' AND te_username = '".$_SESSION["te_username"]."' AND sub_code='".$_SESSION["sub_code"]."' AND class = '".$_SESSION["class"]."'";
              $result_check = $conn->query($sql_check);
              if($result_check->num_rows > 0){
                $sql = "UPDATE feeds SET q1='".$qf[1]."', q2='".$qf[2]."', q3='".$qf[3]."', q4='".$qf[4]."', q5='".$qf[5]."', q6='".$qf[6]."', q7='".$qf[7]."', q8='".$qf[8]."', q9='".$qf[9]."', q10='".$qf[10]."' WHERE st_username='".$_SESSION["st_username"]."' AND te_username='".$_SESSION["te_username"]."' AND sub_code='".$_SESSION["sub_code"]."' AND class = '".$_SESSION["class"]."'";
                $result = $conn->query($sql);
                if($result){
                  //echo "Successful. ";
                  include('overall.php');
                }
                echo "Response have been updated";
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
                $sql = "INSERT INTO feeds (st_username, te_username, sub_code, sub_name, class, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10 ) VALUES('".$_SESSION["st_username"]."','".$_SESSION["te_username"]."','".$_SESSION["sub_code"]."','".$_SESSION["sub_name"]."','".$_SESSION["class"]."','".$qf[1]."','".$qf[2]."','".$qf[3]."','".$qf[4]."','".$qf[5]."','".$qf[6]."','".$qf[7]."','".$qf[8]."','".$qf[9]."','".$qf[10]."')";
                $result = $conn->query($sql);
                if($result){
                  //echo "Successful. ";
                  include('overall.php');
                }
                echo "Thanks for your first time response";
                echo '<script type="text/javascript">
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
				<?php

  include('../../db_config.php');
  $sql_q = "SELECT quest_id, quest_content FROM questions WHERE quest_id != 0 ORDER BY quest_id ASC";
  $result_q = $conn->query($sql_q);
  if ( $result_q->num_rows > 0 ){

?>
					<fieldset class="rating flex">
						<div class="flex" style="width:100%;">
							<?php $row = $result_q->fetch_assoc(); 
        echo $row["quest_id"].". ".$row["quest_content"]; 
   ?>
						</div>
						<div class="flex" style="direction: rtl;">
							<input type="checkbox" id="star5-1" name="q[<?php echo $row[" quest_id "]; ?>]" value="5" /><label for="star5-1" title="Rocks!"><span>&#9733</span></label>
							<input type="checkbox" id="star4-1" name="q[<?php echo $row[" quest_id "]; ?>]" value="4" /><label for="star4-1" title="Pretty good"><span>&#9733</span></label>
							<input type="checkbox" id="star3-1" name="q[<?php echo $row[" quest_id "]; ?>]" value="3" /><label for="star3-1" title="Meh"><span>&#9733</span></label>
							<input type="checkbox" id="star2-1" name="q[<?php echo $row[" quest_id "]; ?>]" value="2" /><label for="star2-1" title="Kinda bad"><span>&#9733</span></label>
							<input type="checkbox" id="star1-1" name="q[<?php echo $row[" quest_id "]; ?>]" value="1" /><label for="star1-1" title="Sucks big time"><span>&#9733</span></label>
						</div>
					</fieldset>
					<fieldset class="rating flex">
						<div class="flex" style="width:100%;">
							<?php $row = $result_q->fetch_assoc(); 
        echo $row["quest_id"].". ".$row["quest_content"]; 
   ?>
						</div>
						<div class="flex" style="direction: rtl;">
							<input type="checkbox" id="star5-2" name="q[<?php echo $row[" quest_id "]; ?>]" value="5" /><label for="star5-2" title="Rocks!"><span>&#9733</span></label>
							<input type="checkbox" id="star4-2" name="q[<?php echo $row[" quest_id "]; ?>]" value="4" /><label for="star4-2" title="Pretty good"><span>&#9733</span></label>
							<input type="checkbox" id="star3-2" name="q[<?php echo $row[" quest_id "]; ?>]" value="3" /><label for="star3-2" title="Meh"><span>&#9733</span></label>
							<input type="checkbox" id="star2-2" name="q[<?php echo $row[" quest_id "]; ?>]" value="2" /><label for="star2-2" title="Kinda bad"><span>&#9733</span></label>
							<input type="checkbox" id="star1-2" name="q[<?php echo $row[" quest_id "]; ?>]" value="1" /><label for="star1-2" title="Sucks big time"><span>&#9733</span></label>
						</div>
					</fieldset>
					<fieldset class="rating flex">
						<div class="flex" style="width:100%;">
							<?php $row = $result_q->fetch_assoc(); 
        echo $row["quest_id"].". ".$row["quest_content"]; 
   ?>
						</div>
						<div class="flex" style="direction: rtl;">
							<input type="checkbox" id="star5-3" name="q[<?php echo $row[" quest_id "]; ?>]" value="5" /><label for="star5-3" title="Rocks!"><span>&#9733</span></label>
							<input type="checkbox" id="star4-3" name="q[<?php echo $row[" quest_id "]; ?>]" value="4" /><label for="star4-3" title="Pretty good"><span>&#9733</span></label>
							<input type="checkbox" id="star3-3" name="q[<?php echo $row[" quest_id "]; ?>]" value="3" /><label for="star3-3" title="Meh"><span>&#9733</span></label>
							<input type="checkbox" id="star2-3" name="q[<?php echo $row[" quest_id "]; ?>]" value="2" /><label for="star2-3" title="Kinda bad"><span>&#9733</span></label>
							<input type="checkbox" id="star1-3" name="q[<?php echo $row[" quest_id "]; ?>]" value="1" /><label for="star1-3" title="Sucks big time"><span>&#9733</span></label>
						</div>
					</fieldset>
					<fieldset class="rating flex">
						<div class="flex" style="width:100%;">
							<?php $row = $result_q->fetch_assoc(); 
        echo $row["quest_id"].". ".$row["quest_content"]; 
   ?>
						</div>
						<div class="flex" style="direction: rtl;">
							<input type="checkbox" id="star5-4" name="q[<?php echo $row[" quest_id "]; ?>]" value="5" /><label for="star5-4" title="Rocks!"><span>&#9733</span></label>
							<input type="checkbox" id="star4-4" name="q[<?php echo $row[" quest_id "]; ?>]" value="4" /><label for="star4-4" title="Pretty good"><span>&#9733</span></label>
							<input type="checkbox" id="star3-4" name="q[<?php echo $row[" quest_id "]; ?>]" value="3" /><label for="star3-4" title="Meh"><span>&#9733</span></label>
							<input type="checkbox" id="star2-4" name="q[<?php echo $row[" quest_id "]; ?>]" value="2" /><label for="star2-4" title="Kinda bad"><span>&#9733</span></label>
							<input type="checkbox" id="star1-4" name="q[<?php echo $row[" quest_id "]; ?>]" value="1" /><label for="star1-4" title="Sucks big time"><span>&#9733</span></label>
						</div>
					</fieldset>
					<fieldset class="rating flex">
						<div class="flex" style="width:100%;">
							<?php $row = $result_q->fetch_assoc(); 
        echo $row["quest_id"].". ".$row["quest_content"]; 
   ?>
						</div>
						<div class="flex" style="direction: rtl;">
							<input type="checkbox" id="star5-5" name="q[<?php echo $row[" quest_id "]; ?>]" value="5" /><label for="star5-5" title="Rocks!"><span>&#9733</span></label>
							<input type="checkbox" id="star4-5" name="q[<?php echo $row[" quest_id "]; ?>]" value="4" /><label for="star4-5" title="Pretty good"><span>&#9733</span></label>
							<input type="checkbox" id="star3-5" name="q[<?php echo $row[" quest_id "]; ?>]" value="3" /><label for="star3-5" title="Meh"><span>&#9733</span></label>
							<input type="checkbox" id="star2-5" name="q[<?php echo $row[" quest_id "]; ?>]" value="2" /><label for="star2-5" title="Kinda bad"><span>&#9733</span></label>
							<input type="checkbox" id="star1-5" name="q[<?php echo $row[" quest_id "]; ?>]" value="1" /><label for="star1-5" title="Sucks big time"><span>&#9733</span></label>
						</div>
					</fieldset>
					<fieldset class="rating flex">
						<div class="flex" style="width:100%;">
							<?php $row = $result_q->fetch_assoc(); 
        echo $row["quest_id"].". ".$row["quest_content"]; 
   ?>
						</div>
						<div class="flex" style="direction: rtl;">
							<input type="checkbox" id="star5-6" name="q[<?php echo $row[" quest_id "]; ?>]" value="5" /><label for="star5-6" title="Rocks!"><span>&#9733</span></label>
							<input type="checkbox" id="star4-6" name="q[<?php echo $row[" quest_id "]; ?>]" value="4" /><label for="star4-6" title="Pretty good"><span>&#9733</span></label>
							<input type="checkbox" id="star3-6" name="q[<?php echo $row[" quest_id "]; ?>]" value="3" /><label for="star3-6" title="Meh"><span>&#9733</span></label>
							<input type="checkbox" id="star2-6" name="q[<?php echo $row[" quest_id "]; ?>]" value="2" /><label for="star2-6" title="Kinda bad"><span>&#9733</span></label>
							<input type="checkbox" id="star1-6" name="q[<?php echo $row[" quest_id "]; ?>]" value="1" /><label for="star1-6" title="Sucks big time"><span>&#9733</span></label>
						</div>
					</fieldset>
					<fieldset class="rating flex">
						<div class="flex" style="width:100%;">
							<?php $row = $result_q->fetch_assoc(); 
        echo $row["quest_id"].". ".$row["quest_content"]; 
   ?>
						</div>
						<div class="flex" style="direction: rtl;">
							<input type="checkbox" id="star5-7" name="q[<?php echo $row[" quest_id "]; ?>]" value="5" /><label for="star5-7" title="Rocks!"><span>&#9733</span></label>
							<input type="checkbox" id="star4-7" name="q[<?php echo $row[" quest_id "]; ?>]" value="4" /><label for="star4-7" title="Pretty good"><span>&#9733</span></label>
							<input type="checkbox" id="star3-7" name="q[<?php echo $row[" quest_id "]; ?>]" value="3" /><label for="star3-7" title="Meh"><span>&#9733</span></label>
							<input type="checkbox" id="star2-7" name="q[<?php echo $row[" quest_id "]; ?>]" value="2" /><label for="star2-7" title="Kinda bad"><span>&#9733</span></label>
							<input type="checkbox" id="star1-7" name="q[<?php echo $row[" quest_id "]; ?>]" value="1" /><label for="star1-7" title="Sucks big time"><span>&#9733</span></label>
						</div>
					</fieldset>
					<fieldset class="rating flex">
						<div class="flex" style="width:100%;">
							<?php $row = $result_q->fetch_assoc(); 
        echo $row["quest_id"].". ".$row["quest_content"]; 
   ?>
						</div>
						<div class="flex" style="direction: rtl;">
							<input type="checkbox" id="star5-8" name="q[<?php echo $row[" quest_id "]; ?>]" value="5" /><label for="star5-8" title="Rocks!"><span>&#9733</span></label>
							<input type="checkbox" id="star4-8" name="q[<?php echo $row[" quest_id "]; ?>]" value="4" /><label for="star4-8" title="Pretty good"><span>&#9733</span></label>
							<input type="checkbox" id="star3-8" name="q[<?php echo $row[" quest_id "]; ?>]" value="3" /><label for="star3-8" title="Meh"><span>&#9733</span></label>
							<input type="checkbox" id="star2-8" name="q[<?php echo $row[" quest_id "]; ?>]" value="2" /><label for="star2-8" title="Kinda bad"><span>&#9733</span></label>
							<input type="checkbox" id="star1-8" name="q[<?php echo $row[" quest_id "]; ?>]" value="1" /><label for="star1-8" title="Sucks big time"><span>&#9733</span></label>
						</div>
					</fieldset>
					<fieldset class="rating flex">
						<div class="flex" style="width:100%;">
							<?php $row = $result_q->fetch_assoc(); 
        echo $row["quest_id"].". ".$row["quest_content"]; 
   ?>
						</div>
						<div class="flex" style="direction: rtl;">
							<input type="checkbox" id="star5-9" name="q[<?php echo $row[" quest_id "]; ?>]" value="5" /><label for="star5-9" title="Rocks!"><span>&#9733</span></label>
							<input type="checkbox" id="star4-9" name="q[<?php echo $row[" quest_id "]; ?>]" value="4" /><label for="star4-9" title="Pretty good"><span>&#9733</span></label>
							<input type="checkbox" id="star3-9" name="q[<?php echo $row[" quest_id "]; ?>]" value="3" /><label for="star3-9" title="Meh"><span>&#9733</span></label>
							<input type="checkbox" id="star2-9" name="q[<?php echo $row[" quest_id "]; ?>]" value="2" /><label for="star2-9" title="Kinda bad"><span>&#9733</span></label>
							<input type="checkbox" id="star1-9" name="q[<?php echo $row[" quest_id "]; ?>]" value="1" /><label for="star1-9" title="Sucks big time"><span>&#9733</span></label>
						</div>
					</fieldset>
					<fieldset class="rating flex">
						<div class="flex" style="width:100%;">
							<?php $row = $result_q->fetch_assoc(); 
        echo $row["quest_id"].". ".$row["quest_content"]; 
   ?>
						</div>
						<div class="flex" style="direction: rtl;">
							<input type="checkbox" id="star5-10" name="q[<?php echo $row[" quest_id "]; ?>]" value="5" /><label for="star5-10" title="Rocks!"><span>&#9733</span></label>
							<input type="checkbox" id="star4-10" name="q[<?php echo $row[" quest_id "]; ?>]" value="4" /><label for="star4-10" title="Pretty good"><span>&#9733</span></label>
							<input type="checkbox" id="star3-10" name="q[<?php echo $row[" quest_id "]; ?>]" value="3" /><label for="star3-10" title="Meh"><span>&#9733</span></label>
							<input type="checkbox" id="star2-10" name="q[<?php echo $row[" quest_id "]; ?>]" value="2" /><label for="star2-10" title="Kinda bad"><span>&#9733</span></label>
							<input type="checkbox" id="star1-10" name="q[<?php echo $row[" quest_id "]; ?>]" value="1" /><label for="star1-10" title="Sucks big time"><span>&#9733</span></label>
						</div>
					</fieldset>

					<?php

  }

?>

						<div style="text-align: right">
							<input type="submit" value="SUBMIT" class="button">
						</div>
			</form>
		</div>
	</div>
	<footer><a href="https://fuseorg.github.io/Feedie" class="link" target="_blank">Fuse Org</a></footer>
</body>

</html>
