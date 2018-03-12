<?php
    include('../../db_config.php');
    $sql1 = "SELECT COUNT(*) FROM feeds WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
    $result1 = $conn->query($sql1);

    if($result1->num_rows > 0) {
      $row1 = $result1->fetch_assoc();
      $feed_no = $row1["COUNT(*)"]; 
    }

    $sql1 = "SELECT class_strength FROM teachersinfo WHERE te_username='".$_SESSION["te_username"]."' AND class='".$_SESSION["class"]."'";
    $result1 = $conn->query($sql1);
    if($result1->num_rows > 0) {
      $row1 = $result1->fetch_assoc();
      $tot_no = $row1["class_strength"]; 
    }
    
    //For cover
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
        }
    
    //For discuss
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
        }

    //For knowlegde
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
        }

    //For communicate
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
        }

    //For inspire
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
        }

    //For punctual
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
        }

    //For engage
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
        }

    //For prepare
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
        }
    
    //For guidance
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
        }

    //For available
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
        }

    //For total estimation
        $count = 0;
        $final = 0;
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