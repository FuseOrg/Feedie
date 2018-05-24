<?php

  include('../../../../../db_config.php');  
  session_start();
  
  $sql = "SELECT te_username, sub_name FROM teachersinfo WHERE dept='".$_SESSION["dept"]."'";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
  	while($row = $result->fetch_assoc()){
     include('overall.php');
     
  	}
  }

?>