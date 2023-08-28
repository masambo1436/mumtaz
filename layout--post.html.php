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

    <?php include('include/style.css.php'); ?>
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
       <?php include('include/navbar.html.php'); ?>
        <!--================Header Menu Area =================-->
        
        <!--================Testimonials Area =================-->
        <section class="testimonials_area p_120">
        	<div class="container">
        		<div class="testi_slider owl-carousel">
        			<div class="item">
        				<div class="testi_item">
							<img style="height: 20%; width: 100%; object-fit:cover; object-position:0 60%" src="<?php echo $p->image ?>" alt="">
                            <h2 class="text-success"><?php echo $p->title; ?></h2>
                            <small class="text-success"><i class="fa fa-calendar-check"></i> <?php echo date('d-F-Y', $p->date) ?></small>
                            <p><?php echo $p->body; ?></p>
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
