<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo site_url()?>/themes/fgckaduna/css/bootstrap.css">
    <title>404 | Not Found</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="offset-lg-3 offset-md-2 offset-sm-3">
                <div class="mt-4">
                <a class="navbar-brand logo_h offset-lg-2" href="<?php echo site_url(); ?>"><img class="img img-fluid" src="<?php echo site_url()?>themes/fgckaduna/img/logo.jpg" alt="logo"></a>
                </div>
            <p class="mt-3 mb-3">Please search again, or would you like to try our <a href="<?php echo site_url() ?>">homepage</a> instead?</p>
            <?php echo search() ?>
            </div>
        </div>
    </div>
</div>    
</body>
</html>