<?php if (!defined('HTMLY')) die('HTMLy'); ?>

<?php if (isset($is_category)):?>
    <header class="page-header"><h1 class="page-title"><?php echo i18n('Category');?>: <?php echo $category->title;?></h1><div class="taxonomy-description"><?php echo $category->body;?></div></header>
<?php endif;?>

<?php foreach ($posts as $p): ?>
<article class="post type-post hentry <?php if (!empty($p->image) || !empty ($p->audio) || !empty ($p->video)):?>has-post-thumbnail<?php endif;?>">
    <?php if (!empty($p->image)):?>
    <div class="post-thumbnail">
        <img style="width:100%;" title="<?php echo $p->title; ?>" alt="<?php echo $p->title; ?>" class="attachment-post-thumbnail wp-post-image" src="<?php echo $p->image; ?>">
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
    <?php if (!empty($p->link)) { ?>
    <header class="entry-header">
        <div class="post-link"><h2 class="entry-title"><a target="_blank" href="<?php echo $p->url; ?>"><?php echo $p->title; ?></a></h2></div>
    </header>
    <?php } else { ?>
    <header class="entry-header">
        <h2 class="entry-title"><a href="<?php echo $p->url; ?>"><?php echo $p->title; ?></a></h2>
    </header>
	<?php } ?>

<?php endforeach; ?>
