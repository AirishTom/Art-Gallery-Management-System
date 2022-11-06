<?php
include("connection.php");

if(isset($_POST['submit']))
{
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword =$_POST['cpassword'];
$type=$_POST['type'];

//  $a = "INSERT INTO `tbl_reg`( `name`, `phone`, `address`) VALUES('$name','$phone','$address')";
//  $sql=mysqli_query($conn,$a);
// $id = mysqli_insert_id($conn);
//  $sql1 = "INSERT INTO `tbl_login`(`reg_id`,`email`,`password`,`type`) VALUES ('$id','$email','$password','$type')";
//  $qry = mysqli_query($conn,$sql1);

 $query2=mysqli_query($conn,"SELECT `name` FROM tbl_reg where name='".$name."'");
 if(mysqli_num_rows($query2)==0)
 {
  
  $query = mysqli_query($conn,"INSERT INTO tbl_reg(name,phone, address,email) VALUES('$name','$phone','$address','$email')");
  $sql1 = "INSERT INTO `tbl_login`(`reg_id`,`email`,`password`,`type`) VALUES ('$id','$email','$password','$type')";
  $qry = mysqli_query($conn,$sql1);
 }
 else
 {
   echo "<script>
   alert('User name already exist');
   window.location.href='register.php';
  </script>";
  }
 

 if($query==TRUE)
{
	echo "<script>alert('User registered Successfully!!');window.location='logindex.php'</script>";
}
else
{
	echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
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
    
<title>REGISTRATION FORM</title>
<link rel="stylesheet" type="text/css" href="./style.css">
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
              <li><a href="logindex.php">Sign in</a></li>
              <li class="menu-active"><a href="register.php">Sign up</a></li>

              <!-- <li><a href="contact.php">Contact</a></li> -->
             <!-- <li class="menu-has-children"><a href="">Pages</a>
               
              </li>	-->		          
            </ul>
          </nav><!-- #nav-menu-container -->		    		
        </div>
    </div>
  </header>
    <div class="registration-form">
        <h1>registration form</h1>
        <form action="#" method="POST">
            <input type="text" name="name" id="name" placeholder="Name" required onchange="Validstr()";/>
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
                        
            <input type="text" name="phone" placeholder="Phone Number"  id="phno" required onchange="Validphone()"/>
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

           
            <input type="text" name="address" placeholder="Address" required="">
            <br><br>
            <input type="email" name="email" placeholder="Email" required="">
            <br><br>
            <input type="password" name="password" placeholder="Password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/>
           <br><br>
            <input type="password" name="cpassword" placeholder="Confirm Password" required="" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Should be same as password"/><br><br>
           
            <select id="iam" name="type" placeholder="I am" required="">
           
            <option value="">I am</option>
             <option value="customer">customer</option>
             <option value="artist">artist</option>
            </select>
            <button type="submit" name="submit">Registration</button>
            </form>
            </div>
            </body> 
            <html>

            