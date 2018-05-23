<?php
     
     if( isset($_SESSION["st_username"]) AND isset($_SESSION["class"]) ){
     include('db_config.php');
     $flag = 0;
     $counter = 0;
     $sql = "SELECT te_username, sub_name, sub_code FROM teachersinfo WHERE class = '".$_SESSION["class"]."'";
     $result = $conn->query($sql);

     if($result->num_rows > 0) {
      while($row = $result->fetch_assoc()){
      	$sql1 = "SELECT st_username FROM feeds WHERE st_username = '".$_SESSION["st_username"]."' AND sub_code = '".$row["sub_code"]."' AND class = '".$_SESSION["class"]."'";
        $result1 = $conn->query($sql1);
        if( $result1->num_rows > 0 ){
          ++$flag;  
        }
        else{
          $flag = 0;
        }
        ++$counter;
      }
     }

     if($flag == $counter){
      $value = 1;
      $sql = "UPDATE students SET done = '".$value."' WHERE st_username ='".$_SESSION["st_username"]."' AND class = '".$_SESSION["class"]."'";
      $result = $conn->query($sql);
     }
   }
?>
