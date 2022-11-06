<?php
include("connection.php");

if(isset($_POST['update']))
{
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];
$currentuser= $_SESSION['email'];

$newp = "UPDATE `tbl_reg` SET `name`='$name',`phone`='$phone',`address`='$address'  WHERE `email`='$currentuser'";
$runnewp = mysqli_query($conn, $newp);

echo '<script>alert("Profile updated.");</script>';
echo '<script>window.location.href="myprofile.php";</script>';
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
    
<title>USER PROFILE</title>
<link rel="stylesheet" type="text/css" href="./styleprof.css">
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

              <!-- <li class="menu-active"><a href="register.php">Sign up</a></li> -->

              <!-- <li><a href="contact.php">Contact</a></li> -->
             <!-- <li class="menu-has-children"><a href="">Pages</a>
               
              </li>	-->		          
            </ul>
          </nav><!-- #nav-menu-container -->		    		
        </div>
    </div>
  </header>
    <div class="registration-form">
        <h1>User Proffile</h1>
        <form action="#" method="POST">
        <?php
$currentuser= $_SESSION['email'];
$sql="SELECT * FROM `tbl_reg` WHERE email='$currentuser'";
$gotresult=mysqli_query($conn,$sql);
if($gotresult)
{
    if(mysqli_num_rows($gotresult) > 0)
    {
        while($row=mysqli_fetch_array($gotresult))
        {
            //print_r($row['email']);
            ?>

            <input type="text" name="name" id="name" placeholder="Name" value= "<?php echo$row['name'];?>" required onchange="Validstr()";/>
            <br><br>
            <span id="msg1" style="color:red;"></span>
                        <script>
                        function Validstr() 
                        {
                        var val = document.getElementById('name').value;
                        if (!val.match(/^[a-zA-Z ]*$/) )
                         {
                          document.getElementById('msg1').innerHTML="Start with a Capital letter & Only alphabets are allowed";
                                document.getElementById('name').value = "";
                                  return false;
                         }
                          document.getElementById('msg1').innerHTML=" ";
                         return true;
                        }
                   </script>
                        
            <input type="text" name="phone" placeholder="Phone Number"  id="phno" value= "<?php echo$row['phone'];?>"required onchange="Validphone()"/>
            <br><br>
            <span id="msg7" style="color:red;"></span>
                        <script>
                        function Validphone() 
                        {
                        var val = document.getElementById('phno').value;
                          if (!val.match(/^[789][0-9]{9}$/))
                           {
                            document.getElementById('msg7').innerHTML="Only Numbers are allowed and must contain 10 number";
                                  document.getElementById('phno').value = "";
                                    return false;
                           }
                            document.getElementById('msg7').innerHTML=" ";
                          return true;
                        }
                        
                       </script>

           
            <input type="text" name="address" placeholder="Address" value= "<?php echo$row['address'];?>"required="">
            <br><br>
            <!-- <input type="email" name="email" placeholder="Email" value= "<?php echo$row['email'];?>"required="">
            <br><br> -->
          
            <button type="submit" name="update">Update</button>
          
            </form>
            
            <?php
        }
    }
}
   ?>    
            </div>
            </body> 
            <html>

            