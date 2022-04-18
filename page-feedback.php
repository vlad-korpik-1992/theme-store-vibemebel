<?php
/**
  * Template Name: Отзывы
*/
?>
<?php get_header();?>
<section class="breadcrumbs">
  <div class="wrapper">
    <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
  </div>
</section>
<section class="feeadback">
    <div class="wrapper">
        <h1 class="section-head"><?php single_post_title(); ?></h1>
        <?$reviews = get_field('feedback');
        foreach($reviews as $review) :?>
          <div class="feeadback__box">
            <div class="feeadback__box__head">
              <p class="feeadback__box__name"><?php echo $review['name_feedback']; ?></p>
            </div>
            <div class="feeadback__box__footer">
              <p class="reviews__content"><?php echo $review['content_feedback']; ?></p>
              <p class="feeadback__box__date"><?php echo $review['data_feedback']; ?> </p>
            </div>
          </div>
        <?php endforeach;?>
    </div>
</section>
<?php get_footer(); ?>