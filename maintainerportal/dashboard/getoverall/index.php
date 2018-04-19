<html>
 <head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <link rel="stylesheet" type="text/css" href="../../../css.css">
	<link href='https://fonts.googleapis.com/css?family=Product+Sans' rel='stylesheet'>
  <link rel="icon" type="image/png" href="../../../images/logo.png">
  <title>Feedie | Generate Overall</title>
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
		.row, .cell {
		padding: 16px 8px;
		}
		/* 
		Max width before this PARTICULAR table gets nasty
		This query will take effect for any screen smaller than 760px
		and also iPads specifically.
		*/
		@media 
		only screen and (max-width: 760px),
		(min-device-width: 768px) and (max-device-width: 1024px)  {
		/* Force table to not be like tables anymore */
		.table, tbody, .cell, .row { 
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
		<img src="../../../images/logo.svg" class="logo"/>
		<div class="title">Feedie</div>
    <a href="../../?logout=1"><div class="logout">Logout</div></a>
  </div>
  <div class="wrapper">
  <div class="container">
		<div class="heading">Generate Overall</div>
		<div>
			<button class="button" href="">Overall out of 10</button>
			<button class="button" href="">Overall out of 100</button>
		</div>
		<div class="table">
			<!-- Table columns -->
			<div class="row">
				<div class="cell">S6<input type="checkbox"></div>
				<div class="cell">ID</div>
				<div class="cell">Name</div>
				<div class="cell">Class</div>
				<div class="cell">Subject</div>
				<div class="cell">Overall</div>
			</div>
			<!-- Table contents -->
			<div class="row">
				<div class="cell"><input type="checkbox"></div>
				<div class="cell">1</div>
				<div class="cell">AKHILA</div>
				<div class="cell">EEE-A</div>
				<div class="cell">Mobile Computing</div>
			</div>
			<div class="row">
				<div class="cell"><input type="checkbox"></div>
				<div class="cell">2</div>
				<div class="cell">ARUN K</div>
				<div class="cell">CSE-A</div>
				<div class="cell">Web Technologie</div>
			</div>
		</div>
		<div class="table">
			<!-- Table columns -->
			<div class="row">
				<div class="cell">S5<input type="checkbox"></div>
				<div class="cell">ID</div>
				<div class="cell">Name</div>
				<div class="cell">Class</div>
				<div class="cell">Subject</div>
				<div class="cell">Overall</div>
			</div>
			<!-- Table contents -->
			<div class="row">
				<div class="cell"><input type="checkbox"></div>
				<div class="cell">3</div>
				<div class="cell">SHIJI</div>
				<div class="cell">AUE-A</div>
				<div class="cell">Compiler Design</div>
			</div>
			<div class="row">
				<div class="cell"><input type="checkbox"></div>
				<div class="cell">4</div>
				<div class="cell">BIJI K P</div>
				<div class="cell">EEE-A</div>
				<div class="cell">Software Engineering</div>
			</div>
		</div>
  </div>
  </div>
  <footer><a href="https://fuseorg.github.io/Feedie" class="link" target="_blank">Fuse Org</a></footer>
 </body>
</html>
