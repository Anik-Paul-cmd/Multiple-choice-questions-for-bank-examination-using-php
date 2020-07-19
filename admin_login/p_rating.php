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
				<a class="logo" href="index.php">ADMIN</a>
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


      <table border='2' width="600">
          <tr>

          <th>Name</th>
          <th> Bank Name  </th>
          <th>  Right Answer</th>
          <th> Wrong Answer</th>
          <th>  Average</th>
          		<th>  Delete</th>
          </tr>


  <?php

  	$conn=mysqli_connect("localhost","root","");
  mysqli_select_db($conn,"bank");
  if(isset($_GET['del'])){

  	$del_id=$_GET['del'];
  	if(mysqli_query($conn,"delete from rating  where id='$del_id'")){

  	}
  }



  	$res=mysqli_query($conn,"select * from rating ");

  		while($row=mysqli_fetch_array($res)){
  		$showid=$row[0];
  		echo "<tr>";
  		echo "<td>"; echo "$showid"; echo"</td>";
  		echo "<td>"; echo $row["username"]; echo"</td>";
  		echo "<td>"; echo $row["b_name"]; echo"</td>";
  		echo "<td>"; echo $row["r_ques"]; echo"</td>";
      echo "<td>"; echo $row["w_ques"]; echo"</td>";
      echo "<td>"; echo $row["average"]; echo"</td>";
  		echo "<td>"; echo "<a href='p_rating.php?del=$showid'>Delete</a>";echo"</td>";
  		echo "</tr>";
  	}
?>
