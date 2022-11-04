
<?php
include('connection.php');
session_start();
$error = "Invalid Email or Password";

if(isset($_POST['submit']))
{
  $email=$_POST["email"];
  $password=($_POST["password"]);
  $sql="SELECT * from tbl_login where email='".$email."' AND password='".$password."'";
  $res=mysqli_query($conn, $sql);
  if(mysqli_num_rows($res)>0)
  {
    $res_fetch=mysqli_fetch_assoc($res);
    $email=$res_fetch['email'];
    $password=$res_fetch['password'];
    $type=$res_fetch['type'];
    $_SESSION['type']="$type";
    $_SESSION['email']="$email";
  
    
      if($_SESSION['type']=='customer')
      {
        
        
        $_SESSION['email']="$email";
        $_SESSION['id']=$res_fetch['login_id'];
        echo "<script>
       <script>indow.alert('welcome user');</script>
        </script>";
  
        header("location:customer/index.php");
        exit(0);
      }
      
     

      elseif($_SESSION['type']=='artist')
      {
        $_SESSION['message']="Welcome";
        echo "<script>
        window.alert('welcome artist');
        </script>";
        header("location:artist.php");
        
        exit(0);
      }

      
      elseif($_SESSION['type']=='admin')
      {
        $_SESSION['message']="Welcome";
        echo "<script>
        window.alert('welcome admin');
        </script>";
        header("location:Admin/template/index.php");
        
        exit(0);
      }
  

    
    else
    {
      echo "<script> alert('Please verify the email'); 
      </script>";
    }
  }
  else
  {
    $_SESSION["error"] = $error;
    header("location:logindex.php");
    exit(0);
  }
}

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">					
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
    <title>Gathering Log In form Responsive Widget Template :: W3layouts</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <!-- //Meta tag Keywords -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--//Style-CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all">

</head>

<body>
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
          <!--<div id="logo">
            <a href="index.html"><img src="img/logo.jpg" alt="" title="" /></a>
          </div>-->&nbsp;&nbsp;&nbsp;
          <nav id="nav-menu-container">
              
            <ul class="nav-menu">
              <li class="menu-active"><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="gallery.php">Artists</a></li>
              <li><a href="event.php">Paintings</a></li>
              <li><a href="logindex.php">Sign in</a></li>
              <li><a href="register.php">Sign up</a></li>
              <!-- <li><a href="contact.php">Contact</a></li> -->
             <!-- <li class="menu-has-children"><a href="">Pages</a>
               
              </li>	-->		          
            </ul>
          </nav><!-- #nav-menu-container -->		    		
        </div>
    </div>
    <div class="w3l-signinform">
        <!-- container -->
        <div class="wrapper">
            <!-- main content -->
            <div class="w3l-form-info">
                <div class="w3_info">
                    <h1>Welcome Back</h1>
                    <p class="sub-para">Please Login To Explore....!</p>
                    <h2>Log In</h2>
                    <form action="#" method="post" id="login">
                        <div class="input-group">
                            <span><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="email" placeholder="Email or Username" name="email" required="">
                        </div>
                        <div class="input-group two-groop">
                            <span><i class="fa fa-key" aria-hidden="true"></i></span>
                            <input type="Password" placeholder="Password" name="password" required="">
                        </div>
                        <div class="form-row bottom">
                            <div class="form-check">
                                <input type="checkbox" id="remenber" name="remenber" value="remenber">
                                <label for="remenber"> Remember me?</label>
                            </div>
                            <a href="forgot.php" class="forgot">Forgot password?</a>
                        </div>
                        <button class="btn btn-primary btn-block" type="submit" name="submit">Log In</button>
                    </form>
                
                    <p class="account">Don't have an account? <a href="#register">Register</a></p>
                </div>
            </div>
            <!-- //main content -->
        </div>
        <!-- //container -->
        
    </div>

</body>

</html>
