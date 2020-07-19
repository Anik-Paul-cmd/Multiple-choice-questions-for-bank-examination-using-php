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
				<a class="logo" href="index.php">Moderator</a>
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

<form name="form1" method="post" action="commentmod.php" onSubmit="return validation()">
<table width="500" border="0" cellspacing="3" cellpadding="3" style="margin:auto;">
  <h1 style="text-align:40px; margin-left: 400px; color:blue;"> Moderator:</h1>
    <td align="right" id="one"></td>
    <td><textarea name="message" id="tmessageid"></textarea></td>
  </tr>
  <tr>
  <td align="right" id="one"></td>
  <td><input type="submit" name="submit" value="submit"></td>
  </tr>
</table>
</form>



<?php
$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"bank");
if(isset($_POST["submit"]))
{

	$_POST['userName']=$_SESSION["username"];
	$name=$_POST['userName'];


mysqli_query($conn,"insert into commenttable values ('$name','$_POST[message]')");

 }



$select= mysqli_query($conn,"select * from commenttable");
while($row=mysqli_fetch_array($select))
{
 echo "<div id='sty'>";
echo "<img src='../img/icon.png'"."' width='50px'
                                                height='50px'
                                                align='left' />";


echo "<div id='tnameid'>".$row["userName"]."</div>";
 echo "<div id='tmessageid'>"."=>".$row["message"]."</div>";


 echo "</div><br />";
}
?>
