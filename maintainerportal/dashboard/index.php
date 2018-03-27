<html>
 <head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="../../css.css">
	<link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet'>
   <link rel="icon" type="image/png" href="../../images/logo.png">
   <title>Feedie | Admin Dashboard</title>
 </head>
 <body>
  <div class="header">
		<div><a href="../"><img src="../../images/home.svg" class="home"></a></div>
		<img src="../../images/logo.png" class="logo"/>
		<div class="title">Feedie</div>
    <a href="../?logout=1"><div class="logout">Logout</div></a>
  </div>
  
    
<!--    Below code is from student login.
   use admin table to display name ie: principal.
   link that table with the below code-->
  
  
  <div class="details">
  Hi, 
  	  <?php
  	   session_start();

       if (!isset($_SESSION["ma_username"])){
         sleep(1);
         header('Location: ../');
       }

  	   echo $_SESSION["ma_username"];
  	  ?>
<!--
     
     Change password feature is currently disabled. will be provide in future.
      <div class="changepw">
        <a href="changepw" class="link">Change password</a>
      </div>
-->
  </div>
  <div class="page">
  <div class="container">
		<div class="heading">Admin Dashboard</div>
		<a href="changeqs" class="button">Change qusetions</a>
  </div>
  </div>
  <footer><a href="https://fuse-org.firebaseapp.com" class="link" target="_blank">Fuse Org</a></footer>
</body>
</html>
