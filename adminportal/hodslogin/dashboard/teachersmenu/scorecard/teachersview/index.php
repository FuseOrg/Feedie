<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="../../../../../../css.css">
	<link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet'>
  <link rel="icon" type="image/png" href="../../../../../../images/logo.png">
	<title>Feedie | View Feedback</title>
</head>
<body>
  <div class="header">
		<div><a href="../../../"><img src="../../../../../../images/back.svg" class="home"></a></div>
		<img src="../../../../../../images/logo.png" class="logo"/>
		<div class="title">Feedie</div>
    <a href="../../../../../?logout=1"><div class="logout">Logout</div></a>
  </div>
  <div class="details">Subject name:
  <?php
    session_start();

    if (!isset($_SESSION["hod_username"])){
        sleep(1);
        header('Location: ../../../../../');
    }

    echo $_SESSION["sub_name"];
    include('../../../../../../db_config.php');
    $sql1 = "SELECT COUNT(*) FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
    $result1 = $conn->query($sql1);

    if($result1->num_rows > 0) {
      $row1 = $result1->fetch_assoc();
      echo "<br>No. of feedbacks applied : ".$row1["COUNT(*)"];
      $feed_no = $row1["COUNT(*)"]; 
    }

    $sql1 = "SELECT class_strength FROM teachersinfo WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
    $result1 = $conn->query($sql1);
    if($result1->num_rows > 0) {
      $row1 = $result1->fetch_assoc();
      echo "<br>No. of total students : ".$row1["class_strength"];
      $tot_no = $row1["class_strength"]; 
    }
    
    echo "<br>No. remaining feedbacks : ".($tot_no - $feed_no);
  ?>
  </div>
  <div class="page">
	<div class="container">
		<div class="phpr">
		<?php
        echo "Guidlines:<br>
	      &#9733 = Poor<br>
	      &#9733 &#9733 = Need improvements<br>
	      &#9733 &#9733 &#9733 = Average<br>
	      &#9733 &#9733 &#9733 &#9733 = Good<br>
	      &#9733 &#9733 &#9733 &#9733 &#9733 = Excellent";
		?>
		</div>
  <div class="row">1. The teacher covers the entire syllabus</div>
  <div class="row">
   <div class="side">
    <div>5 stars</div>
   </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5" style="width:
      <?php
        $sql = "SELECT cover FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["cover"] == 5){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">  
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

  <div class="side">
    <div>4 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4" style="width:
      <?php
        $sql = "SELECT cover FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["cover"] == 4){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>
  
  <div class="side">
    <div>3 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3" style="width:
      <?php
        $sql = "SELECT cover FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["cover"] == 3){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">  
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>
   
  <div class="side">
    <div>2 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2" style="width:
      <?php
        $sql = "SELECT cover FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["cover"] == 2){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1" style="width: 
      <?php
        $sql = "SELECT cover FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["cover"] == 1){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>
  
  <!--Total estimation-->
 <div class="side">
    <div>Total</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5" style="width:
      <?php
        $sql = "SELECT cover FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $max = $feed_no*5;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["cover"] == 5){
              $count = $count+5;
            } 
            if($row["cover"] == 4){
              $count = $count+4;
            } 
            if($row["cover"] == 3){
              $count = $count+3;
            } 
            if($row["cover"] == 2){
              $count = $count+2;
            } 
            if($row["cover"] == 1){
              $count = $count+1;
            } 
          }
          $final = ($count/$max)*100;
          $pt1 = $final;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $final; ?>
  </div>
 </div>

<div class="row">2. The teacher discusses topics in detail.</div>
  <div class="row">
   <div class="side">
    <div>5 stars</div>
   </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5" style="width:
      <?php
        $sql = "SELECT discuss FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["discuss"] == 5){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">  
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

  <div class="side">
    <div>4 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4" style="width:
      <?php
        $sql = "SELECT discuss FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["discuss"] == 4){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>
  
  <div class="side">
    <div>3 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3" style="width:
      <?php
        $sql = "SELECT discuss FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["discuss"] == 3){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">  
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>
   
  <div class="side">
    <div>2 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2" style="width:
      <?php
        $sql = "SELECT discuss FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["discuss"] == 2){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1" style="width: 
      <?php
        $sql = "SELECT discuss FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["discuss"] == 1){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

    <!--Total estimation-->
 <div class="side">
    <div>Total</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5" style="width:
      <?php
        $sql = "SELECT discuss FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $max = $feed_no*5;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["discuss"] == 5){
              $count = $count+5;
            } 
            if($row["discuss"] == 4){
              $count = $count+4;
            } 
            if($row["discuss"] == 3){
              $count = $count+3;
            } 
            if($row["discuss"] == 2){
              $count = $count+2;
            } 
            if($row["discuss"] == 1){
              $count = $count+1;
            } 
          }
          $final = ($count/$max)*100;
          $pt2 = $final;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $final; ?>
  </div>
 </div>

<div class="row">3. The teacher possesses deep knowledge of the subject taught</div>
  <div class="row">
   <div class="side">
    <div>5 stars</div>
   </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5" style="width:
      <?php
        $sql = "SELECT knowledge FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["knowledge"] == 5){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">  
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

  <div class="side">
    <div>4 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4" style="width:
      <?php
        $sql = "SELECT knowledge FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["knowledge"] == 4){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>
  
  <div class="side">
    <div>3 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3" style="width:
      <?php
        $sql = "SELECT knowledge FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["knowledge"] == 3){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">  
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>
   
  <div class="side">
    <div>2 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2" style="width:
      <?php
        $sql = "SELECT knowledge FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["knowledge"] == 2){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1" style="width: 
      <?php
        $sql = "SELECT knowledge FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["knowledge"] == 1){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

    <!--Total estimation-->
 <div class="side">
    <div>Total</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5" style="width:
      <?php
        $sql = "SELECT knowledge FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $max = $feed_no*5;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["knowledge"] == 5){
              $count = $count+5;
            } 
            if($row["knowledge"] == 4){
              $count = $count+4;
            } 
            if($row["knowledge"] == 3){
              $count = $count+3;
            } 
            if($row["knowledge"] == 2){
              $count = $count+2;
            } 
            if($row["knowledge"] == 1){
              $count = $count+1;
            } 
          }
          $final = ($count/$max)*100;
          $pt3 = $final;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $final; ?>
  </div>
 </div>

<div class="row">4. The teacher communicate clearly</div>
  <div class="row">
   <div class="side">
    <div>5 stars</div>
   </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5" style="width:
      <?php
        $sql = "SELECT communicate FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["communicate"] == 5){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">  
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

  <div class="side">
    <div>4 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4" style="width:
      <?php
        $sql = "SELECT communicate FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["communicate"] == 4){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>
  
  <div class="side">
    <div>3 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3" style="width:
      <?php
        $sql = "SELECT communicate FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["communicate"] == 3){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">  
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>
   
  <div class="side">
    <div>2 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2" style="width:
      <?php
        $sql = "SELECT communicate FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["communicate"] == 2){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1" style="width: 
      <?php
        $sql = "SELECT communicate FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["communicate"] == 1){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

    <!--Total estimation-->
 <div class="side">
    <div>Total</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5" style="width:
      <?php
        $sql = "SELECT communicate FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $max = $feed_no*5;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["communicate"] == 5){
              $count = $count+5;
            } 
            if($row["communicate"] == 4){
              $count = $count+4;
            } 
            if($row["communicate"] == 3){
              $count = $count+3;
            } 
            if($row["communicate"] == 2){
              $count = $count+2;
            } 
            if($row["communicate"] == 1){
              $count = $count+1;
            } 
          }
          $final = ($count/$max)*100;
          $pt4 = $final;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $final; ?>
  </div>
 </div>

<div class="row">5. The teacher inspires me by his/her knowledge in the subject</div>
  <div class="row">
   <div class="side">
    <div>5 stars</div>
   </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5" style="width:
      <?php
        $sql = "SELECT inspire FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["inspire"] == 5){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">  
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

  <div class="side">
    <div>4 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4" style="width:
      <?php
        $sql = "SELECT inspire FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["inspire"] == 4){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>
  
  <div class="side">
    <div>3 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3" style="width:
      <?php
        $sql = "SELECT inspire FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["inspire"] == 3){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">  
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>
   
  <div class="side">
    <div>2 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2" style="width:
      <?php
        $sql = "SELECT inspire FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["inspire"] == 2){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1" style="width: 
      <?php
        $sql = "SELECT inspire FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["inspire"] == 1){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

    <!--Total estimation-->
 <div class="side">
    <div>Total</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5" style="width:
      <?php
        $sql = "SELECT inspire FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $max = $feed_no*5;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["inspire"] == 5){
              $count = $count+5;
            } 
            if($row["inspire"] == 4){
              $count = $count+4;
            } 
            if($row["inspire"] == 3){
              $count = $count+3;
            } 
            if($row["inspire"] == 2){
              $count = $count+2;
            } 
            if($row["inspire"] == 1){
              $count = $count+1;
            } 
          }
          $final = ($count/$max)*100;
          $pt5 = $final;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $final; ?>
  </div>
 </div>

<div class="row">6. The teacher is punctual to the class</div>
  <div class="row">
   <div class="side">
    <div>5 stars</div>
   </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5" style="width:
      <?php
        $sql = "SELECT punctual FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["punctual"] == 5){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">  
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

  <div class="side">
    <div>4 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4" style="width:
      <?php
        $sql = "SELECT punctual FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["punctual"] == 4){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>
  
  <div class="side">
    <div>3 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3" style="width:
      <?php
        $sql = "SELECT punctual FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["punctual"] == 3){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">  
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>
   
  <div class="side">
    <div>2 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2" style="width:
      <?php
        $sql = "SELECT punctual FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["punctual"] == 2){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1" style="width: 
      <?php
        $sql = "SELECT punctual FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["punctual"] == 1){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

    <!--Total estimation-->
 <div class="side">
    <div>Total</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5" style="width:
      <?php
        $sql = "SELECT punctual FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $max = $feed_no*5;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["punctual"] == 5){
              $count = $count+5;
            } 
            if($row["punctual"] == 4){
              $count = $count+4;
            } 
            if($row["punctual"] == 3){
              $count = $count+3;
            } 
            if($row["punctual"] == 2){
              $count = $count+2;
            } 
            if($row["punctual"] == 1){
              $count = $count+1;
            } 
          }
          $final = ($count/$max)*100;
          $pt6 = $final;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $final; ?>
  </div>
 </div>

<div class="row">7. The teacher engages the class for the full duration and completes the course in time</div>
  <div class="row">
   <div class="side">
    <div>5 stars</div>
   </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5" style="width:
      <?php
        $sql = "SELECT engage FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["engage"] == 5){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">  
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

  <div class="side">
    <div>4 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4" style="width:
      <?php
        $sql = "SELECT engage FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["engage"] == 4){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>
  
  <div class="side">
    <div>3 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3" style="width:
      <?php
        $sql = "SELECT engage FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["engage"] == 3){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">  
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>
   
  <div class="side">
    <div>2 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2" style="width:
      <?php
        $sql = "SELECT engage FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["engage"] == 2){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1" style="width: 
      <?php
        $sql = "SELECT engage FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["engage"] == 1){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

    <!--Total estimation-->
 <div class="side">
    <div>Total</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5" style="width:
      <?php
        $sql = "SELECT engage FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $max = $feed_no*5;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["engage"] == 5){
              $count = $count+5;
            } 
            if($row["engage"] == 4){
              $count = $count+4;
            } 
            if($row["engage"] == 3){
              $count = $count+3;
            } 
            if($row["engage"] == 2){
              $count = $count+2;
            } 
            if($row["engage"] == 1){
              $count = $count+1;
            } 
          }
          $final = ($count/$max)*100;
          $pt7 = $final;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $final; ?>
  </div>
 </div>

<div class="row">8. The teacher comes fully prepared for the class</div>
  <div class="row">
   <div class="side">
    <div>5 stars</div>
   </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5" style="width:
      <?php
        $sql = "SELECT prepare FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["prepare"] == 5){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">  
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

  <div class="side">
    <div>4 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4" style="width:
      <?php
        $sql = "SELECT prepare FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["prepare"] == 4){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>
  
  <div class="side">
    <div>3 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3" style="width:
      <?php
        $sql = "SELECT prepare FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["prepare"] == 3){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">  
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>
   
  <div class="side">
    <div>2 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2" style="width:
      <?php
        $sql = "SELECT prepare FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["prepare"] == 2){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1" style="width: 
      <?php
        $sql = "SELECT prepare FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["prepare"] == 1){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

    <!--Total estimation-->
 <div class="side">
    <div>Total</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5" style="width:
      <?php
        $sql = "SELECT prepare FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $max = $feed_no*5;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["prepare"] == 5){
              $count = $count+5;
            } 
            if($row["prepare"] == 4){
              $count = $count+4;
            } 
            if($row["prepare"] == 3){
              $count = $count+3;
            } 
            if($row["prepare"] == 2){
              $count = $count+2;
            } 
            if($row["prepare"] == 1){
              $count = $count+1;
            } 
          }
          $final = ($count/$max)*100;
          $pt8 = $final;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $final; ?>
  </div>
 </div>

 <div class="row">9. The teacher provide guidance counseling in academic and non-academic matters in/out side the class</div>
  <div class="row">
   <div class="side">
    <div>5 stars</div>
   </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5" style="width:
      <?php
        $sql = "SELECT guidance FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["guidance"] == 5){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">  
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

  <div class="side">
    <div>4 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4" style="width:
      <?php
        $sql = "SELECT guidance FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["guidance"] == 4){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>
  
  <div class="side">
    <div>3 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3" style="width:
      <?php
        $sql = "SELECT guidance FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["guidance"] == 3){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">  
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>
   
  <div class="side">
    <div>2 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2" style="width:
      <?php
        $sql = "SELECT guidance FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["guidance"] == 2){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1" style="width: 
      <?php
        $sql = "SELECT guidance FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["guidance"] == 1){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

    <!--Total estimation-->
 <div class="side">
    <div>Total</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5" style="width:
      <?php
        $sql = "SELECT guidance FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $max = $feed_no*5;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["guidance"] == 5){
              $count = $count+5;
            } 
            if($row["guidance"] == 4){
              $count = $count+4;
            } 
            if($row["guidance"] == 3){
              $count = $count+3;
            } 
            if($row["guidance"] == 2){
              $count = $count+2;
            } 
            if($row["guidance"] == 1){
              $count = $count+1;
            } 
          }
          $final = ($count/$max)*100;
          $pt9 = $final;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $final; ?>
  </div>
 </div>

 <div class="row">10. The teacher was available to answer questions in office hours</div>
  <div class="row">
   <div class="side">
    <div>5 stars</div>
   </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5" style="width:
      <?php
        $sql = "SELECT available FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["available"] == 5){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">  
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

  <div class="side">
    <div>4 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-4" style="width:
      <?php
        $sql = "SELECT available FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["available"] == 4){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>
  
  <div class="side">
    <div>3 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-3" style="width:
      <?php
        $sql = "SELECT available FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["available"] == 3){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">  
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>
   
  <div class="side">
    <div>2 stars</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-2" style="width:
      <?php
        $sql = "SELECT available FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["available"] == 2){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

  <div class="side">
    <div>1 star</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1" style="width: 
      <?php
        $sql = "SELECT available FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["available"] == 1){
              $count = $count+1;
            } 
          }
          $final = ($count/$feed_no)*100;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $count; ?>
  </div>

    <!--Total estimation-->
 <div class="side">
    <div>Total</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5" style="width:
      <?php
        $sql = "SELECT available FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $max = $feed_no*5;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["available"] == 5){
              $count = $count+5;
            } 
            if($row["available"] == 4){
              $count = $count+4;
            } 
            if($row["available"] == 3){
              $count = $count+3;
            } 
            if($row["available"] == 2){
              $count = $count+2;
            } 
            if($row["available"] == 1){
              $count = $count+1;
            } 
          }
          $final = ($count/$max)*100;
          $pt10 = $final;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $final; ?>
  </div>
 </div>

 <div class="row">
    <div class="side">
    <div>Grand Total</div>
  </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-1" style="width: 
      <?php
        $count = 0;
        $final = 0;
        $count = $pt1 + $pt2 + $pt3 + $pt4 + $pt5 + $pt6 + $pt7 + $pt8 + $pt9 + $pt10; 
          $final = ($count/1000)*100;
          echo $final."%";
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo round($final); ?>%
  </div>
 </div>
</div>
</div>
  <footer>&copy;<a href="https://fuse-org.firebaseapp.com" class="link" target="_blank">Fuse Org</a></footer>
</body>
</html>
