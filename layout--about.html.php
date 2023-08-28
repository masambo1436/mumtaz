<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo site_url()?>themes/mumtaz/img/favicon.ico" type="image/png">
        <title><?php echo $title ?>	</title>
        <!-- Bootstrap CSS -->
        <?php include('include/style.css.php'); 
		$imgPath = site_url().'themes/mumtaz/img';
		?>

	<?php include('include/style.css.php'); ?>
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
       <?php include('include/navbar.html.php'); ?>
        <!--================Header Menu Area =================-->
        

        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>About Us</h2>
						<div class="page_link">
							<a href="<?php echo site_url(); ?>">Home</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        <!--================About Area =================-->
        <section class="about_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>About Al-Mumtaz (Vision)</h2>
        			<p>To be an exemplary citadel of knowledge that produces worldwide professionals who crown their professions with intensive memorization, all over the world, and understanding sincere practice of the knowledge of the glorious Qur'an, and Prophet's traditions: with enabling environment.</p>
        		</div>
        		<div class="row about_inner">
        			<div class="col-lg-6">
						<div class="accordion" id="accordionExample">
							<div class="card">
								<div class="card-header" id="headingOne">
									<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
									Awards
									<i class="lnr lnr-chevron-down"></i>
									<i class="lnr lnr-chevron-up"></i>
									</button>
								</div>

								<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
									<div class="card-body">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingTwo">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Management
									<i class="lnr lnr-chevron-down"></i>
									<i class="lnr lnr-chevron-up"></i>
									</button>
								</div>
								<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
									<div class="card-body">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingThree">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Alumnis
									<i class="lnr lnr-chevron-down"></i>
									<i class="lnr lnr-chevron-up"></i>
									</button>
								</div>
								<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
									<div class="card-body">
									Al-Mumtaz Educational Services is a unity school and co-educational secondary school for day and boarding students with good and qualitative standard.
									</div>
								</div>
							</div>
							<div class="card">
								<div class="card-header" id="headingfour">
									<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
									About
									<i class="lnr lnr-chevron-down"></i>
									<i class="lnr lnr-chevron-up"></i>
									</button>
								</div>
								<div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
									<div class="card-body">
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
									</div>
								</div>
							</div>
						</div>
        			</div> 
        			<div class="col-lg-6">
        				<div class="video_area" id="video">
							<img class="img-fluid" src="<?php echo $imgPath ?>/side-image.png" alt="">
							<a class="popup-youtube" href="https://www.youtube.com/watch?v=VufDd-QL1c0">
								<img src="<?php echo $imgPath ?>/icon/video-icon-1.png" alt="">
							</a>
						</div>
        			</div>
        		</div>
        		<div class="about_details">
        			<p>Al-Mumtaz Educational Services is among the first unity school founded by 
						the Federal Government and was established in January 1973 as a co-educational day 
						and boarding secondary school for students residing in Kaduna state and its environs.</p>
						<p> FGC since its inception has continued to maintain the culture of unity schools which 
							is to foster unity by bringing together the best and brightest children from all 
							backgrounds, ethnicities and religions under one roof. Al-Mumtaz Educational Services has a unique position 
							among other unity schools as it is situated in a state that reflects the true ethnic, 
							religious and cultural diversity of Nigeria.</p>
        		</div>
        	</div>
        </section>
        <!--================End About Area =================-->
        
        <!--================Testimonials Area =================-->
        <section class="testimonials_area p_120">
        	<div class="container">
        		<div class="testi_slider owl-carousel">
        			<div class="item">
        				<div class="testi_item">
							<img src="<?php echo $imgPath ?>/testimonials/Ahmad.jpg" alt="">
       						<h4>Principal</h4>
       						<ul class="list">
       							<li><a href="#"><i class="fa fa-star"></i></a></li>
       							<li><a href="#"><i class="fa fa-star"></i></a></li>
       							<li><a href="#"><i class="fa fa-star"></i></a></li>
       							<li><a href="#"><i class="fa fa-star"></i></a></li>
       							
       						</ul>
       						<p>The school principal is the highest-ranking administrator in an elementary, middle, or high school. Principals typically report directly to the school superintendent, but may report to the superintendent's designee, usually an associate superintendent, in larger school districts.</p>
        				</div>
        			</div>
        			<div class="item">
        				<div class="testi_item">
							<img src="<?php echo $imgPath ?>/testimonials/Sambo.jpg" alt="">
       						<h4>Vice Principal</h4>
       						<ul class="list">
       							<li><a href="#"><i class="fa fa-star"></i></a></li>
       							<li><a href="#"><i class="fa fa-star"></i></a></li>
       							<li><a href="#"><i class="fa fa-star"></i></a></li>
       							
       						</ul>
       						<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.</p>
        				</div>
        			</div>
        			<div class="item">
        				<div class="testi_item">
							<img src="<?php echo $imgPath ?>/testimonials/Ahmad.jpg" alt="">
       						<h4>Exam Officer</h4>
       						<ul class="list">
       							<li><a href="#"><i class="fa fa-star"></i></a></li>
       							<li><a href="#"><i class="fa fa-star"></i></a></li>
       						
       						</ul>
       						<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.</p>
        				</div>
        			</div>
					<div class="item">
        				<div class="testi_item">
							<img src="<?php echo $imgPath ?>/testimonials/Sambo.jpg" alt="">
       						<h4>Admission Officer</h4>
       						<ul class="list">
       							<li><a href="#"><i class="fa fa-star"></i></a></li>
       							
       						</ul>
       						<p>Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.</p>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Testimonials Area =================-->
        
      
       <!--================ start footer Area  =================-->	
	   <?php include('include/footer.html.php') ?>
	<!--================ End footer Area  =================-->
	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<?php include('include/script.css.php'); ?>
</body>
</html>