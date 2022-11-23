<?php

include "connection.php";

//$n=$_GET['name'];
//$n=$_GET['username'];
// echo "$n";
// echo "$usr";
$n= $_SESSION['email'];
if(isset($_POST['submit']))
{
  $productname=$_POST['productname'];
  // echo "$productname";
  $sql2="select * from tbl_art where artname='".$productname."'";

  $ress=mysqli_query($conn,$sql2);
  $row=mysqli_fetch_array($ress);
  $pprice=$row['price'];
  $pid=$row['artid'];
  $pimg=$row['image'];


$sql3="INSERT INTO `tbl_cart`(`artid`, `username`, `name`,`price`,`image`) VALUES ('$pid','$n','$productname','$pprice','$pimg')";
$res2=mysqli_query($conn,$sql3);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap');
</style> -->
<!-- CSS only -->
<!-- JavaScript Bundle with Popper -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><strong>Botanical Garden</strong></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
          
</head>
    <body>
    

<div class="displayproducts">
<section class="fruit_section">
<div class="container">
  <h2 class="custom_heading" style="color:red">Book Now</h2>



<?php
$sql="select * from tbl_art ";
$run=mysqli_query($conn,$sql);
while($ru=mysqli_fetch_assoc($run)){
$pid=$ru['id'];
  $productname=$ru['p_name'];
  $price=$ru['price'];
  //$stock=$ru['stock'];
  
  $description=$ru['desc'];
  $image=$ru['image'];



echo '<div class="shadow p-3 mb-5 bg-white rounded">
  <div class="row layout_padding2">
<div class="col-md-8">
      <div class="fruit_detail-box">
        <h3 id="heroname">Productname:
          '.$productname.'
        </h3>
        <p class="mt-4 mb-5">
        
           <h2>Price: <b>'.number_format($price).'</b>/-<br></h2>
         
        
        </p>
        <span id="stock" style="color:red"></span><br>
       
    
        <div>
        <form method="post" action="">
        <input type="hidden" name="productname" value="'.$productname.'">

      <button type="submit" name="submit" class="btn btn-warning" id="viewbtn">
        Add to Cart
      </button>
      </form>
    </div>
  </div>
</div>
<div class="container" style="width: 200px">
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
 
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="../Admin/pages/forms/image/'.$image.'" class="d-block w-100" alt="...">
      
    </div>
   
  </div>
 
</div>
</div>
</div><br><br>
</div>';
}
  ?>
  </div>
   </div>
</div>
</section>
</div>

  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../../vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
  <script src="../../js/settings.js"></script>
  <script src="../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../js/file-upload.js"></script>
  <script src="../../js/typeahead.js"></script>
  <script src="../../js/select2.js"></script>
  <!-- End custom js for this page-->
  <script>
  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

</body>
</html>