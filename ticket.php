<?php
$update=false;

	include "connection.php";

	$n=$_SESSION['email'];
	if(!isset($n)){
    session_destroy();
    header('location:../logindex.php');
    }


//$n=$_GET['name'];
//$n=$_GET['username'];
// echo "$n";
// echo "$usr";
$n= $_SESSION['email'];
if(isset($_POST['submit']))
{
  $productname=$_POST['p_name'];
  // echo "$productname";
  $sql2="select * from tbl_art where artname='".$productname."'";


  $ress=mysqli_query($conn,$sql2);
  $row=mysqli_fetch_array($ress);
  $pprice=$row['price'];
  $pid=$row['art_id'];
  $pimg=$row['image'];


$sql3="INSERT INTO `tbl_cart`(`artid`, `username`, `name`,`price`,`image`) VALUES ('$pid','$n','$productname','$pprice','$pimg')";
$res2=mysqli_query($conn,$sql3);
if($res2)

    {
        echo "<script>alert('art Added to cart Successfully!!');</script>";
      }
      }

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
								Paintings
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="ticket.html"> Paintings</a></p>
						</div>											
					</div>
				</div>
			</section>
			<!-- End banner Area -->	


			<!-- Start upcoming-exibition Area -->
			<section class="upcoming-exibition-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Paintings</h1>
								<p>Who are in extremely love with eco friendly system.</p>
							</div>
						</div>
					</div>			
					
          
					
			<div class="conatainer py-5">
				<div class="row mt-4">
					
					<?php 
					$query= "SELECT * FROM tbl_art";
					$query_run = mysqli_query($conn, $query);
					$check_tbl_art = mysqli_num_rows($query_run) > 0;
					
					
				if($check_tbl_art)
				{
				   while($row = mysqli_fetch_assoc($query_run))
				   {
                       
						?>

                       


						<div class="col-md-3 mt-3">
					
							<div class="card">
							<img src="../Admin/template/pages/forms/image/<?php echo $row['image'];?> " width="253px" height="200px" alt="Art Images"/>
								<div class="card-body">
								<h5 class="card-title" name="product_name"><?php echo $row['artname']; ?></h5>
								<h4 class="card-title" name="product_price" ><?php echo $row['artistname']; ?></h4>

								
								<h3 class="card-title" name="product_image"><?php echo $row['price']; ?></h3>
								<h6 class="card-title">Stock:<?php echo $row['quantity']; ?></h6>
								<p class="card-text"><?php echo $row['desc']; ?><br><br>

								<form method="post" action="">

								<input type="hidden" name="p_name" value="<?=$row['artname'];?>" >

                   <a  role="button" ><button type="submit" name="submit" class="btn btn-primary" id="viewbtn"></a>
                      Add to Cart
                    </button>


							    <!-- <input type="submit" class="btn" value="add to cart" name="add_to_cart"> -->
	
							   <!-- <a href="cart.php"   name="add_to_cart" class="btn btn-default add-to-cart"><i name="add_to_cart" class="fa fa-shopping-cart"></i>Add to Cart</a> -->






								</p>
								</div>	  
							</div>
						</div>

						</form>

						<?php
					  
				   }
				}
				else
				{
					echo "No Art Found";
				}

				

					?>
					
					 

				
                </div>
            </div>

	
					

           


					<!--<div class="row">
						<div class="col-lg-4 col-md-6 single-exhibition">
							<div class="thumb">
								<img class="img-fluid" src="img/pages/ex1.jpg" alt="">						
							</div>
							<p class="date">10 Jan 2018</p>
							<a href="#"><h4>Blind Artist Draws Colorful Paintings</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consec teturadip isicing elit, sed do eiusmod tempor.
							</p>
							<div class="meta-bottom d-flex justify-content-start">
								<p class="price">$45.00</p>
							</div>									
						</div>
						<div class="col-lg-4 col-md-6 single-exhibition">
							<div class="thumb">
								<img class="img-fluid" src="img/pages/ex2.jpg" alt="">						
							</div>
							<p class="date">10 Jan 2018</p>
							<a href="#"><h4>Blind Artist Draws Colorful Paintings</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consec teturadip isicing elit, sed do eiusmod tempor.
							</p>
							<div class="meta-bottom d-flex justify-content-start">
								<p class="price">$45.00</p>
							</div>									
						</div>
						<div class="col-lg-4 col-md-6 single-exhibition">
							<div class="thumb">
								<img class="img-fluid" src="img/pages/ex3.jpg" alt="">						
							</div>
							<p class="date">10 Jan 2018</p>
							<a href="#"><h4>Blind Artist Draws Colorful Paintings</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consec teturadip isicing elit, sed do eiusmod tempor.
							</p>
							<div class="meta-bottom d-flex justify-content-start">
								<p class="price">$45.00</p>
							</div>									
						</div>	
						<div class="col-lg-4 col-md-6 single-exhibition">
							<div class="thumb">
								<img class="img-fluid" src="img/pages/ex4.jpg" alt="">						
							</div>
							<p class="date">10 Jan 2018</p>
							<a href="#"><h4>Blind Artist Draws Colorful Paintings</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consec teturadip isicing elit, sed do eiusmod tempor.
							</p>
							<div class="meta-bottom d-flex justify-content-start">
								<p class="price">$45.00</p>
							</div>									
						</div>
						<div class="col-lg-4 col-md-6 single-exhibition">
							<div class="thumb">
								<img class="img-fluid" src="img/pages/ex5.jpg" alt="">						
							</div>
							<p class="date">10 Jan 2018</p>
							<a href="#"><h4>Blind Artist Draws Colorful Paintings</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consec teturadip isicing elit, sed do eiusmod tempor.
							</p>
							<div class="meta-bottom d-flex justify-content-start">
								<p class="price">$45.00</p>
							</div>									
						</div>
						<div class="col-lg-4 col-md-6 single-exhibition">
							<div class="thumb">
								<img class="img-fluid" src="img/pages/ex6.jpg" alt="">						
							</div>
							<p class="date">10 Jan 2018</p>
							<a href="#"><h4>Blind Artist Draws Colorful Paintings</h4></a>
							<p>
								Lorem ipsum dolor sit amet, consec teturadip isicing elit, sed do eiusmod tempor.
							</p>
							<div class="meta-bottom d-flex justify-content-start">
								<p class="price">$45.00</p>
							</div>									
						</div>																	
					</div>
				</div>	
			</section>-->
			<!-- End upcoming-exibition Area -->
			
			
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Art Gallery is the place where the arts or crafts of the artists can be displayed for visitors view.
								</p>
								
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>	
			<script src="js/imagesloaded.pkgd.min.js"></script>
			<script src="js/justified.min.js"></script>					
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>		
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	

			
			<script>
  if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>




		</body>
	</html>



