
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

<?php

 include("database.php");
$email=$_SESSION['email'];

$profile=new DB_con ;
$profile->users_profile($email);

$profile->p_cat_shows();
//print_r($profile->cat);

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

   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css1/bootstrap.min.css">
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
          <li><a href="#portfolio">Portfolio</a></li>

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

  <!--==========================
    Intro Section
  ============================-->


    <!--==========================
      About Us Section
    ============================-->



    <!--==========================
      Services Section
    ============================-->




<div class="container">
       <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Services</h3>
          <p>Choose your Bank </p>
        </header>
		   <div class="tab-content">
    <div id="home" class="tab-pane fade in active">

	  <center><button type="button" class="btn btn-primary" data-toggle="tab" href="#select" >Participents result</button></center>
	   <div class="col-sm-4"></div>
	   <div class="col-sm-4"><br>
	   <div id="select" class="tab-pane fade">

		  <form  method="post" action="p_display.php">
		  <select class="form-control" id="" name="cat">
		  <option>select category</option>
		  <?php
		  foreach($profile->cat as $category)
		  {  ?>
			<option value="<?php echo $category['id'];?>"><?php echo $category['cat_name'];?></option>
			<?php   }?>
		  </select><br>
		  <center><input type="submit" value="submit" class="btn btn-primary" /></center>
		</form>


	  </div>
	  </div>
	  <div class="col-sm-4"></div>
    </div>
        </header>


      </div>
    </section>

    <div id="menu1" class="tab-pane fade">
      <h3>Showing profile</h3>

	  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>image</th>
      </tr>
    </thead>
    <tbody>











    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
