<?php
/**
  * Template Name: Акции и скидки
*/
?>
<?php get_header();?>
    <section class="breadcrumbs">
        <div class="wrapper">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
        </div>
    </section>
    <?
         $count_posts = wp_count_posts('stock');
 
         $published_posts = $count_posts->publish;

         $count_posts_page = 6;

    ?>
    <section class="sale <?if($published_posts > $count_posts_page):?>catalog_border<?endif;?>">
        <div class="wrapper">
            <h1 class="section-head"><?php single_post_title(); ?></h1>
            <div class="sale__box">
            <?php wp_reset_postdata();?>
            <?php  $args = array (
                    'post_type' => 'stock',
                    'numberposts' => -1,
                    'order' => 'DESC',
                    'post_status' => 'publish',
                    'orderby'   => 'meta_value',
                    'posts_per_page'    => $count_posts_page,
                    'suppress_filters' => true
                );
            $temp = $wp_query;
            $wp_query= null;
            $wp_query = new WP_Query($args);
            $init = 1;
            while ($wp_query -> have_posts()) : $wp_query -> the_post();?>
                <div class="sale__box__column <?if($init % 3 == 0):?>sale__fullwidth<?endif;?>" href="#">
                    <?if(get_field('img_sale', $posts['ID']) != ""):?>
                        <img class="<?if($init % 3 != 0):?>sale__box__img<?endif;?> <?if($init % 3 == 0):?>sale__fullwidth__img<?endif;?>" src="<?php the_field('img_sale', $posts['ID']);?>" alt="<?php echo the_title();?>">
                    <?endif;?>  
                    <?if(get_field('period_sale', $posts['ID']) != ""):?>                          
                        <div class="sale__box__status">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="24px">
                                <image  x="0px" y="0px" width="20px" height="24px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAYCAQAAABQQhX9AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxcMFhH5lSuIAAABoUlEQVQoz4XSTUuUURTA8d+YFY1FSlIyk1RE5KLaWRgtEtwUGEULs0BaFRWK1iIIBD9AuMhNBPZCQhRR9AEiwt53QWVgNKFhYZELc4gZZ54WPTM+46Se1b3/+7+cc+85/C+avJK0ZHTLCfQspR0X6PdASuViWq2fHqJR3tnFxAuy6sAdv6xfWHzkabhKmjJULuy0Gbw2WGQdAh2lWtyIL7baYFpvhN+S1hgVr0r7LGPGD/URvtILE3M/ul/gnBrdLto4r6Q6455Z/m/z3BuxBZ/XJKcLtgu0hTAmGd6Oqymqgyat4LRZq0N0z4xR1dYac60o7hI4yGWjIagSaJXTakjKmkj6KX2V4tLhNu2TS3IS2rWUVP1VLX2+FUHCKc2+G/BOxvUin9TLCXmJyO37RhyVc1heHNTLO8Y6WZ1F7aSs3RrMeiIVpu+RUQ13jVsVim0OgH3Oh92vMlEYjm3+ROqZH7elbYnOSb9lZVKlAXntUdQla9ieEm2vl7LOFJpWiGZX7PDeY2NiNmnR4K1Ow+XVVDjipo9+m/bBDYdUzB3+BRMpcdoga9sKAAAAAElFTkSuQmCC" />
                            </svg>
                            <div class="catalog__plan__title"><?the_field('period_sale', $posts['ID'])?></div>
                        </div>
                    <?endif;
                    $title = get_the_title();
                    if($init % 3 == 0): $short_title = wp_trim_words( $title, 50, '...' ); endif;
                    if($init % 3 != 0): $short_title = wp_trim_words( $title, 15, '...' ); endif;
                    ?>
                    <h2 class="sale__box__title"><?echo $short_title;?></h2>
                </div><?
            $init +=1; endwhile;?>
            </div>
        </div>
    </section>
    <section class="pagination">
        <div class="wrapper">
            <?php
                the_posts_pagination( array('mid_size' => 5) );								
                $wp_query = null;								
                $wp_query = $temp;								
                wp_reset_query();        
            ?>
        </div>
    </section>
<?php get_footer(); ?>