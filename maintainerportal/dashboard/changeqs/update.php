<?php
 
 include('../../../db_config.php');

 $q = $_POST['q'];
 $i = 1;
 foreach( $q as $key ){
 	$sql = "UPDATE questions SET quest_content = '".$key."' WHERE quest_id = '".$i."'";
 	$result = $conn->query($sql);
 	++$i;
 }
 
?>