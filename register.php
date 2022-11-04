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

if(!preg_match("/^[a-zA-Z]+ [a-zA-Z]+$/", $name)){
  echo"<script>alert('Enter correct name');window.location='register.php'</script>";
}
if(!preg_match("/^[6789][0-9]{9}$/", $phone)){
  echo"<script>alert('Enter valid phone no');window.location='register.php'</script>";
}
if(!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $email)){
  echo"<script>alert('Enter valid email address');window.location='register.php'</script>";
}
if(!preg_match("/^[a-zA-Z0-9\s\,\''\-]*$/", $address)){
  echo"<script>alert('Enter valid address');window.location='register.php'</script>";
}
// if(!preg_match("/^(\d{4}|\d{6})$/", $pincode)){
//   echo"<script>alert('Enter valid address');window.location='register.php'</script>";
 //}

$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number    = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8) {
  echo"<script>alert('Enter valid password');window.location='register.php'</script>";
}
if($password != $cpassword){
  echo"<script>alert('Passwords doesn't match');window.location='register.php'</script>";
}

$check_email = mysqli_query($conn, "SELECT email FROM `tbl_login` where email = '$email' ");
if(mysqli_num_rows($check_email) > 0){
echo"<script>alert('Email Already exists');window.location='register.php'</script>";
}
else{
 
$query2=mysqli_query($conn,"SELECT `name` FROM tbl_reg where name='".$name."'");
if(mysqli_num_rows($query2)==0)
{
 
  $query = mysqli_query($conn,"INSERT INTO tbl_reg(name,phone, address) VALUES('$name','$phone','$address')");
  $id=mysqli_insert_id($conn);
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

 if($qry==TRUE)
{
	echo "<script>alert('User registered Successfully!!');window.location='logindex.php'</script>";
}
else
{
	echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
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
              <li><a href="gallery.php">Artists</a></li>
              <li><a href="event.php">Paintings</a></li>
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
            <input type="text" name="name"  placeholder="Name" id="contact-name" onkeyup="validateName()" required>
            <br><br>
            <span id="name-error" style="color:red;"></span>
                              
            <input type="text" name="phone" placeholder="Phone Number"  id="contact-phone" onkeyup="validatephone()" required>
            <br><br>
            <span id="phone-error" style="color:red;"></span>
                        
            <input type="text" name="address" placeholder="Address"    id="contact-address" onkeyup="validateAddress()" required>
            <br><br>
            <span id="address-error" style="color:red;"></span>

            <input type="email" name="email" placeholder="Email" id="contact-email" onkeyup="validateEmail()" required> 
            <br><br>
            <span id="email-error"  style="color:red;"></span>

            <input type="password" name="password" placeholder="Password" id="contact-password" onkeyup="validatePassword()" required>
            <span id="password-error" style="color:red;"></span>
           <br><br>
            <input type="password" name="cpassword" placeholder="Confirm Password" id="contact-confirmpwd" onkeyup="validateConfirmpwd()" required>
            <span id="confirmpwd-error" style="color:red;" ></span>
           <br><br>
           
            <select id="iam" name="type" placeholder="I am" required="">
           
            <option value="">I am</option>
             <option value="customer">customer</option>
             <option value="artist">artist</option>
            </select>
            <button type="submit" name="submit">Registration</button>
            </form>
            </div>
            <script src="script.js"></script>
            </body> 
            <html>

            