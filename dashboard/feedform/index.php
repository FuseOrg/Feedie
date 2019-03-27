<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<script src="../../scripts/material.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="../../styles/material.min.css">
	<link rel="stylesheet" href="../../styles/main.css">
	<link rel="icon" type="image/png" href="../../images/logo.png">
	<title>Feedie | Feedback</title>
</head>

<body class="mdl-demo mdl-color--grey-50 mdl-color-text--grey-900 mdl-base">
	<?php
		session_start();
		if (!isset($_SESSION["st_username"])){
			sleep(1);
			header('Location: ../../');
		}
	?>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
				<span class="mdl-layout-title">Feedie</span>
				<div class="mdl-layout-spacer"></div>
				<button id="more" class="mdl-button mdl-js-button mdl-button--icon">
					<i class="material-icons">more_vert</i>
				</button>
				<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="more">
					<a href="../../?logout=1">
						<li class="mdl-menu__item">
							<i class="material-icons" role="presentation">exit_to_app</i>
							Logout
						</li>
					</a>
					<a href="../changepw">
						<li class="mdl-menu__item">
							<i class="material-icons" role="presentation">vpn_key</i>
							Change password
						</li>
					</a>
				</ul>
			</div>
			<div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
				<a href="#overview" class="mdl-layout__tab is-active">
					<?php
     $_SESSION["sub_name"] = $_GET["sub_name"];
     echo $_GET["sub_name"];
		echo " &middot; ";
    ?>
					<?php
    include('../../db_config.php');
    $sql1 = "SELECT sub_code, te_username FROM teachersinfo WHERE  sub_name='".$_GET["sub_name"]."' AND class='".$_SESSION["class"]."'";
    $result1 = $conn->query($sql1);
    if($result1->num_rows > 0){
      $row = $result1->fetch_assoc();
      $_SESSION["te_username"] = $row["te_username"];
      $_SESSION["sub_code"] = $row["sub_code"];
    }
    echo $_SESSION["te_username"];
    ?>
				</a>
				<a href="#account" class="mdl-layout__tab">
					<?php
						session_start();
						if (!isset($_SESSION["st_username"])){
						 sleep(1);
						 header('Location: ../');
						}
						echo $_SESSION["st_username"];
						echo " &middot; ";
						echo $_SESSION["class"];
					?>
				</a>
			</div>
		</header>
		<main class="mdl-layout__content">
			<div class="mdl-layout__tab-panel is-active" id="overview">
				<section class="section--center mdl-card mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="mdl-card__supporting-text mdl-cell mdl-cell--12-col mdl-grid mdl-grid--no-spacing">
						<h4 class="mdl-cell mdl-cell--12-col">Feedback</h4>
						<div class="mdl-cell mdl-cell--12-col">
							<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "feedie_base";
    $error = false;
    $counter = 0;
    if ( isset($_POST['q']) ){
      $q = $_POST['q'];
      foreach($q as $field) {
        ++$counter;
      }
    }
    if($counter != 10){
      $error = true;
    }
    if ( !$error ){
            // Create connection
              $conn = new mysqli($servername, $username, $password, $dbname);
              $q = $_POST['q'];
              $i = 1;
              foreach( $q as $key ){
                $qf[$i] = $key;
                ++$i;
              }
              //For checking whether user have already submit a feed on this teacher
              $sql_check = "SELECT st_username FROM feeds WHERE st_username = '".$_SESSION["st_username"]."' AND te_username = '".$_SESSION["te_username"]."' AND sub_code='".$_SESSION["sub_code"]."' AND class = '".$_SESSION["class"]."'";
              $result_check = $conn->query($sql_check);
              if($result_check->num_rows > 0){
                $sql = "UPDATE feeds SET q1='".$qf[1]."', q2='".$qf[2]."', q3='".$qf[3]."', q4='".$qf[4]."', q5='".$qf[5]."', q6='".$qf[6]."', q7='".$qf[7]."', q8='".$qf[8]."', q9='".$qf[9]."', q10='".$qf[10]."' WHERE st_username='".$_SESSION["st_username"]."' AND te_username='".$_SESSION["te_username"]."' AND sub_code='".$_SESSION["sub_code"]."' AND class = '".$_SESSION["class"]."'";
                $result = $conn->query($sql);
                if($result){
                  //echo "Successful. ";
                  include('overall.php');
                }
                echo "Response have been updated";
                $_SESSION["toast_type"]="update";
                sleep(1);
                header('Location: ../');
              }
              else{
                $sql1 = "UPDATE teachersinfo SET feed_applied = feed_applied + 1 WHERE te_username = '".$_SESSION["te_username"]."' AND class = '".$_SESSION["class"]."' AND sub_code = '".$_SESSION["sub_code"]."'";
                $result1 = $conn->query($sql1);
                /*
                if($result1){
                  echo "Updated";
                }
                */
                $sql = "INSERT INTO feeds (st_username, te_username, sub_code, sub_name, class, q1, q2, q3, q4, q5, q6, q7, q8, q9, q10 ) VALUES('".$_SESSION["st_username"]."','".$_SESSION["te_username"]."','".$_SESSION["sub_code"]."','".$_SESSION["sub_name"]."','".$_SESSION["class"]."','".$qf[1]."','".$qf[2]."','".$qf[3]."','".$qf[4]."','".$qf[5]."','".$qf[6]."','".$qf[7]."','".$qf[8]."','".$qf[9]."','".$qf[10]."')";
                $result = $conn->query($sql);
                if($result){
                  //echo "Successful. ";
                  include('overall.php');
                }
                echo "Thanks for your first time response";
                $_SESSION["toast_type"]="first-time";
                sleep(1);
                header('Location: ../');
              }
              $conn->close();
            }
            else{
              echo "Please complete the feedback<br><br>
	      Guidlines:<br>
	      &#9733 = Poor<br>
	      &#9733 &#9733 = Need improvements<br>
	      &#9733 &#9733 &#9733 = Average<br>
	      &#9733 &#9733 &#9733 &#9733        = Good<br>
	      &#9733 &#9733 &#9733 &#9733 &#9733 = Excellent";
            }
   ?>
						</div>
						<form action="<?php  $_PHP_SELF ?>" method="post">
							<?php
  include('../../db_config.php');
  $sql_q = "SELECT quest_id, quest_content FROM questions WHERE quest_id != 0 ORDER BY quest_id ASC";
  $result_q = $conn->query($sql_q);
  if ( $result_q->num_rows > 0 ){
?>
							<div class="mdl-cell mdl-cell--12-col mdl-grid mdl-grid--no-spacing">
								<div class="mdl-card mdl-cell mdl-cell--8-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
									<div class="mdl-card__supporting-text">
										<?php $row = $result_q->fetch_assoc(); 
        echo $row["quest_id"].". ".$row["quest_content"]; 
   ?>
									</div>
								</div>
								<header class="section__play-btn mdl-cell mdl-cell--4-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
									<fieldset class="rating">
										<div style="direction: rtl;">
											<input type="radio" id="star5-1" name="q[<?php echo $row["quest_id"]; ?>]" value="5" /><label for="star5-1" title="Rocks!"><span>&#9733</span></label>
											<input type="radio" id="star4-1" name="q[<?php echo $row["quest_id"]; ?>]" value="4" /><label for="star4-1" title="Pretty good"><span>&#9733</span></label>
											<input type="radio" id="star3-1" name="q[<?php echo $row["quest_id"]; ?>]" value="3" /><label for="star3-1" title="Meh"><span>&#9733</span></label>
											<input type="radio" id="star2-1" name="q[<?php echo $row["quest_id"]; ?>]" value="2" /><label for="star2-1" title="Kinda bad"><span>&#9733</span></label>
											<input type="radio" id="star1-1" name="q[<?php echo $row["quest_id"]; ?>]" value="1" /><label for="star1-1" title="Sucks big time"><span>&#9733</span></label>
										</div>
									</fieldset>
								</header>
							</div>
							<div class="mdl-cell mdl-cell--12-col mdl-grid mdl-grid--no-spacing">
								<div class="mdl-card mdl-cell mdl-cell--8-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
									<div class="mdl-card__supporting-text">
										<?php $row = $result_q->fetch_assoc(); 
        echo $row["quest_id"].". ".$row["quest_content"]; 
   ?>
									</div>
								</div>
								<header class="section__play-btn mdl-cell mdl-cell--4-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
									<fieldset class="rating">
										<div style="direction: rtl;">
											<input type="radio" id="star5-2" name="q[<?php echo $row["quest_id"]; ?>]" value="5" /><label for="star5-2" title="Rocks!"><span>&#9733</span></label>
											<input type="radio" id="star4-2" name="q[<?php echo $row["quest_id"]; ?>]" value="4" /><label for="star4-2" title="Pretty good"><span>&#9733</span></label>
											<input type="radio" id="star3-2" name="q[<?php echo $row["quest_id"]; ?>]" value="3" /><label for="star3-2" title="Meh"><span>&#9733</span></label>
											<input type="radio" id="star2-2" name="q[<?php echo $row["quest_id"]; ?>]" value="2" /><label for="star2-2" title="Kinda bad"><span>&#9733</span></label>
											<input type="radio" id="star1-2" name="q[<?php echo $row["quest_id"]; ?>]" value="1" /><label for="star1-2" title="Sucks big time"><span>&#9733</span></label>
										</div>
									</fieldset>
								</header>
							</div>
							<div class="mdl-cell mdl-cell--12-col mdl-grid mdl-grid--no-spacing">
								<div class="mdl-card mdl-cell mdl-cell--8-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
									<div class="mdl-card__supporting-text">
										<?php $row = $result_q->fetch_assoc(); 
        echo $row["quest_id"].". ".$row["quest_content"]; 
   ?>
									</div>
								</div>
								<header class="section__play-btn mdl-cell mdl-cell--4-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
									<fieldset class="rating">
										<div style="direction: rtl;">
											<input type="radio" id="star5-3" name="q[<?php echo $row["quest_id"]; ?>]" value="5" /><label for="star5-3" title="Rocks!"><span>&#9733</span></label>
											<input type="radio" id="star4-3" name="q[<?php echo $row["quest_id"]; ?>]" value="4" /><label for="star4-3" title="Pretty good"><span>&#9733</span></label>
											<input type="radio" id="star3-3" name="q[<?php echo $row["quest_id"]; ?>]" value="3" /><label for="star3-3" title="Meh"><span>&#9733</span></label>
											<input type="radio" id="star2-3" name="q[<?php echo $row["quest_id"]; ?>]" value="2" /><label for="star2-3" title="Kinda bad"><span>&#9733</span></label>
											<input type="radio" id="star1-3" name="q[<?php echo $row["quest_id"]; ?>]" value="1" /><label for="star1-3" title="Sucks big time"><span>&#9733</span></label>
										</div>
									</fieldset>
								</header>
							</div>
							<div class="mdl-cell mdl-cell--12-col mdl-grid mdl-grid--no-spacing">
								<div class="mdl-card mdl-cell mdl-cell--8-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
									<div class="mdl-card__supporting-text">
										<?php $row = $result_q->fetch_assoc(); 
        echo $row["quest_id"].". ".$row["quest_content"]; 
   ?>
									</div>
								</div>
								<header class="section__play-btn mdl-cell mdl-cell--4-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
									<fieldset class="rating">
										<div style="direction: rtl;">
											<input type="radio" id="star5-4" name="q[<?php echo $row["quest_id"]; ?>]" value="5" /><label for="star5-4" title="Rocks!"><span>&#9733</span></label>
											<input type="radio" id="star4-4" name="q[<?php echo $row["quest_id"]; ?>]" value="4" /><label for="star4-4" title="Pretty good"><span>&#9733</span></label>
											<input type="radio" id="star3-4" name="q[<?php echo $row["quest_id"]; ?>]" value="3" /><label for="star3-4" title="Meh"><span>&#9733</span></label>
											<input type="radio" id="star2-4" name="q[<?php echo $row["quest_id"]; ?>]" value="2" /><label for="star2-4" title="Kinda bad"><span>&#9733</span></label>
											<input type="radio" id="star1-4" name="q[<?php echo $row["quest_id"]; ?>]" value="1" /><label for="star1-4" title="Sucks big time"><span>&#9733</span></label>
										</div>
									</fieldset>
								</header>
							</div>
							<div class="mdl-cell mdl-cell--12-col mdl-grid mdl-grid--no-spacing">
								<div class="mdl-card mdl-cell mdl-cell--8-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
									<div class="mdl-card__supporting-text">
										<?php $row = $result_q->fetch_assoc(); 
        echo $row["quest_id"].". ".$row["quest_content"]; 
   ?>
									</div>
								</div>
								<header class="section__play-btn mdl-cell mdl-cell--4-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
									<fieldset class="rating">
										<div style="direction: rtl;">
											<input type="radio" id="star5-5" name="q[<?php echo $row["quest_id"]; ?>]" value="5" /><label for="star5-5" title="Rocks!"><span>&#9733</span></label>
											<input type="radio" id="star4-5" name="q[<?php echo $row["quest_id"]; ?>]" value="4" /><label for="star4-5" title="Pretty good"><span>&#9733</span></label>
											<input type="radio" id="star3-5" name="q[<?php echo $row["quest_id"]; ?>]" value="3" /><label for="star3-5" title="Meh"><span>&#9733</span></label>
											<input type="radio" id="star2-5" name="q[<?php echo $row["quest_id"]; ?>]" value="2" /><label for="star2-5" title="Kinda bad"><span>&#9733</span></label>
											<input type="radio" id="star1-5" name="q[<?php echo $row["quest_id"]; ?>]" value="1" /><label for="star1-5" title="Sucks big time"><span>&#9733</span></label>
										</div>
									</fieldset>
								</header>
							</div>
							<div class="mdl-cell mdl-cell--12-col mdl-grid mdl-grid--no-spacing">
								<div class="mdl-card mdl-cell mdl-cell--8-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
									<div class="mdl-card__supporting-text">
										<?php $row = $result_q->fetch_assoc(); 
        echo $row["quest_id"].". ".$row["quest_content"]; 
   ?>
									</div>
								</div>
								<header class="section__play-btn mdl-cell mdl-cell--4-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
									<fieldset class="rating">
										<div style="direction: rtl;">
											<input type="radio" id="star5-6" name="q[<?php echo $row["quest_id"]; ?>]" value="5" /><label for="star5-6" title="Rocks!"><span>&#9733</span></label>
											<input type="radio" id="star4-6" name="q[<?php echo $row["quest_id"]; ?>]" value="4" /><label for="star4-6" title="Pretty good"><span>&#9733</span></label>
											<input type="radio" id="star3-6" name="q[<?php echo $row["quest_id"]; ?>]" value="3" /><label for="star3-6" title="Meh"><span>&#9733</span></label>
											<input type="radio" id="star2-6" name="q[<?php echo $row["quest_id"]; ?>]" value="2" /><label for="star2-6" title="Kinda bad"><span>&#9733</span></label>
											<input type="radio" id="star1-6" name="q[<?php echo $row["quest_id"]; ?>]" value="1" /><label for="star1-6" title="Sucks big time"><span>&#9733</span></label>
										</div>
									</fieldset>
								</header>
							</div>
							<div class="mdl-cell mdl-cell--12-col mdl-grid mdl-grid--no-spacing">
								<div class="mdl-card mdl-cell mdl-cell--8-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
									<div class="mdl-card__supporting-text">
										<?php $row = $result_q->fetch_assoc(); 
        echo $row["quest_id"].". ".$row["quest_content"]; 
   ?>
									</div>
								</div>
								<header class="section__play-btn mdl-cell mdl-cell--4-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
									<fieldset class="rating">
										<div style="direction: rtl;">
											<input type="radio" id="star5-7" name="q[<?php echo $row["quest_id"]; ?>]" value="5" /><label for="star5-7" title="Rocks!"><span>&#9733</span></label>
											<input type="radio" id="star4-7" name="q[<?php echo $row["quest_id"]; ?>]" value="4" /><label for="star4-7" title="Pretty good"><span>&#9733</span></label>
											<input type="radio" id="star3-7" name="q[<?php echo $row["quest_id"]; ?>]" value="3" /><label for="star3-7" title="Meh"><span>&#9733</span></label>
											<input type="radio" id="star2-7" name="q[<?php echo $row["quest_id"]; ?>]" value="2" /><label for="star2-7" title="Kinda bad"><span>&#9733</span></label>
											<input type="radio" id="star1-7" name="q[<?php echo $row["quest_id"]; ?>]" value="1" /><label for="star1-7" title="Sucks big time"><span>&#9733</span></label>
										</div>
									</fieldset>
								</header>
							</div>
							<div class="mdl-cell mdl-cell--12-col mdl-grid mdl-grid--no-spacing">
								<div class="mdl-card mdl-cell mdl-cell--8-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
									<div class="mdl-card__supporting-text">
										<?php $row = $result_q->fetch_assoc(); 
        echo $row["quest_id"].". ".$row["quest_content"]; 
   ?>
									</div>
								</div>
								<header class="section__play-btn mdl-cell mdl-cell--4-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
									<fieldset class="rating">
										<div style="direction: rtl;">
											<input type="radio" id="star5-8" name="q[<?php echo $row["quest_id"]; ?>]" value="5" /><label for="star5-8" title="Rocks!"><span>&#9733</span></label>
											<input type="radio" id="star4-8" name="q[<?php echo $row["quest_id"]; ?>]" value="4" /><label for="star4-8" title="Pretty good"><span>&#9733</span></label>
											<input type="radio" id="star3-8" name="q[<?php echo $row["quest_id"]; ?>]" value="3" /><label for="star3-8" title="Meh"><span>&#9733</span></label>
											<input type="radio" id="star2-8" name="q[<?php echo $row["quest_id"]; ?>]" value="2" /><label for="star2-8" title="Kinda bad"><span>&#9733</span></label>
											<input type="radio" id="star1-8" name="q[<?php echo $row["quest_id"]; ?>]" value="1" /><label for="star1-8" title="Sucks big time"><span>&#9733</span></label>
										</div>
									</fieldset>
								</header>
							</div>
							<div class="mdl-cell mdl-cell--12-col mdl-grid mdl-grid--no-spacing">
								<div class="mdl-card mdl-cell mdl-cell--8-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
									<div class="mdl-card__supporting-text">
										<?php $row = $result_q->fetch_assoc(); 
        echo $row["quest_id"].". ".$row["quest_content"]; 
   ?>
									</div>
								</div>
								<header class="section__play-btn mdl-cell mdl-cell--4-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
									<fieldset class="rating">
										<div style="direction: rtl;">
											<input type="radio" id="star5-9" name="q[<?php echo $row["quest_id"]; ?>]" value="5" /><label for="star5-9" title="Rocks!"><span>&#9733</span></label>
											<input type="radio" id="star4-9" name="q[<?php echo $row["quest_id"]; ?>]" value="4" /><label for="star4-9" title="Pretty good"><span>&#9733</span></label>
											<input type="radio" id="star3-9" name="q[<?php echo $row["quest_id"]; ?>]" value="3" /><label for="star3-9" title="Meh"><span>&#9733</span></label>
											<input type="radio" id="star2-9" name="q[<?php echo $row["quest_id"]; ?>]" value="2" /><label for="star2-9" title="Kinda bad"><span>&#9733</span></label>
											<input type="radio" id="star1-9" name="q[<?php echo $row["quest_id"]; ?>]" value="1" /><label for="star1-9" title="Sucks big time"><span>&#9733</span></label>
										</div>
									</fieldset>
								</header>
							</div>
							<div class="mdl-cell mdl-cell--12-col mdl-grid mdl-grid--no-spacing">
								<div class="mdl-card mdl-cell mdl-cell--8-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
									<div class="mdl-card__supporting-text">
										<?php $row = $result_q->fetch_assoc(); 
        echo $row["quest_id"].". ".$row["quest_content"]; 
   ?>
									</div>
								</div>
								<header class="section__play-btn mdl-cell mdl-cell--4-col-desktop mdl-cell--8-col-tablet mdl-cell--4-col-phone">
									<fieldset class="rating">
										<div style="direction: rtl;">
											<input type="radio" id="star5-10" name="q[<?php echo $row["quest_id"]; ?>]" value="5" /><label for="star5-10" title="Rocks!"><span>&#9733</span></label>
											<input type="radio" id="star4-10" name="q[<?php echo $row["quest_id"]; ?>]" value="4" /><label for="star4-10" title="Pretty good"><span>&#9733</span></label>
											<input type="radio" id="star3-10" name="q[<?php echo $row["quest_id"]; ?>]" value="3" /><label for="star3-10" title="Meh"><span>&#9733</span></label>
											<input type="radio" id="star2-10" name="q[<?php echo $row["quest_id"]; ?>]" value="2" /><label for="star2-10" title="Kinda bad"><span>&#9733</span></label>
											<input type="radio" id="star1-10" name="q[<?php echo $row["quest_id"]; ?>]" value="1" /><label for="star1-10" title="Sucks big time"><span>&#9733</span></label>
										</div>
									</fieldset>
								</header>
							</div>
							<?php
  }
?>
							<div style="text-align: right">
								<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
									Button
								</button>
							</div>
						</form>
					</div>
				</section>
			</div>
			<div class="mdl-layout__tab-panel" id="account">
				<section class="mdl-card mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
					<div class="mdl-cell mdl-cell--12-col">
						<h4>Features</h4>
						<!--
						<section class="section--footer mdl-color--white mdl-grid">
							<div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
								<div class="section__circle-container__circle mdl-color--accent section__circle--big"></div>
							</div>
							<div class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
								<h5>Lorem ipsum dolor sit amet</h5>
								Qui sint ut et qui nisi cupidatat. Reprehenderit nostrud proident officia exercitation anim et pariatur ex.
							</div>
							<div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
								<div class="section__circle-container__circle mdl-color--accent section__circle--big"></div>
							</div>
							<div class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
								<h5>Lorem ipsum dolor sit amet</h5>
								Qui sint ut et qui nisi cupidatat. Reprehenderit nostrud proident officia exercitation anim et pariatur ex.
							</div>
						</section>
-->
					</div>
				</section>
			</div>
			<!--
			<footer class="mdl-mega-footer">
				<div class="mdl-mega-footer--middle-section">
					<div class="mdl-mega-footer--drop-down-section">
						<input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
						<h1 class="mdl-mega-footer--heading">Features</h1>
						<ul class="mdl-mega-footer--link-list">
							<li><a href="#">About</a></li>
							<li><a href="#">Terms</a></li>
							<li><a href="#">Partners</a></li>
							<li><a href="#">Updates</a></li>
						</ul>
					</div>
					<div class="mdl-mega-footer--drop-down-section">
						<input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
						<h1 class="mdl-mega-footer--heading">Details</h1>
						<ul class="mdl-mega-footer--link-list">
							<li><a href="#">Spec</a></li>
							<li><a href="#">Tools</a></li>
							<li><a href="#">Resources</a></li>
						</ul>
					</div>
					<div class="mdl-mega-footer--drop-down-section">
						<input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
						<h1 class="mdl-mega-footer--heading">Technology</h1>
						<ul class="mdl-mega-footer--link-list">
							<li><a href="#">How it works</a></li>
							<li><a href="#">Patterns</a></li>
							<li><a href="#">Usage</a></li>
							<li><a href="#">Products</a></li>
							<li><a href="#">Contracts</a></li>
						</ul>
					</div>
					<div class="mdl-mega-footer--drop-down-section">
						<input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
						<h1 class="mdl-mega-footer--heading">FAQ</h1>
						<ul class="mdl-mega-footer--link-list">
							<li><a href="#">Questions</a></li>
							<li><a href="#">Answers</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="mdl-mega-footer--bottom-section">
					<div class="mdl-logo">
						More Information
					</div>
					<ul class="mdl-mega-footer--link-list">
						<li><a href="https://developers.google.com/web/starter-kit/">Web Starter Kit</a></li>
						<li><a href="#">Help</a></li>
						<li><a href="#">Privacy and Terms</a></li>
					</ul>
				</div>
			</footer>
-->
		</main>
	</div>
	<div id="snackbar">Some text some message..</div>
	<?php
	  //Toast setting-up
	  if (isset($_SESSION["toast_type"])) {
	  	if($_SESSION["toast_type"] == "update") {
	     echo 
                '<script type="text/javascript">
                 function showsnackbar() {
                  var x = document.getElementById("snackbar");
                  x.innerHTML = "Response updated";
                  x.className = "show";
                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 4000);
                  }
                 showsnackbar()
                 </script>';
          unset($_SESSION["toast_type"]);
	  	}
        elseif ($_SESSION["toast_type"] == "first-time") {
         echo 
                '<script type="text/javascript">
                 function showsnackbar() {
                  var x = document.getElementById("snackbar");
                  x.innerHTML = "Response added";
                  x.className = "show";
                  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 4000);
                  }
                 showsnackbar()
                 </script>';
          unset($_SESSION["toast_type"]);
        }
      }
	?>
</body>

</html>
