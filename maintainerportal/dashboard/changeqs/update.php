<?php
 
 include('../../../db_config.php');

 $q = $_POST['q'];
 $v = $_POST['v'];

 $i = 1;
 foreach( $q as $key ){
 	$sql = "UPDATE questions SET quest_content = '".$key."' WHERE quest_id = '".$i."'";
 	$result = $conn->query($sql);
 	++$i;
 }

 $i = 1;
 foreach ($v as $key) {
 	$sql = "UPDATE questions SET quest_value = '".$key."' WHERE quest_id = '".$i."'";
 	$result = $conn->query($sql);
 	++$i;
 }

?>
