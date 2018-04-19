<?php

  include('../../../db_config.php');
  
  $i = 1;
  $col_name = "overall".$i;
  do {
  	$col_name = "overall".$i;
    $sql_c = "SELECT ".$col_name." FROM teachersinfo";
    $result_c = $conn->query($sql_c);
    if($result_c->num_rows > 0){
      ++$i;
    }
  }while($result_c);

  $sql = "ALTER TABLE teachersinfo ADD ".$col_name." int(3)";
  $result = $conn->query($sql);

  //For updating values into new overall field
  if ($result){
    $sql1 = "SELECT te_username, class, sub_code, overall FROM teachersinfo";
    $result1 = $conn->query($sql1);
    if ($result1->num_rows > 0){
      while ($row1 = $result1->fetch_assoc()) {
        $new_overall = ($row1["overall"] / 100) * $_POST["newoverall"];
        $sql2 = "UPDATE teachersinfo SET ".$col_name." = '".$new_overall."' WHERE te_username = '".$row1["te_username"]."' AND class = '".$row1["class"]."' AND sub_code = '".$row1["sub_code"]."'";
        $result2 = $conn->query($sql2);
      }
    }
  }
?>