<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo $imgPath ?>/logo.jpg" type="image/png">
		<title><?php echo $title ?>	</title>
        <!-- Bootstrap CSS -->
        <?php include('include/style.css.php'); 
		$imgPath = site_url().'themes/fgckaduna/img';
		?>

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
						<h2>Events & News</h2>
						<div class="page_link">
							<a href="<?php echo site_url(); ?>">Home</a>
							<a href="<?php echo site_url().'category/events'; ?>">Events</a>
						</div>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        <section class="latest_blog_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Our Latest News</h2>
        			<p>There is a moment in the life of any aspiring astronomer that it is time to buy that first telescope. It’s exciting to think about setting up your own viewing station.</p>
        		</div>
        		<div class="row latest_blog_inner p-3">
                <?php foreach ($posts as $p): ?>
        			<div class="col-md-4 mt-3 shadow-sm">
        				<div class="l_blog_item">
        					<img class="img-fluid" src="<?php echo $p->image; ?>" alt="image">
        					<a class="date" href="#"><?php echo format_date($p->date); ?> | By Management</a>
        					<a href="<?php echo $p->url; ?>"><?php echo $p->title; ?></h4></a>
        					<p><?php echo shorten($news[0]->body, 150); ?> ...</p>
						<a href="<?php echo $p->url; ?>" class="btn btn-success btn-sm">Readmore</a>
						</div>
					</div>
                    <?php endforeach; ?>
        		</div>
        	</div>
        </section>
        <!--================End Latest Blog Area =================-->
       
				<!-- pagination start -->
				<?php if (!empty($posts)) { ?>
				<?php if (!empty($pagination['prev']) || !empty($pagination['next'])): ?>
				<div class="navigation pagination">
				<div class="nav-links">
				<?php if (!empty($pagination['prev'])): ?>
				<a class="prev page-numbers" href="?page=<?php echo $page - 1 ?>">«</a>
				<?php endif; ?>
				<span class="page-numbers"><?php echo $pagination['pagenum'];?></span>
				<?php if (!empty($pagination['next'])): ?>
				<a class="next page-numbers" href="?page=<?php echo $page + 1 ?>">»</a>
				<?php endif; ?>
				</div>
				</div>
				<?php endif; ?>
				<?php } ?>
				<!-- pagination ends -->
				
		
        
       <!--================ start footer Area  =================-->	
	   <footer class="footer-area p_120">
		<div class="container">
		   
			<div class="row footer-bottom d-flex justify-content-between align-items-center">
				<p class="col-lg-8 col-md-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | FGC Kaduna<a href="https://neoraxtech.com" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				<div class="col-lg-4 col-md-4 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
				   </div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->
	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<?php include('include/script.css.php') ?>
</body>
</html>