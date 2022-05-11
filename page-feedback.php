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
              <? $feedback_screenshots = $review['screenshots_feedback'];
                  if($feedback_screenshots != []):?>
                    <div class="feeadback__images">
                      <? foreach($feedback_screenshots as $screenshot) :?>
                        <div class="feeadback__images__col">
                          <a class="feeadback__images__col__link" href="<?echo $screenshot['images_screenshots_feedback'];?>">
                            <img class="feeadback__images__col__image" src="<?echo $screenshot['images_screenshots_feedback'];?>" alt="">
                          </a>
                        </div>
                      <?endforeach;?>
                    </div>
                  <?endif;
              if($review['link_video'] != ''):?>
                <div class="feeadback__video">
                  <? echo $review['link_video'];?>
                </div>
              <?endif;?>
              <p class="feeadback__box__date"><?php echo $review['data_feedback']; ?> </p>
            </div>
          </div>
        <?php endforeach;?>
    </div>
</section>
<?php get_footer(); ?>