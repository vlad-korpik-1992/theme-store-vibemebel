<?php
get_header();
?>
<section class="breadcrumbs">
    <div class="wrapper">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
    </div>
</section>
<section class="single">
    <div class="wrapper">
        <?php 
            $attr = array(
                'class' => "single__img",
            );
        ?>
        <h2 class="section-head section-head--lh"><?php single_post_title(); ?></h2>
        <div class="single__box">
            <?php the_post_thumbnail('full', $attr);?>
            <?php echo wpautop(the_content());?>
        </div>
    </div>
</section>
	

<?php
get_footer();
