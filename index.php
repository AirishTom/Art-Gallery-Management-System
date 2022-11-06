	<?php
	include "connection.php";
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
		<title>Art Gallery</title>

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

			  <header id="header" id="home">
			  	<div class="container header-top">
			  		<div class="row">
				  		
				  		<div class="col-12 top-head-right">
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
				      <!--<div id="logo">
				        <a href="index.html"><img src="img/logo.jpg" alt="" title="" /></a>
				      </div>-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				      <nav id="nav-menu-container"> 
						  
				        <ul class="nav-menu">
				          <li>

						   <!-- class="menu-active">						 -->
						 

						<a href="index.php">Home</a></li>
				          <li><a href="about.php">About</a></li>
				          <!-- <li><a href="event.php">Artists</a></li> -->
				          <li><a href="ticket.php">Paintings</a></li>
				          <!-- <li><a href="logindex.php">Sign in</a></li>
				          <li><a href="register.php">Sign up</a></li> -->
				          <!-- <li><a href="contact.php">Contact</a></li> -->
						  <li><a href="myprofile.php">My Profile</a></li>
						  <li><a href="change-pass.php">Change Password</a></li>
						  <li><a href="logout.php">Signout</a></li>


						  <!-- <li><img src="/artgallery/customer/cart/a.png" height="30px" width="30px" alt=""></li> -->

				         <!-- <li class="menu-has-children"><a href="">Pages</a>
				           
				          </li>	-->		          
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						 <div class="banner-content col-lg-8">
							<!--<h6 class="text-white">WELCOME TO ART GALLERY</h6>-->	
							<h1 class="text-white">
								WELCOME TO ART GALLERY				
							</h1>
							<p class="pt-20 pb-20 text-white">

							<?php
					
					$currentuser=$_SESSION['email'];
					$sql="SELECT * FROM `tbl_login` WHERE email='$currentuser'";
					$result=mysqli_query($conn,$sql);
					if($result)
					{
						if(mysqli_num_rows($result) > 0)
						{
							while($row=mysqli_fetch_array($result))
							{
								?>
								<h1 style="color:#f2f2f2">Hai, <?php echo$row['email'];?></h1>
								<?php
							}
						}
					}
					?>



							</p>
							<!--<a href="#" class="primary-btn text-uppercase">Get Started</a> -->	
						</div>											
					</div>
				</div>					
			</section>
			<!-- End banner Area -->	

			<!-- Start service Area -->
			<!-- <section class="service-area pt-100" id="about">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="single-service">
							  <span class="lnr lnr-clock"></span> 
							  <h4>ARTS</h4>
							  <p>
								selling the work of recognized artists
							  </p>						 	
							  <div class="overlay">
							    <div class="text">
							    	<br><br><br><br><p>
							    		Ontime delivery of Artistic Works to customers
							    	</p> -->
							    <!--<a href="#" class="text-uppercase primary-btn">Buy ticket</a>-->
							    <!-- </div>
							  </div>
							</div>							
						</div>
						<div class="col-lg-4">
							<div class="single-service">
							  <span class="lnr lnr-rocket"></span>
							  <h4>Ongoing Exhibitions</h4>
							  <p>
							  	Mon - Fri: 10.00am to 05.00pm
								Sat: 12.00pm to 03.00 pm
								Sunday Closed
							  </p>						 	
							  <div class="overlay">
							    <div class="text">
							    	<br><br><br><br><p>
							    		exhibition is traditionally the space in which art objects meet an audience
							    	</p> -->
							    	<!--<a href="#" class="text-uppercase primary-btn">Buy ticket</a>-->
							    <!-- </div>
							  </div>
							</div>							
						</div>
						<div class="col-lg-4">
							<div class="single-service">
							  <span class="lnr lnr-briefcase"></span>
							  <h4>Openning Events</h4>
							  <p>
							  	Mon - Fri: 10.00am to 05.00pm
								Sat: 12.00pm to 03.00 pm
								Sunday Closed
							  </p>						 	
							  <div class="overlay">
							    <div class="text">
									<br><br><br><br><p>
							    		Up-To-Date Opening Events........******!
							    	</p> -->
							    <!--<a href="#" class="text-uppercase primary-btn">Buy ticket</a>-->
							    <!-- </div>
							  </div>
							</div>							
						</div>												
					</div>
				</div>	
			</section> -->
			<!-- End service Area -->
			
			<!-- Start quote Area -->
			<!-- <section class="quote-area section-gap">
				<div class="container">				
					<div class="row">
						<div class="col-lg-6 quote-left">
							<h1>
								<span>The aim of Art</span><br>
								is to represent <span>not the</span>outward<br>
								apperance of things, <span> but their inward significance</span>.
							</h1>
						</div>
						<div class="col-lg-6 quote-right">
							<p>
								Art is a diverse range of human activity, and resulting product, that involves creative or imaginative talent expressive of technical proficiency, beauty, emotional power, or conceptual ideas. 
							</p>
						</div>
					</div>
				</div>	
			</section> -->
			<!-- End quote Area -->

			
			
			
			<!-- Start gallery Area -->
			<!-- <section class="gallery-area section-gap" id="gallery">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10 text-white">Our Exhibition Gallery</h1>
								<p>Explore the works of Artists.Latest trending Artistics Artworks of the Artists can be Explored..! </p>
							</div>
						</div>
					</div>						
					<div id="grid-container" class="row">
						<a class="single-gallery" href="img/g1.jpg"><img class="grid-item" src="img/g1.jpg"></a>
						<a class="single-gallery" href="img/g2.jpg"><img class="grid-item" src="img/g2.jpg"></a>
						<a class="single-gallery" href="img/g3.jpg"><img class="grid-item" src="img/g3.jpg"></a>
						<a class="single-gallery" href="img/g4.jpg"><img class="grid-item" src="img/g4.jpg"></a>
						<a class="single-gallery" href="img/g5.jpg"><img class="grid-item" src="img/g5.jpg"></a>
						<a class="single-gallery" href="img/g6.jpg"><img class="grid-item" src="img/g6.jpg"></a>
						<a class="single-gallery" href="img/g7.jpg"><img class="grid-item" src="img/g7.jpg"></a>
						<a class="single-gallery" href="img/g8.jpg"><img class="grid-item" src="img/g8.jpg"></a>
						<a class="single-gallery" href="img/g9.jpg"><img class="grid-item" src="img/g9.jpg"></a>
						<a class="single-gallery" href="img/g10.jpg"><img class="grid-item" src="img/g10.jpg"></a>
						<a class="single-gallery" href="img/g11.jpg"><img class="grid-item" src="img/g11.jpg"></a>
						<a class="single-gallery" href="img/g12.jpg"><img class="grid-item" src="img/g12.jpg"></a>
						<a class="single-gallery" href="img/g4.jpg"><img class="grid-item" src="img/g4.jpg"></a>
						<a class="single-gallery" href="img/g5.jpg"><img class="grid-item" src="img/g5.jpg"></a>						
					</div>	
				</div>	
			</section> -->
			<!-- End gallery Area -->
			

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
								<p class="footer-text">
									
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
		</body>
	</html>



