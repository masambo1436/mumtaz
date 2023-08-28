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

		<style>
		.l_galler_item img{
		width: 100%;
		height: 250px;
		border: 3px solid #4dbf1c;
		object-fit: cover;
		object-position: 0px 10%;
		padding: 5px;
		}
		.l_gallery_title h4{
			color: black;
			padding: 5px;
			text-align: center;
		}
		</style>
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
						<h2>Our Gallery</h2>
						<div class="page_link">
							<a href="<?php echo site_url(); ?>">Home</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
		 <!--================Latest Blog Area =================-->
		 <section class="latest_blog_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Photos</h2>
        			<p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station.</p>
        		</div>
        		<div class="row latest_blog_inner">
        			
				<?php 
				foreach ($posts as $p): ?>
					<div class="col-lg-4 col-md-6 p-2">
        				<div class="l_galler_item shadow">
        					<img class="img-fluid" src="<?php echo $p->image ?>" alt="image">
						</div>
						<div class="l_gallery_title">
							<h4><?php echo $p->title ?></h4>
						</div>
        			</div>
        	<?php endforeach;?>
        		</div>
        	</div>
        </section>
        <!--================End Latest Blog Area =================-->
		<div class="container mt-2 mb-2">
				 <!-- pagination start --> 
				 <?php if (!empty($posts)) { ?>
                    <?php if (!empty($pagination['prev']) || !empty($pagination['next'])) : ?>
                        <div class="navigation pagination">
                            <div class="nav-links">
                                <?php if (!empty($pagination['prev'])) : ?>
                                    <a class="prev page-numbers" href="?page=<?php echo $page - 1 ?>"><button class="btn btn-secondary px-4 py-1 rounded"><i class="fa fa-angle-left"></i></button></i></a>
                                <?php endif; ?>
                                <?php if (!empty($pagination['next'])) : ?>
                                    <a class="next page-numbers" href="?page=<?php echo $page + 1 ?>"><button class="btn btn-secondary px-4 py-1 rounded"><i class="fa fa-angle-right"></i></button></a>
                                <?php endif; ?>
                                <p class="page-numbers"><?php echo $pagination['pagenum'];?></p>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php } ?>
                <!-- pagination ends -->
		</div>

       <!--================ start footer Area  =================-->	
	   <?php include('include/footer.html.php') ?>
	<!--================ End footer Area  =================-->
	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<?php include('include/script.css.php') ?>
</body>
</html>