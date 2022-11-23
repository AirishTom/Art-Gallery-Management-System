<?php
include("connection.php");
if (isset($_POST['update'])) {
  $old =md5($_POST['current']);
  $new = md5($_POST['new']);
  $user = mysqli_real_escape_string($conn, $_SESSION['email']);
  $passCheck = "SELECT * FROM `tbl_login` WHERE `email`='$user'";
  $runQ = mysqli_query($conn, $passCheck);
  $row = mysqli_fetch_array($runQ);
  $a=$row['password'];
  if ($a == $old) {
    $newp = "UPDATE `tbl_login` SET `password`='$new' WHERE `email`='$user'";
    $runnewp = mysqli_query($conn, $newp);
    echo '<script>alert("Password updated.");</script>';
    echo '<script>window.location.href="change-pass.php";</script>';
   
  } else {
    echo '<script>alert("Old password doesnot match.");</script>';
    echo '<script>window.location.href="change-pass.php";</script>';
  }
}
?>


<!DOCTYPE html>
<html>
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
    
<title>change password</title>
<link rel="stylesheet" type="text/css" href="./changepass.css">
</head>
<body>
  <header id="header" >
    <div class="container">
        <div class="row align-items-center justify-content-between d-flex">
          <!--<div id="logo">
            <a href="index.html"><img src="img/logo.jpg" alt="" title="" /></a>
          </div>-->&nbsp;&nbsp;&nbsp;
          <nav id="nav-menu-container">
              
            <ul class="nav-menu">
              <li><a href="index.php">Home</a></li>
              <li><a href="about.php">About</a></li>
              <!-- <li><a href="gallery.php">Artists</a></li> -->
              <li><a href="ticket.php">PAINTINGS</a></li>
              <li><a href="myprofile.php">My Profile</a></li>
						  <li><a href="change-pass.php">Change Password</a></li>           
              <li><a href="logindex.php">Sign in</a></li>
              <li><a href="logout.php">Signout</a></li>
              

              <!-- <li><a href="contact.php">Contact</a></li> -->
             <!-- <li class="menu-has-children"><a href="">Pages</a>
               
              </li>	-->		          
            </ul>
          </nav><!-- #nav-menu-container -->		    		
        </div>
    </div>
  </header>
    <div class="registration-form">
        <h1>Change Password</h1>
        <form action="#" method="POST">
            <input type="text" name="current" id="name" placeholder="Old Password" required onchange="Validstr()";/>
            <br><br>
            <input type="text" name="new" id="name" placeholder="New Password" required onchange="Validstr()";/>
            <br><br>
            <input type="text" name="retype" id="name" placeholder="Confirm Password" required onchange="Validstr()";/>
            <br><br>
                        
                    

           
            
          
            <button type="submit" name="update">Update</button>
            </form>
            </div>
            </body> 
            <html>

            