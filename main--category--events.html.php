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
		.gallery-item {
			margin-top: 30px;
			margin-bottom: 30px;
		}
		.gallery-item img{
			width: 100%;
			height: 240px;
			object-fit: cover;
			object-position: 50% 10%;
			border: 1px solid #28a745;
		}

		</style>
    </head>
    <body>
     
<!-- Collect the nav links, forms, and other content for toggling -->
	<!--================Header Menu Area =================-->
<?php include('include/navbar.html.php'); ?>
<!--================Header Menu Area =================--> 				       

        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Events & Activities</h2>
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
        			<h2>School Events/Activities</h2>
        			<p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station.</p>
        		</div>
        		<div class="row latest_blog_inner p-3">
					
				<?php foreach ($posts as $p): ?>
	
        			<div class="col-md-4 mt-3 shadow-sm">
        				<div class="l_blog_item">
        					<img class="img-fluid" src="<?php echo $p->image; ?>" alt="image">
							<a class="date" href="#"><?php echo format_date($p->date); ?>  |  By Management</a>
							<a href="<?php echo $p->url; ?>"> <h4><?php echo $p->title; ?> </h4></a>
        					
						</div>
					</div>
					
					<?php endforeach; ?>

				</div>
			</div>
			
			<div class="container p-4">
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
       <!--================ start footer Area  =================-->	
				</div>
		</section>
		
        <!--================End Latest Blog Area =================-->
       
       <!--================ start footer Area  =================-->	
	   <?php include('include/footer.html.php') ?>
	<!--================ End footer Area  =================-->
	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<?php include('include/script.css.php') ?>
</body>
</html>