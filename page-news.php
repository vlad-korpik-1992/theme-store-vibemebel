<?php
/**
  * Template Name: Новости
*/
?>
<?php get_header();?>
    <section class="breadcrumbs">
        <div class="wrapper">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
        </div>
    </section>
    <section class="news">
        <div class="wrapper">
            <h1 class="section-head"><?php single_post_title(); ?></h1>
        </div>
        <?php
            if ( get_query_var('paged') ) { 
                $paged = get_query_var('paged'); 
            } 
            else if ( get_query_var('page') ) {
                $paged = get_query_var('page'); 
            } else {
                $paged = 1; 
            }								
            $args = array(
                            'post_type' => 'post',
                            'post_status'       => 'publish',
                            'paged'             => $paged,
                            'posts_per_page'    => 9
                        );
            $temp = $wp_query;
            $wp_query= null;
            $wp_query = new WP_Query($args);
            $init = 1;
            while ($wp_query -> have_posts()) : $wp_query -> the_post();?>
                <div class="news__items <?if($init===1):?>news__items_first<?endif;?>">
                    <?  $title = get_the_title();
                        $short_title = wp_trim_words( $title, 20, '...' );
                    ?>
                    <div class="wrapper">
                        <div class="news__box">
                            <div class="news__box__pic">
                                <img class="news__box__img" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $posts['ID'] ) ); ?>" alt="<?php echo the_title();?>">
                            </div>
                            <div class="news__box__content">
                                <div class="news__box__data"><?php echo get_the_time($d = 'j', $posts['ID']); ?> / <?php echo get_the_time($d = 'm', $posts['ID']); ?> / <?php echo get_the_time($d = 'Y', $posts['ID']); ?></div>
                                <a class="news__box__title" href="<?php echo get_permalink($posts['ID']); ?>"><?php echo $short_title;?></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php $init +=1; endwhile;?>
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