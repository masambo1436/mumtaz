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
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
		<?php include('include/navbar.html.php'); ?>
		<!--================Header Menu Area =================-->
	
	
        <!--================Home Banner Area =================-->
        <section class="home_banner_area">
		<div class="container-fluid" id="slider">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center breaking-news bg-white">
                    <div class="d-flex flex-row flex-grow-1 flex-fill bg-success py-1 text-white px-2 news">
                        <span class="d-flex align-items-center" style="width: 80px">&nbsp;News >></span>
                    </div>
                    <marquee class="news-scroll" behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                    <?php $breaking = get_category("News",1,7, false); 
                    $heading = $breaking[0]->title;
                    $id = $breaking[0]->url;
                  ?>
                <a style="color: black" href='<?php echo $id; ?>'><?php echo $heading ?> </a>
                <i class="fa fa-dot-circle text-danger ml-2 mr-2"></i>
                
                    </marquee>
                </div>
            </div>
        </div>
	</div>
	
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h3>We promote a pious generation that propagate the <br />teaching of the Holy Prophet MUHAMMAD (S.A.W)</h3>
						<p>To be an exemplary citadel of knowledge that produces worldwide professionals.</p>
						<a class="main_btn" href="">Donate</a>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        
        <!--================Courses Area =================-->
        <section class="courses_area p_120">
        	<div class="container-fluid">
        		<div class="main_title">
        			<h2>About Al-Mumtaz</h2>
        		</div>
				
					<div class="row mission_area">
					<div class="col-md-6 shadow">
						<img class="img img-fluid" src="<?php echo $imgPath ?>/side-image.png" alt="image">
					</div>
						<div class="col-md-5 m-4 p-3">
							<h1 class="text-success text-center">Mission <i class="fa fa-eye"></i> </h1>
							<p>To promote a pious generation that propagate the teaching of the Holy Prophet MUHAMMAD (S.A.W). This will be based of the understanding of the pious predecessors, and to attain excellence in both Islamic and modern Education.</p>
							<div class="mt-3">
							<p><i class="fa fa-check text-primary me-3"></i> Aspiring for excellence.</p>
							<p><i class="fa fa-check text-primary me-3"></i> Learning with ethics and virtues.</p>
							<p><i class="fa fa-check text-primary me-3"></i> Memorizing the Glorious Qur'an.</p>
							<p><i class="fa fa-check text-primary me-3"></i> Unleashing Potentials.</p>
							<p><i class="fa fa-check text-primary me-3"></i> Maintaining Discipline.</p>
							<p><i class="fa fa-check text-primary me-3"></i> Time Management.</p>
							<p><i class="fa fa-check text-primary me-3"></i> Accountability.</p>
							<p><i class="fa fa-check text-primary me-3"></i> Zeal.</p>
							<a class="btn btn-primary btn-sm rounded-pill py-2 px-5 mt-3" href="<?php echo site_url(); ?>about">Read More</a>
							</div>
						</div>
					</div>
					
        	</div>
        </section>
        <!--================End Courses Area =================-->
        
        <!--================Team Area =================-->
        <section class="team_area p_120 shadow">
        	<div class="container">
        		<div class="main_title">
        			<h2>Meet The Management</h2>
        			<p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station.</p>
        		</div>
        		<div class="row team_inner">
        			<div class="col-lg-3 col-sm-6">
        				<div class="team_item">
        					<div class="team_img">
        						<img class="rounded-circle" src="<?php echo $imgPath ?>/team/Ahmad.jpg" alt="image">
        						<div class="hover">
        							<a href="#"><i class="fa fa-facebook"></i></a>
        							<a href="#"><i class="fa fa-twitter"></i></a>
        							<a href="#"><i class="fa fa-linkedin"></i></a>
        						</div>
        					</div>
        					<div class="team_name">
        						<h4>Ethel Davis</h4>
        						<p>Principal</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-sm-6">
        				<div class="team_item">
        					<div class="team_img">
        						<img class="rounded-circle" src="<?php echo $imgPath ?>/team/Sambo.jpg" alt="image">
        						<div class="hover">
        							<a href="#"><i class="fa fa-facebook"></i></a>
        							<a href="#"><i class="fa fa-twitter"></i></a>
        							<a href="#"><i class="fa fa-linkedin"></i></a>
        						</div>
        					</div>
        					<div class="team_name">
        						<h4>Ethel Davis</h4>
        						<p>Vice Principal</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-sm-6">
        				<div class="team_item">
        					<div class="team_img">
        						<img class="rounded-circle" src="<?php echo $imgPath ?>/team/Ahmad.jpg" alt="image">
        						<div class="hover">
        							<a href="#"><i class="fa fa-facebook"></i></a>
        							<a href="#"><i class="fa fa-twitter"></i></a>
        							<a href="#"><i class="fa fa-linkedin"></i></a>
        						</div>
        					</div>
        					<div class="team_name">
        						<h4>Ethel Davis</h4>
        						<p>Exam Officer</p>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-3 col-sm-6">
        				<div class="team_item">
        					<div class="team_img">
        						<img class="rounded-circle" src="<?php echo $imgPath ?>/team/Sambo.jpg" alt="image">
        						<div class="hover">
        							<a href="#"><i class="fa fa-facebook"></i></a>
        							<a href="#"><i class="fa fa-twitter"></i></a>
        							<a href="#"><i class="fa fa-linkedin"></i></a>
        						</div>
        					</div>
        					<div class="team_name">
        						<h4>Ethel Davis</h4>
        						<p>Admission Officer</p>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
        <!--================End Team Area =================-->
        
		<style>
	
		</style>
        <!--================Latest Blog Area =================-->
        <section class="latest_blog_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Our Latest News</h2>
        			<p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station.</p>
        		</div>
        		<div class="row latest_blog_inner p-3">
					<?php 
					$news = get_category("News",1,16, false); 
					if(count($news) > 1){

					?>
        			<div class="col-md-4 mt-3 shadow-sm">
        				<div class="l_blog_item">
        					<img class="img-fluid" src="<?php echo $news[0]->image; ?>" alt="image">
        					<a class="date" href="#"><?php echo format_date($news[0]->date); ?> | By Management</a>
        					<a href="<?php echo $news[0]->url; ?>"><h4><?php echo $news[0]->title; ?></h4></a>
        					<p><?php echo shorten($news[0]->body, 150); ?> ...</p>
						<a href="<?php echo $news[0]->url; ?>" class="btn btn-success btn-sm">Readmore</a>
						</div>
					</div>

					<div class="col-md-4 mt-3 shadow-sm">
        				<div class="l_blog_item">
        					<img class="img-fluid" src="<?php echo $news[1]->image; ?>" alt="image">
        					<a class="date" href="#"><?php echo format_date($news[1]->date); ?> | By Management</a>
        					<a href="<?php echo $news[1]->url; ?>"><h4><?php echo $news[1]->title; ?></h4></a>
        					<p><?php echo shorten($news[1]->body, 150); ?> ...</p>
						<a href="<?php echo $news[1]->url; ?>" class="btn btn-success btn-sm">Readmore</a>
						</div>
					</div>

					<div class="col-md-4 mt-3 shadow-sm">
        				<div class="l_blog_item">
        					<img class="img-fluid" src="<?php echo $news[2]->image; ?>" alt="image">
        					<a class="date" href="#"><?php echo format_date($news[2]->date); ?> | By Management</a>
        					<a href="<?php echo $news[2]->url; ?>"><h4><?php echo $news[2]->title; ?></h4></a>
        					<p><?php echo shorten($news[2]->body, 150); ?> ...</p>
						<a href="<?php echo $news[2]->url; ?>" class="btn btn-success btn-sm">Readmore</a>
						</div>
					</div>
					<?php }?>

        		</div>
        	</div>
        </section>
        <!--================End Latest Blog Area =================-->
        
        <!--================Impress Area =================-->
        <section class="impress_area p_120">
        	<div class="container">
        		<div class="impress_inner text-center">
					<h2>Al-Mumtaz Educational Services</h2>
					<p>Al-Mumtaz Educational Services is among the first unity school 
						founded by the Federal Government and was established in January 1973 as 
						a co-educational day and boarding secondary school for students residing 
						in Nasarawa state and its environs.</p>
					
        		</div>
        	</div>
        </section>
        <!--================End Impress Area =================-->
        
        <!--================ start footer Area  =================-->	
        <?php include('include/footer.html.php') ?>
		<!--================ End footer Area  =================-->
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <?php include('include/script.css.php') ?>
    </body>
</html>