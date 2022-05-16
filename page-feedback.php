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
        <div class="box">
          <?$reviews = get_field('feedback');
          foreach($reviews as $review) :?>
            <div class="column__half column__half--bottom">
              <div class="reviews__head">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22px" height="24px">
                  <image  x="0px" y="0px" width="22px" height="24px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAYCAQAAABUt8XAAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxYQKxKn9A/9AAABMUlEQVQ4y42SMUvDQBTHf2eE7BocnLpJLR0KOnaqdHT0I3QpDh2F7lUQ/QbuFgr9Cp06ZCwYhU6FDo6CaWkheQ416SW5o3kPjrt7P/539/6HoCeKDmOWLBnTQeWqmUWFSWZjQsUC4zJDcjnDNcODAioIAzO8MMILA4xnRAXBSyZHJHGKLfaVVNkhNOqGOAVlifCNur5EBWWBBtuC7paGzZQecWYjpmd1UKDJPF3MaWarSrTrKUcipbjgGvD5ElGOduNEGY8uUzYMqaWn1BiyYUo36fRuaGlti/hkxIiASGtf6x+mzcrqXpIr2gLUWR9EBWFN3eGJK8rEMS7cltIVYm4QeC4F93cPVLwdRF81B3ng1wr+cJ///Ge8GPoS8siJ2e5z7rikSpWYgIAP3uV7X/8DrESSGziIQHUAAAAASUVORK5CYII=" />
                </svg>
                <div class="reviews__head__box">
                  <p class="reviews__head__title"><?php echo $review['name_feedback']; ?></p>
                  <p class="reviews__head__subtitle"><?php echo $review['data_feedback']; ?></p>
                </div>
              </div>
              <?php echo $review['content_feedback']; ?>
              <? $feedback_screenshots = $review['screenshots_feedback'];
				foreach($feedback_screenshots as $screenshot) :
					$images = $screenshot['images_screenshots_feedback'];
				endforeach;
                  if($images != ''):?>
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
            </div>
          <?php endforeach;?>
        </div>
    </div>
</section>
<?php get_footer(); ?>