
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

$result =new DB_con;
$cat=$_POST['cat'];
$_SESSION['cat']=$cat;

$result->p_result_show($cat);
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
              <li><a href="#portfolio">Portfolio</a></li>  <li><a href="#team">Team</a></li>
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
        <section id="services" class="section-bg">
          <div class="container">

            <header class="section-header">
              <h3>Services</h3>
              <p>This Online Test section Contains the next 10 best Multiple choice type Questions and Answers</p>
            </header>


        <div align="center">
                <table border='2' width="600">
                    <tr>

                    <th>Name</th>
                    <th> Bank Name  </th>
                    <th>  Right Answer</th>
                    <th> Wrong Answer</th>
                    <th>  Average</th>

                    </tr>
                    <?php foreach($result->result as $qust) {

                      echo "<tr>";

                      echo "<td>" ; echo  $qust["username"];  echo"</td>";
                        echo"<td>"; echo  $qust["b_name"];   echo"</td>";
                        echo"<td>";   echo  $qust["r_ques"];   echo"</td>";
                        echo"<td>" ; echo  $qust["w_ques"];    echo"</td>";
                          echo"<td>";  echo  $qust["average"];   echo"</td>";









                    echo "</tr>";



         } ?>

    <a href="p_rating.php" button type="button" class="btn btn-primary">Back</button>
</section>
