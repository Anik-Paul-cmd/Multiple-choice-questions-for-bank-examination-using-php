<!DOCTYPE HTML>
<?php if(!isset($_SESSION)) {
    session_start();
    }
    if(!isset($_SESSION['loginstatus_moderator'])){
        $_SESSION['loginstatus_moderator']="false";
    }

    if($_SESSION['loginstatus_moderator']=="false"){
        header('Location:../home/index.php');
    }

?>
<html>
	<head>
		<title>Industrious by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html">Moderator</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>

					<li><a href="logout.php">Logout</a></li>
				</ul>
			</nav>

		<!-- Banner -->


		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>Moderator Panel</h2>
						<p></p>
					</header>
					<div class="highlights">
						<section>
							<div class="content">
								<header>
									<a href="question/index.php" class="icon fa fa-book"><span class="label">Icon</span></a>

									<h3>Select Bank Category</h3>
								</header>
								<p></p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="commentmod2.php" class="icon fa fa-envelope-o"><span class="label">Icon</span></a>
									<h3>Contract With Admin </h3>
								</header>
								<p></p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="commentmod.php" class="icon fa fa-envelope"><span class="label">Icon</span></a>
									<h3>Contract With Participents</h3>
								</header>
								<p></p>
							</div>
						</section>


						<section>

						</section>
					</div>
				</div>
			</section>


		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
