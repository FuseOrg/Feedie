<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<script src="../scripts/material.min.js"></script>
	<link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="../styles/material.min.css">
	<link rel="stylesheet" href="../styles/main.css">
	<link rel="icon" type="image/png" href="../images/logo.png">
	<title>Dashboard | Feedie</title>
</head>

<body class="mdl-demo mdl-color-text--grey-900 mdl-base">
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		<header class="mdl-layout__header mdl-color--white mdl-color-text--grey-600">
			<div class="mdl-layout__header-row">
				<a href="../">
					<button class="mdl-button mdl-js-button mdl-button--icon">
						<i class="material-icons">home</i>
					</button>
				</a>
				<div class="mdl-layout-spacer"></div>
				<span class="mdl-layout-title">Feedie</span>
				<div class="mdl-layout-spacer"></div>
				<button id="more" class="mdl-button mdl-js-button mdl-button--icon">
					<i class="material-icons">account_circle</i>
				</button>
				<ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="more">
					<a href="../?logout=1">
						<li class="mdl-menu__item">
							<i class="material-icons" role="presentation">exit_to_app</i>
							Logout
						</li>
					</a>
					<a href="changepw">
						<li class="mdl-menu__item">
							<i class="material-icons" role="presentation">vpn_key</i>
							Change password
						</li>
					</a>
				</ul>
			</div>
			<div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--white">
				<div class="mdl-layout-spacer"></div>
				<a href="#overview" class="mdl-layout__tab is-active">Feedback</a>
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
				<div class="mdl-layout-spacer"></div>
			</div>
		</header>
		<main class="mdl-layout__content">
			<div class="mdl-layout__tab-panel is-active" id="overview">
				<section class="section--center mdl-card mdl-grid mdl-grid--no-spacing">
					<h4 class="mdl-cell mdl-cell--12-col">Subjects</h4>
					<?php
							include('../db_config.php');
							$sql = "SELECT te_username, sub_name, sub_code FROM teachersinfo WHERE class = '".$_SESSION["class"]."'";
							$result = $conn->query($sql);
							if($result->num_rows > 0) {
							while($row = $result->fetch_assoc()){
						?>
					<div onclick="location.href='feedform/?sub_name=<?php echo $row["sub_name"]; ?>'" class="mdl-cell mdl-cell--12-col mdl-grid subjects">
						<div class="section__circle-container mdl-cell mdl-cell--1-col">
							<?php
									$sql1 = "SELECT st_username FROM feeds WHERE st_username = '".$_SESSION["st_username"]."' AND sub_code = '".$row["sub_code"]."' AND class = '".$_SESSION["class"]."'";
									$result1 = $conn->query($sql1);
									if( $result1->num_rows > 0 ) {
								?>
							<div class="section__circle-container__circle mdl-color-text--green-a400">
								<i class="material-icons">done</i>
							</div>
							<?php
									}
									else {
								?>
							<div class="section__circle-container__circle mdl-color-text--red-a400">
								<i class="material-icons">close</i>
							</div>
							<?php
									}
								?>
						</div>
						<div class="section__text mdl-cell mdl-cell--11-col-desktop mdl-cell--7-col-tablet mdl-cell--3-col-phone">
							<h5>
								<?php echo $row["sub_name"]; ?>
							</h5>
						</div>
					</div>
					<?php
								}
							}
						?>
				</section>
			</div>
			<div class="mdl-layout__tab-panel" id="account">
				<section class="section--center mdl-card mdl-grid mdl-grid--no-spacing">
					<div class="mdl-cell mdl-cell--12-col">
						<h4>Features</h4>
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
						<section class="section--center mdl-grid mdl-grid--no-spacing">
							<div class="mdl-card mdl-cell mdl-cell--12-col">
								<div class="mdl-card__supporting-text">
									<h4>Technology</h4>
									Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse. Pariatur occaecat nisi laboris tempor laboris eiusmod qui id Lorem esse commodo in. Exercitation aute dolore deserunt culpa consequat elit labore incididunt elit anim.
								</div>
								<div class="mdl-card__actions">
									<a href="#" class="mdl-button">Read our account</a>
								</div>
							</div>
							<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn3">
								<i class="material-icons">more_vert</i>
							</button>
							<ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn3">
								<li class="mdl-menu__item">Lorem</li>
								<li class="mdl-menu__item" disabled>Ipsum</li>
								<li class="mdl-menu__item">Dolor</li>
							</ul>
						</section>
						<section class="section--center mdl-grid mdl-grid--no-spacing">
							<header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
								<i class="material-icons">play_circle_filled</i>
							</header>
							<div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
								<div class="mdl-card__supporting-text">
									<h4>Features</h4>
									Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.
								</div>
								<div class="mdl-card__actions">
									<a href="#" class="mdl-button">Read our account</a>
								</div>
							</div>
							<button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn1">
								<i class="material-icons">more_vert</i>
							</button>
							<ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn1">
								<li class="mdl-menu__item">Lorem</li>
								<li class="mdl-menu__item" disabled>Ipsum</li>
								<li class="mdl-menu__item">Dolor</li>
							</ul>
						</section>
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
