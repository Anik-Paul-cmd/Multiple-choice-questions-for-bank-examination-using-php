<!DOCTYPE HTML>
<?php if(!isset($_SESSION)) {
    session_start();
    }
    if(!isset($_SESSION['loginstatus_admin'])){
        $_SESSION['loginstatus_admin']="false";
    }

    if($_SESSION['loginstatus_admin']=="false"){
        header('Location:../home/index.php');
    }

?>
<html>
	<head>
		<title>Bank Exam</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html">ADMIN</a>
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
						<h2>Admin Panel</h2>
						<p></p>
					</header>
					<div class="highlights">
						<section>
							<div class="content">
								<header>
									<a href="category/index.php" class="icon fa-vcard-o"><span class="label">Icon</span></a>
									<h3>Select Bank Category</h3>
								</header>
								<p></p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="perform/index.php" class="icon fa-files-o"><span class="label">Icon</span></a>
									<h3>Moderator Info.</h3>
								</header>
								<p></p>
							</div>
						</section>
						<section>
							<div class="content">
								<header>
									<a href="p_rating.php" class="icon fa-floppy-o"><span class="label">Icon</span></a>
									<h3>Participents Ratting</h3>
								</header>
								<p></p>
							</div>
						</section>

						<section>
							<div class="content">
								<header>
									<a href="commentmod.php" class="icon fa-paper-plane-o"><span class="label">Icon</span></a>
									<h3>Contract with Moderator</h3>
								</header>
								<p></p>
							</div>
						</section>
            <section>
							<div class="content">
								<header>
									<a href="acc.php" class="icon fa-line-chart"><span class="label">Icon</span></a>
									<h3> Announcement </h3>
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
