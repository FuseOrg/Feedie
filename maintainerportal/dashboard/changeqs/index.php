<html>
 <head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="../../../css.css">
	<link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet'>
  <link rel="icon" type="image/png" href="../../../images/logo.png">
  <title>Feedie | Change Questions</title>
 </head>
 <body>
  <div class="header">
		<div><a href="../"><img src="../../../images/back.svg" class="home"></a></div>
		<img src="../../../images/logo.png" class="logo"/>
		<div class="title">Feedie</div>
    <a href="../../../?logout=1"><div class="logout">Logout</div></a>
  </div>
  <div class="wrapper">
  <div class="container">
		<div class="heading">Change Questions</div>
    <form class="myform" action="" method="post">
			<textarea type="textarea" class="inputvalue" name="q1" placeholder="Question 1"></textarea>
			<textarea type="textarea" class="inputvalue" name="q2" placeholder="Question 2"></textarea>
			<textarea type="textarea" class="inputvalue" name="q3" placeholder="Question 3"></textarea>
			<textarea type="textarea" class="inputvalue" name="q4" placeholder="Question 4"></textarea>
			<textarea type="textarea" class="inputvalue" name="q5" placeholder="Question 5"></textarea>
			<textarea type="textarea" class="inputvalue" name="q6" placeholder="Question 6"></textarea>
			<textarea type="textarea" class="inputvalue" name="q7" placeholder="Question 7"></textarea>
			<textarea type="textarea" class="inputvalue" name="q8" placeholder="Question 8"></textarea>
			<textarea type="textarea" class="inputvalue" name="q9" placeholder="Question 9"></textarea>
			<textarea type="textarea" class="inputvalue" name="q10" placeholder="Question 10"></textarea>
    <div class="phpr" style="color:red">
    <label>
    <?php   
      
//			Jovi, put you code here to display whether the qustions changed or not.
//			create a table for storing questions with default questions.
//			if possible, change the above field's placeholder to default/current questions.
//			And if the input is left blank, dont rewrite the old ones.. just chnage the edited ones.

    ?>
    </label>
    </div>
    <div style="text-align: right">
    <input class="button" type="submit" value="Change Questions"/>
	  </div>
    </form>
  </div>
  </div>
  <footer><a href="https://fuse-org.firebaseapp.com" class="link" target="_blank">Fuse Org</a></footer>
 </body>
</html>
