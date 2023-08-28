<?php if (!defined('HTMLY')) die('HTMLy'); ?>
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
        <div class="col-lg-12 mt-4">
            <div class="entry-content">
            <p>Please search to find what you're looking for or visit our <a href="<?php echo site_url() ?>">homepage</a> instead.</p>
            <?php echo search() ?>
            </div>
        </div>
    </div>
</div>    
</body>
</html>