<?php 
require("connection.php");
if(isset($_POST['submit']))
{
$subid=$_POST['sid'];
$artname=$_POST['artname'];
$artistname=$_POST['artistname'];
$desc=$_POST['dname'];
$price=$_POST['cname'];

$a=$_FILES['file']['name'];
move_uploaded_file($_FILES['file']['tmp_name'],"//Admin/template/pages/formsimage/".$a);
$sqlInsert="INSERT INTO `tbl_art`(`subid`, `artname`, `artistname`, `desc`, `price`,`image`) VALUES('$subid','$artname','$artistname','$desc','$price','$a')";
$queryInsert=mysqli_query($conn,$sqlInsert);
if($queryInsert)
{
  echo "<script>alert('Data inserted Successfully!!');window.location='addart.php'</script>";
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
              <li><a href="#">Add Art</a></li>
              <li><a href="#">About</a></li>
              <li><a href="#">My Artworks</a></li>
              <li><a href="#">My Account</a></li>
              <li><a href="logout.php">Signout</a></li>
              
             <!-- <li class="menu-has-children"><a href="">Pages</a>
               
              </li>	-->		          
            </ul>
          </nav><!-- #nav-menu-container -->		    		
        </div>
    </div>
  </header>
    <div class="registration-form">
        <h1>Add Arts</h1>
        <form action="#" method="POST">
                      <input type="text" class="form-control"name="artname" id="name" required placeholder="Name"onchange="Validstr();"/>            
                      <br><br>
            
                              
       <input type="text" class="form-control" name="artistname" id="name" required placeholder="Artist Name"onchange="Validstr();"/>
            <br><br>
            <input type="text" class="form-control"name="cname" id="name" required placeholder="Price" onchange="Validstr();"/> 
            <br><br>

                      <input type="text" class="form-control"name="dname" id="name" required placeholder="Description"onchange="Validstr();"/>
            <br>
            <label for="exampleFormControlFile1">Choose Image</label>
                      <input type="file" id="imgfile"  class="form-control-file" accept ="image/gif,image/jpg,image/jpeg,image/png" oninput="pic.src=window.URL.createObjectURL(this.files[0])" name="file">
                          <img id="pic" height=70px width=90px />

           <br>
           <button type="submit" name="submit">Submit</button>
                 
        
            </form>
            </div>
            </body> 
            <html>

            