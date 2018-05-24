<?php
 
 include('../../../db_config.php');

 $r = $_POST['r'];

 $i = 1;
 foreach( $r as $key ){
 	$sql = "UPDATE ratings SET r_value = '".$key."' WHERE r_no = '".$i."'";
 	$result = $conn->query($sql);
 	++$i;
 }

?>