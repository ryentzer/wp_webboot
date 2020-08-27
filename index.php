<?php

get_header();
require_once "components/navigation.php";
?>
<section class="primary-content my-5">
<div class="container">
	<?php
	if ( have_posts() ):
		while ( have_posts() ) : the_post(); ?>
            <div class="post my-5">
                <h1 class="post-title"><a href="<?php the_permalink();?>"> <?php the_title(); ?></a></h1>
                <?php the_excerpt(); ?>
                <div class="post-meta">
                    <span class="post-author"><?php echo get_the_author(); ?></span> |
                    <span class="post-category"> <?php the_category(', '); ?></span>
                </div>
            </div>
		<?php
		endwhile; ?>
	<?php
	endif; ?>
</div>
</section>
<?php
get_sidebar();
get_footer();
?>
