

<?php if(!isset($_SESSION)) {
    session_start();
    }
    if(!isset($_SESSION['loginstatus'])){
        $_SESSION['loginstatus']="false";
    }

    if($_SESSION['loginstatus']=="false"){
        header('Location:home/index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Bank Exam</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style1.css" rel="stylesheet">


</head>

<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">



    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="#intro" class="scrollto"><span>CSE411</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>

          <li><a href="#services">Services</a></li>

          <li><a href="#team">Team</a></li>
          <li class="drop-down"><a href=""><?php echo $_SESSION["username"]; ?></a>
            <ul>
              <li><a href="#">Profile</a></li>

              <li><a href="logout.php">Logout</a></li>

            </ul>
          </li>
        
        </ul>
      </nav><!-- .main-nav -->

    </div>
    <style>
body {
  background-image: url('img/l.png');
}
</style>
  </header><!-- #header -->

<form name="form1" method="post" action="comment.php" onSubmit="return validation()">
<table width="500" border="0" cellspacing="3" cellpadding="3" style="margin:auto;">
  <h1 style="text-align:40px; margin-left: 400px; padding-top: 100px; color:blue;"> some thing to sAY</h1>
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
echo "<img src='img/icon.png'"." ' width='50px'
                                                height='50px'
                                                align='left' />";


echo "<div id='tnameid'>".$row["userName"]."</div>";
 echo "<div id='tmessageid'>"."=>".$row["message"]."</div>";


 echo "</div><br />";
}
?>
