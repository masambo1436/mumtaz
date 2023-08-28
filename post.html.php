<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="<?php echo site_url()?>themes/mumtaz/img/favicon.ico" type="image/png">
		<title><?php echo $title ?></title>
        <!-- Bootstrap CSS -->
        <?php include('include/style.css.php'); 
		$imgPath = site_url().'themes/fgckaduna/img';
        ?>
        
        <style>
        .post-title h1{
            font-size: 25px;
            color: #000;
        }
        .post-image img{
            width: 95%;
            margin-bottom: 20px;
        }
        .post-share a{
            padding: 3px;
        }
        </style>
    </head>
    <body>
     
<!-- Collect the nav links, forms, and other content for toggling -->
	<!--================Header Menu Area =================-->
<?php include('include/navbar.html.php'); ?>
<!--================Header Menu Area =================--> 				       

<div class="container">
    <div class="row">
        <div class="col-md-12 shadow p-4">
            <div class="post-title">
                <?php if (!empty($p->link)) {?>
                <div class="post-link"><h1 class="entry-title"><a href="<?php echo $p->link ?>" target="_blank"><?php echo $p->title; ?></a></h1></div>
                <?php } else { ?>
                <h1 class="entry-title"><?php echo $p->title; ?></h1>
                <?php } ?>
            </div>
            <div class="post-image">
           <?php if (!empty($p->image) || !empty ($p->audio) || !empty ($p->video)):?><?php endif;?>
            <?php if (!empty($p->image)):?>
            <div class="post-thumbnail">
            <img title="<?php echo $p->title; ?>" alt="<?php echo $p->title; ?>" src="<?php echo $p->image; ?>">
            </div>
            <?php endif; ?>
            <?php if (!empty($p->audio)):?>
            <div class="post-thumbnail">
            <iframe width="100%" height="200px" class="embed-responsive-item" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=<?php echo $p->audio;?>&amp;auto_play=false&amp;visual=true"></iframe>
            </div>
            <?php endif; ?>
            <?php if (!empty($p->video)):?>
            <div class="post-thumbnail">
            <iframe width="100%" height="315px" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo get_video_id($p->video); ?>" frameborder="0" allowfullscreen></iframe>
            </div>
            <?php endif; ?>
            <?php if (!empty($p->quote)):?>
            <div class="post-blockquote">
            <blockquote class="quote"><?php echo $p->quote ?></blockquote>
            </div>
            <?php endif; ?>
            </div>
            <div class="post-content">
            <?php echo $p->body; ?>
            </div>
            <div class="post-share p-3">
                <a href="http://"><i class="text-primary fa-2x fa fa-facebook-square"></i></a>
                <a href="http://"><i class="text-dark fa-2x fa fa-twitter-square"></i></a>
                <a href="http://"><i class="text-danger fa-2x fa fa-envelope-square"></i></a>
            </div>
        </div>
    </div>

    <div class="related entry-content">
        <hr>
        <p><strong><?php echo i18n('Related_posts');?></strong></p>
        <?php echo get_related($p->related);?>
    </div>
</div>


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

 

