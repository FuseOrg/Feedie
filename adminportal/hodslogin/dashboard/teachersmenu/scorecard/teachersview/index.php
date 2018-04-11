<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="../../../../../../css.css">
	<link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet'>
  <link rel="icon" type="image/png" href="../../../../../../images/favicon.svg">
	<title>Feedie | View Feedback</title>
</head>
<body>
  <div class="header">
		<div><a href="../../../"><img src="../../../../../../images/back.svg" class="home"></a></div>
		<img src="../../../../../../images/logo.svg" class="logo"/>
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

    $max = 0;
    $i = 1;
    $sql1 = "SELECT r_value FROM ratings ORDER BY r_no";
    $result1 = $conn->query($sql1);
    if($result1->num_rows > 0) {
      while($row1 = $result1->fetch_assoc()){
        $mark[$i] = $row1["r_value"];
        if( $max < $row1["r_value"] ){
          $max = $row1["r_value"];
        } 
        ++$i;
      }
    }
    $max = $max*$feed_no;

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
  
<?php

  include('../../../../../../db_config.php');
  $sql_q = "SELECT quest_id, quest_content FROM questions ORDER BY quest_id ASC";
  $result_q = $conn->query($sql_q);
  if ( $result_q->num_rows > 0 ){
    while($row_q = $result_q->fetch_assoc()){


  ?>

  <div class="row">
    <?php  
        echo $row_q["quest_id"].". ".$row_q["quest_content"]; 
        $q_no = "q".$row_q["quest_id"];
    ?>
  </div>
  <div class="row">
   <div class="side">
    <div>5 stars</div>
   </div>
  <div class="middle">
    <div class="bar-container">
      <div class="bar-5" style="width:
      <?php
        $sql = "SELECT ".$q_no." FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."' AND sub_code='".$_SESSION["sub_code"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row[$q_no] == 5){
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
        $sql = "SELECT ".$q_no." FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."' AND sub_code='".$_SESSION["sub_code"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row[$q_no] == 4){
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
        $sql = "SELECT ".$q_no." FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."' AND sub_code='".$_SESSION["sub_code"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row[$q_no] == 3){
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
        $sql = "SELECT ".$q_no." FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."' AND sub_code='".$_SESSION["sub_code"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row[$q_no] == 2){
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
        $sql = "SELECT ".$q_no." FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."' AND sub_code='".$_SESSION["sub_code"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row[$q_no] == 1){
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
        $sql = "SELECT ".$q_no." FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."' AND sub_code='".$_SESSION["sub_code"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row[$q_no] == 5){
              $count = $count+$mark[5];
            } 
            if($row[$q_no] == 4){
              $count = $count+$mark[4];
            } 
            if($row[$q_no] == 3){
              $count = $count+$mark[3];
            } 
            if($row[$q_no] == 2){
              $count = $count+$mark[2];
            } 
            if($row[$q_no] == 1){
              $count = $count+$mark[1];
            } 
          }
          $final = ($count/$max)*100;
          $pt[$row_q["quest_id"]] = $final;
          echo $final."%";
        }
      ?>
      ">
      </div>
    </div>
  </div>
  <div class="side right">
   <?php echo $final; ?>%
  </div>
 </div>

  <?php
    } //while ends
  }   //if ends

  ?>

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
        $count = $pt[1] + $pt[2] + $pt[3] + $pt[4] + $pt[5] + $pt[6] + $pt[7] + $pt[8] + $pt[9] + $pt[10]; 
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
  <footer><a href="https://fuseorg.github.io/Feedie" class="link" target="_blank">Fuse Org</a></footer>
</body>
</html>
