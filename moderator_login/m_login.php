<!DOCTYPE html>
<html lang="en">
    
    
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../css/style.css">
</head>
    

 <?php
       if(!isset($_SESSION)) { 
    session_start(); }   
   
    include_once '../database.php';
    $con = new DB_con();
    if(isset($_POST['submit']))
    {   
        $email = test_input($_POST['email']);
        $password = test_input($_POST['password']);
   
		$moderatorresult= $con->moderator($email,$password);
		$moderatorr=mysqli_fetch_array($moderatorresult);
       

		if(mysqli_num_rows($moderatorresult)>0){
			$_SESSION["username"]= $moderatorr[0];
            $_SESSION["email"]=$moderatorr[1];
     
			
            $_SESSION["loginstatus_moderator"]="true";
			
			?>
            <script>
            window.location.replace("index.php");
            </script>
            <?php
		}
        else {?>
            <script>
            alert("moderator not found");
            </script>
            <?php
        }
    }
     function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
 ?>   
    
<body>

    <div class="main">



        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="../images/signin-image.jpg" alt="sing up image"></figure>
                        
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Moderator Login</h2>
                        <form method="POST" class="register-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email"  placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password"  placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="submit" class="form-submit" value="Log in"/>
                            </div>
							
						<div class="social-login">
                            <span class="social-label">Or login with</span>
                            <ul class="socials">
                                <li><a href="../sign_in.php"> <span >User</span></a></li>
                                <li><a href="../admin_login/a_login.php"><span >Admin</span></a></li>
                                
                            </ul>
                        </div>
							
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
