<?php
include "connection.php";

$n=$_SESSION['email'];

?>
<!DOCTYPE html>
	<html lang="zxx" class="no-js">
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
		<title>Paintings</title>

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
		</head>
		<body>


		<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

			  <header id="header" id="home">
			  	<div class="container header-top">
			  		<div class="row">
				  		<div class="col-6 top-head-left">
				  			<ul>
				  				<!-- <li><a href="#">Visit Us</a></li>
				  				<li><a href="#">Buy Ticket</a></li> -->
				  			</ul>
				  		</div>
				  		<div class="col-6 top-head-right">
				  			<ul>
		  						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
				  			</ul>
				  		</div>			  			
			  		</div>
			  	</div>
			  	<hr>
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="index.php">Home</a></li>
				          <li><a href="about.php">About</a></li>
				          <!-- <li><a href="gallery.php">GALLERY</a></li>
				          <li><a href="event.php">ARTISTS</a></li> -->
				          <li><a href="ticket.php">Paintings</a></li>
				          <!-- <li><a href="logindex.php">SINGIN</a></li> -->
						  <li><a href="myprofile.php">My Profile</a></li>
						  <li><a href="change-pass.php">Change Password</a></li>

						  <li>	  <?php
      
	  $select_rows = mysqli_query($conn, "SELECT * FROM `tbl_cart` where username='$n'") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>
<li>
<a href="viewcart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Cart <span><?=$row_count;?></span></span></a></li>
      ?>
<li>
<a href="viewcart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i> <span>Cart <span class="cart-quantity"value="<?=$sql;?>"></span></span></a></li>
						  <!-- <li><a href="checkout.php">My Cart</a></li> -->

						  <li><a href="logout.php">Signout</a></li>
				         

				          <!-- <li class="menu-has-children"><a href="">Pages</a> -->
				            <ul>
				              <li><a href="blog-single.html">Blog Single</a></li>
				              <li><a href="category.html">Category</a></li>
				              <li><a href="elements.html">Elements</a></li>
				            </ul>
				          </li>			          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Cart
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="ticket.html"> Cart</a></p>
						</div>											
					</div>
				</div>
			</section>
<body>
    <!-- <h2>Cart</h2> -->
    
<div class="container-fluid">
<div class="row">
<div class="col-md-10 col-11 mx-auto">
<div class="row mt-5 gx-3">
<!-- left side div -->

<div class="col-md-12 col-lg-8 col-11 mx-auto main_cart mb-lg-0 mb-5 shadow">

<?php 
$s="select * from tbl_cart where username='$n'";

$run=mysqli_query($conn,$s);
while($ru=mysqli_fetch_assoc($run)){
$id=$ru['id'];
  $pid=$ru['artid'];
  $pname=$ru['name'];
  $price=$ru['price'];
  $image=$ru['image'];

 

?>
    
 
            <div class="card p-4">


            <h2 class="py-4 font-weight-bold"></h2>
            <div class="row">
                <!-- cart images div -->

                <div class="col-md-5 col-11 mx-auto bg-light d-flex justify-content-center align-items-center shadow product_img">
                <img src="../Admin/template/pages/forms/image/<?php echo"$image";?>" class="img-fluid" alt="cart img">
                </div>


            

                <!-- cart product details -->
                <div class="col-md-7 col-11 mx-auto px-4 mt-2">
                <div class="row">
                <!-- product name  -->
                <div class="col-6 card-title">
                <h1 class="mb-4 product_name"><?php  echo"$pname"?></h1>
               
                </div>
                <!-- quantity inc dec -->
                <div class="col-2">
               Quantity<input type="number" name="quantity" style="width:70px" id="qty-<?php echo $id; ?>" value="1" onchange="varr(<?php echo $id;?>)" min="1",max="300" >
               <input type="hidden" id="price-<?php echo $id; ?>" value="<?php echo $price; ?>">
               <input type="hidden" id="total" name="total" value="0">
               
                </div>
            </div>
 

            <!-- //remover move and price -->
            <div class="row">
            <div class="col-8 d-flex justify-content-between remove_wish">
        
            <button style='font-size:15px'><a href="removecartitem.php?val=<?php echo $pid;?>" class="fas fa-trash-alt" style="color:red" role="Button"> REMOVE ITEM</a></button>

            <!-- <button style='font-size:24px'>Button <i class='fas fa-trash-alt'></i></button> -->


           
		 
		    <!-- Default switch -->

            
            </div>
            <div class="col-4 d-flex justify-content-end price_money">
            <h3>$<span id="itemval-<?php echo $id; ?>"><?php echo "$price";?> </span></h3>

            </div>
            </div>

    </div>
    </div>
    </div>
    <?php
}
    ?>

    <hr/>
    <!-- 2nd cart product -->

 </div>


<!-- right side div -->
<div class="col-md-12 col-lg-4 col-11 mx-auto mt-lg-0 mt-md-5">
<div class="right_side p-3 shadow bg-white">
<h2 class="product_name mb-5">The Total Amount Of</h2>
<div class="price_indiv d-flex justify-content-between">
<p>Product amount</p>

<p>$<span id="finalp">0.00</span></p>
</div>

<hr />

<button class="btn btn-primary text-uppercase">Checkout</button>
</div>
<!-- discount code part -->



</div>
</div>
</div>
</div>
<!-- discount code part -->



</div>
</div>
</div>
</div>




<!-- discount code ends -->

</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Optional JavaScript -->
<!-- Popper.js first, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

<script>
 function varr(cart)
    {
      
      var x=document.getElementById('qty-'+cart).value;
      
      x=parseInt(x);
      if(isNaN(x))
      {
        x=1
      }
      var price=document.getElementById('price-'+cart).value;
      price=parseInt(price);
     var total=x*price;
     document.getElementById('itemval-'+cart).innerHTML=total;
     

    var tot=document.getElementById('total').value;
    tot=parseInt(tot);
    tot=tot+total;

    document.getElementById('total').value=tot;
var f=document.getElementById('total').value;
document.getElementById('finalp').innerHTML=f;
 

    
     
      


    
    }
 </script>
 <script>
  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>
</body>
</html>

