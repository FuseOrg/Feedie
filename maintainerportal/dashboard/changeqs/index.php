<html>
 <head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="../../../css.css">
	<link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet'>
  <link rel="icon" type="image/png" href="../../../images/logo.svg">
  <title>Feedie | Change Questions</title>
 </head>
 <body>
  <div class="header">
		<div><a href="../"><img src="../../../images/back.svg" class="home"></a></div>
		<img src="../../../images/logo.svg" class="logo"/>
		<div class="title">Feedie</div>
    <a href="../../?logout=1"><div class="logout">Logout</div></a>
  </div>
  <?php
       session_start();

       if (!isset($_SESSION["ma_username"])){
         sleep(1);
         header('Location: ../');
       }
       
       if (!empty($_POST)){
        include('update.php');
       }

  ?>
  <div class="wrapper">
  <div class="container">
		<div class="heading">Change Questions</div>
    <form class="myform" action="" method="post">
      <?php
 
        include('../../../db_config.php');
        $sql = "SELECT quest_content FROM questions ORDER BY quest_id ASC";
        $result = $conn->query($sql);
        $i = 1;
        if ($result->num_rows > 0){
          while ($row = $result->fetch_assoc()){
      ?>
			<textarea type="textarea" class="inputvalue" name="q[]" placeholder="Enter Question <?php echo $i; ?>" value="<?php echo $i; ?>"><?php echo $row["quest_content"]; ++$i; ?></textarea>
			<!--<textarea type="textarea" class="inputvalue" name="q[2]" placeholder="Question 2"></textarea>
			<textarea type="textarea" class="inputvalue" name="q[3]" placeholder="Question 3"></textarea>
			<textarea type="textarea" class="inputvalue" name="q[4]" placeholder="Question 4"></textarea>
			<textarea type="textarea" class="inputvalue" name="q[5]" placeholder="Question 5"></textarea>
			<textarea type="textarea" class="inputvalue" name="q[6]" placeholder="Question 6"></textarea>
			<textarea type="textarea" class="inputvalue" name="q[7]" placeholder="Question 7"></textarea>
			<textarea type="textarea" class="inputvalue" name="q[8]" placeholder="Question 8"></textarea>
			<textarea type="textarea" class="inputvalue" name="q[9]" placeholder="Question 9"></textarea>
			<textarea type="textarea" class="inputvalue" name="q[10]" placeholder="Question 10"></textarea>-->
      <?php

         } //Closing while loop
        } //Closing if condn

      ?>
    <div class="phpr" style="color:red">
    <label>
    <?php   

      if ( !empty($_POST) ) {
        //To update contents of questions
        echo "Questions updated";
      }
      else{
        echo "Please fill all the question fields";
      }

    ?>
    </label>
    </div>
    <div style="text-align: right">
    <input class="button" type="submit" value="Change"/>
	  </div>
    </form>
  </div>
  </div>
  <footer><a href="https://fuse-org.firebaseapp.com" class="link" target="_blank">Fuse Org</a></footer>
 </body>
</html>
