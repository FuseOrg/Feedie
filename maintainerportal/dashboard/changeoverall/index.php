<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="../../../css.css">
	<link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet'>
	<link rel="icon" type="image/png" href="../../../images/logo.png">
	<title>Feedie | Overall Settings</title>
	<style>
		.table {
			display: table;
			width: calc(100% - 16px);
			border-radius: 5px;
			margin: 16px 0;
		}

		.row {
			display: table-row;
		}

		.cell {
			display: table-cell;
		}

		/* Zebra striping */

		.table .row:nth-of-type(2n+1) {
			background: #eee;
		}

		.table .row:nth-of-type(1) {
			background: #415be8;
			color: #fff;
		}

		.row,
		.cell {
			padding: 16px 8px;
		}

		/* 
		Max width before this PARTICULAR table gets nasty
		This query will take effect for any screen smaller than 760px
		and also iPads specifically.
		*/

		@media only screen and (max-width: 760px),
		(min-device-width: 768px) and (max-device-width: 1024px) {
			/* Force table to not be like tables anymore */
			.table,
			tbody,
			.cell,
			.row {
				display: block;
			}
			.cell {
				/* Behave  like a "row" */
				border: none;
				position: relative;
			}
		}

	</style>
</head>

<body>

	<div class="header">
		<div><a href="../"><img src="../../../images/back.svg" class="home"></a></div>
		<img src="../../../images/logo.svg" class="logo" />
		<div class="title">Feedie</div>
		<a href="../../?logout=1">
			<div class="logout">Logout</div>
		</a>
	</div>
	<div class="wrapper">
		<div class="container">
			<div class="heading">Overall Settings</div>
			<div>
				<button class="button" style="float: right;">Generate overall</button>
			</div>
			<div>
				<form action="" method="post">
					<label>Maximum value for new overall</label>
					<input type="number" class="inputvalue" name="newoverall">
					<input type="submit" class="button" value="add">
				</form>
			</div>
		</div>
	</div>
	<footer>
		<?php 
    if( isset($_POST["newoverall"]) AND $_POST["newoverall"] != NULL){
      include('addoverall.php');
    }
  ?>
		<a href="https://fuseorg.github.io/Feedie" class="link" target="_blank">Fuse Org</a></footer>
</body>

</html>
