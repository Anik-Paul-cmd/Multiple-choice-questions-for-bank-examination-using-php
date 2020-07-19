
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

<?php
 include("database.php");

$ans=new  DB_con ;
$answer=$ans->answer($_POST);
$email=$_SESSION['email'];
$username=$_SESSION['username'];
$con=mysqli_connect('localhost','root','','bank');




?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>answer</title>
	  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>
<body>
	<center>
	<?php
	$total_qus=$answer['right']+$answer['wrong']+$answer['no_answer'];
	$attempt_qus=$answer['right']+$answer['wrong'];
	?>
	<div class="container">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
  <h2 style="text-align:40px; margin-left: 100px; padding-top: 100px; color:blue;">Your Quiz results</h2>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Total number of Questions</th>
        <th><?php echo $total_qus; ?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Attempted qusetions</td>
        <td><?php echo $attempt_qus;?></td>
      </tr>
      <tr>
        <td>Right answer </td>
        <td><?php echo $answer['right'];?></td>
      </tr>
      <tr>
        <td>Wrong answer</td>
        <td><?php echo $answer['wrong'];?></td>
      </tr>
	  <tr>
        <td>No answer</td>
        <td><?php echo $answer['no_answer'];?></td>
      </tr>
	  <tr>
        <td>Your result</td>
        <td><?php
		$per=($answer['right']*100)/($total_qus);

		echo $per."%";
		?></td>
      </tr>
    </tbody>
  </table></div>
  <div class="col-sm-2"></div>
</div>


	<?php





  $a=$answer['right'];
  $w=$answer['wrong'];
  $cat_id = $_SESSION['cat'];

  $sql = "select * from category where id = '$cat_id'";
  $res = $con->query($sql);
  while ($row = $res->fetch_assoc()) {
    $bank_name= $row["cat_name"];
    echo "Name: ".$bank_name;
    // code...
  }
   $sql00="INSERT INTO rating (email,username,cat_id,b_name, r_ques, w_ques, average) VALUES ('$email', '$username','$cat_id','$bank_name', '$a', '$w' , $per)";
   $res = $con->query($sql00);
   // if(mysqli_num_rows($res) > 0){
   //   echo "Sucessfully inserterd.";
   // }
   // else {
   //   echo "Failed to execute insert query.";
   // }
   // $_SESSION['cat']=NULL;


	?>






	</center>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
