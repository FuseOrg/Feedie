<?php
    include('../../db_config.php');
    $sql1 = "SELECT COUNT(*) FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."' AND sub_code='".$_SESSION["sub_code"]."'";
    $result1 = $conn->query($sql1);

    if($result1->num_rows > 0) {
      $row1 = $result1->fetch_assoc();
      $feed_no = $row1["COUNT(*)"]; 
    }

    $sql1 = "SELECT class_strength FROM teachersinfo WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."' AND sub_code='".$_SESSION["sub_code"]."'";
    $result1 = $conn->query($sql1);
    if($result1->num_rows > 0) {
      $row1 = $result1->fetch_assoc();
      $tot_no = $row1["class_strength"]; 
    }
    
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

    //For cover
        $sql = "SELECT q1 FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."' AND sub_code='".$_SESSION["sub_code"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["q1"] == 5){
              $count = $count+$mark[5];
            } 
            if($row["q1"] == 4){
              $count = $count+$mark[4];
            } 
            if($row["q1"] == 3){
              $count = $count+$mark[3];
            } 
            if($row["q1"] == 2){
              $count = $count+$mark[2];
            } 
            if($row["q1"] == 1){
              $count = $count+$mark[1];
            } 
          }
          $final = ($count/$max)*100;
          $pt1 = $final;
        }
    
    //For discuss
        $sql = "SELECT q2 FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."' AND sub_code='".$_SESSION["sub_code"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["q2"] == 5){
              $count = $count+$mark[5];
            } 
            if($row["q2"] == 4){
              $count = $count+$mark[4];
            } 
            if($row["q2"] == 3){
              $count = $count+$mark[3];
            } 
            if($row["q2"] == 2){
              $count = $count+$mark[2];
            } 
            if($row["q2"] == 1){
              $count = $count+$mark[1];
            } 
          }
          $final = ($count/$max)*100;
          $pt2 = $final;
        }

    //For knowlegde
        $sql = "SELECT q3 FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."' AND sub_code='".$_SESSION["sub_code"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["q3"] == 5){
              $count = $count+$mark[5];
            } 
            if($row["q3"] == 4){
              $count = $count+$mark[4];
            } 
            if($row["q3"] == 3){
              $count = $count+$mark[3];
            } 
            if($row["q3"] == 2){
              $count = $count+$mark[2];
            } 
            if($row["q3"] == 1){
              $count = $count+$mark[1];
            } 
          }
          $final = ($count/$max)*100;
          $pt3 = $final;
        }

    //For communicate
        $sql = "SELECT q4 FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."' AND sub_code='".$_SESSION["sub_code"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["q4"] == 5){
              $count = $count+$mark[5];
            } 
            if($row["q4"] == 4){
              $count = $count+$mark[4];
            } 
            if($row["q4"] == 3){
              $count = $count+$mark[3];
            } 
            if($row["q4"] == 2){
              $count = $count+$mark[2];
            } 
            if($row["q4"] == 1){
              $count = $count+$mark[1];
            } 
          }
          $final = ($count/$max)*100;
          $pt4 = $final;
        }

    //For inspire
        $sql = "SELECT q5 FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."' AND sub_code='".$_SESSION["sub_code"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["q5"] == 5){
              $count = $count+$mark[5];
            } 
            if($row["q5"] == 4){
              $count = $count+$mark[4];
            } 
            if($row["q5"] == 3){
              $count = $count+$mark[3];
            } 
            if($row["q5"] == 2){
              $count = $count+$mark[2];
            } 
            if($row["q5"] == 1){
              $count = $count+$mark[1];
            } 
          }
          $final = ($count/$max)*100;
          $pt5 = $final;
        }

    //For punctual
     $sql = "SELECT q6 FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."' AND sub_code='".$_SESSION["sub_code"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["q6"] == 5){
              $count = $count+$mark[5];
            } 
            if($row["q6"] == 4){
              $count = $count+$mark[4];
            } 
            if($row["q6"] == 3){
              $count = $count+$mark[3];
            } 
            if($row["q6"] == 2){
              $count = $count+$mark[2];
            } 
            if($row["q6"] == 1){
              $count = $count+$mark[1];
            } 
          }
          $final = ($count/$max)*100;
          $pt6 = $final;
        }

    //For engage
        $sql = "SELECT q7 FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."' AND sub_code='".$_SESSION["sub_code"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["q7"] == 5){
              $count = $count+$mark[5];
            } 
            if($row["q7"] == 4){
              $count = $count+$mark[4];
            } 
            if($row["q7"] == 3){
              $count = $count+$mark[3];
            } 
            if($row["q7"] == 2){
              $count = $count+$mark[2];
            } 
            if($row["q7"] == 1){
              $count = $count+$mark[1];
            } 
          }
          $final = ($count/$max)*100;
          $pt7 = $final;
        }

    //For prepare
        $sql = "SELECT q8 FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."' AND sub_code='".$_SESSION["sub_code"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["q8"] == 5){
              $count = $count+$mark[5];
            } 
            if($row["q8"] == 4){
              $count = $count+$mark[4];
            } 
            if($row["q8"] == 3){
              $count = $count+$mark[3];
            } 
            if($row["q8"] == 2){
              $count = $count+$mark[2];
            } 
            if($row["q8"] == 1){
              $count = $count+$mark[1];
            } 
          }
          $final = ($count/$max)*100;
          $pt8 = $final;
        }
    
    //For guidance
        $sql = "SELECT q9 FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."' AND sub_code='".$_SESSION["sub_code"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["q9"] == 5){
              $count = $count+$mark[5];
            } 
            if($row["q9"] == 4){
              $count = $count+$mark[4];
            } 
            if($row["q9"] == 3){
              $count = $count+$mark[3];
            } 
            if($row["q9"] == 2){
              $count = $count+$mark[2];
            } 
            if($row["q9"] == 1){
              $count = $count+$mark[1];
            } 
          }
          $final = ($count/$max)*100;
          $pt9 = $final;
        }

    //For available
        $sql = "SELECT q10 FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."' AND sub_code='".$_SESSION["sub_code"]."'";
        $result = $conn->query($sql);
        $count = 0;
        $final = 0;
        if($result->num_rows > 0) {
          while($row = $result->fetch_assoc()){
            if($row["q10"] == 5){
              $count = $count+$mark[5];
            } 
            if($row["q10"] == 4){
              $count = $count+$mark[4];
            } 
            if($row["q10"] == 3){
              $count = $count+$mark[3];
            } 
            if($row["q10"] == 2){
              $count = $count+$mark[2];
            } 
            if($row["q10"] == 1){
              $count = $count+$mark[1];
            } 
          }
          $final = ($count/$max)*100;
          $pt10 = $final;
        }

    //For total estimation
        $count = 0;
        $final = 0;

        $sql = "SELECT quest_id, quest_value FROM questions ORDER BY quest_id ASC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0){
          while ($row = $result->fetch_assoc()) {
            
          }
        }

        $count = $pt1 + $pt2 + $pt3 + $pt4 + $pt5 + $pt6 + $pt7 + $pt8 + $pt9 + $pt10; 
          $final = ($count/1000)*100;

    /*
    $sql = "SELECT overall FROM teachersinfo WHERE te_username = '".$_SESSION["te_username"]."' AND class = '".$_SESSION["class"]."' AND sub_code = '".$_SESSION["sub_code"]."'";
    $result = $conn->query($sql);
    if($result_check->num_rows > 0){
      */
      $sql1 = "UPDATE teachersinfo SET overall = '".$final."' WHERE te_username = '".$_SESSION["te_username"]."' AND class = '".$_SESSION["class"]."' AND sub_code = '".$_SESSION["sub_code"]."'";
      $result1 = $conn->query($sql1);
      /*
      if($result1){
        echo "-->Overall updated ";
      }
      */
    

?>
