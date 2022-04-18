<?php
get_header();?>
<section class="breadcrumbs">
    <div class="wrapper">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
    </div>
</section>
<section class="info">
    <div class="wrapper">
        <h1 class="section-head"><?php single_term_title(); ?></h1>
        <?php $term_object = get_queried_object(); 
            $thumbnail_id = get_term_meta( $term_object->term_id, 'thumbnail_id', true ); 
            $image = wp_get_attachment_url( $thumbnail_id );
        ?>
        <div class="info__box">
            <div class="info__box__icon">
                <img class="about__authorimg" src="<?php echo $image;?>" alt="<?php single_term_title(); ?>">
            </div>
            <div class="info__box__text">
                <?php echo wpautop($term_object->description);?>
            </div>
        </div>
    </div>
</section>
<?$args = array(
        'post_type' => 'product',
        'product_cat' => $term_object->slug,
    );
$query = new WP_Query($args);
if ( $query->have_posts()) : 
    while ( $query->have_posts() ) : $query->the_post();
        $count_posts = wp_count_posts()->publish; 
    endwhile;
    wp_reset_postdata(); 
endif;?>
<section class="catalog <?php if($count_posts > 9):?> catalog_border<?php endif;?>">
    <div class="wrapper">
        <div class="benefits-box">
            <?php
            if ( $query->have_posts()) : 
                while ( $query->have_posts() ) : $query->the_post();
                $product_data = wc_get_product( get_the_ID() );?>
                <div class="benefits__column benefits__column_mb">
                    <a class="benefits__column__link" href="<?php the_permalink();?>">
                        <div class="catalog__cover" style="background-image: url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'full' ) ?>);">
                            <?php if(get_field( 'installment_plan_product', $product_data->get_id()) != ""):?>
                                <div class="catalog__plan">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="24px">
                                        <image  x="0px" y="0px" width="20px" height="24px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAYCAQAAABQQhX9AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxcMFhH5lSuIAAABoUlEQVQoz4XSTUuUURTA8d+YFY1FSlIyk1RE5KLaWRgtEtwUGEULs0BaFRWK1iIIBD9AuMhNBPZCQhRR9AEiwt53QWVgNKFhYZELc4gZZ54WPTM+46Se1b3/+7+cc+85/C+avJK0ZHTLCfQspR0X6PdASuViWq2fHqJR3tnFxAuy6sAdv6xfWHzkabhKmjJULuy0Gbw2WGQdAh2lWtyIL7baYFpvhN+S1hgVr0r7LGPGD/URvtILE3M/ul/gnBrdLto4r6Q6455Z/m/z3BuxBZ/XJKcLtgu0hTAmGd6Oqymqgyat4LRZq0N0z4xR1dYac60o7hI4yGWjIagSaJXTakjKmkj6KX2V4tLhNu2TS3IS2rWUVP1VLX2+FUHCKc2+G/BOxvUin9TLCXmJyO37RhyVc1heHNTLO8Y6WZ1F7aSs3RrMeiIVpu+RUQ13jVsVim0OgH3Oh92vMlEYjm3+ROqZH7elbYnOSb9lZVKlAXntUdQla9ieEm2vl7LOFJpWiGZX7PDeY2NiNmnR4K1Ow+XVVDjipo9+m/bBDYdUzB3+BRMpcdoga9sKAAAAAElFTkSuQmCC" />
                                    </svg>
                                    <div class="catalog__plan__title">Возможна рассрочка</div>
                                </div>
                            <?endif;?>
                        </div>
                    </a>
                    <a href="<?php the_permalink();?>" class="catalog__title"><?php echo mb_strimwidth(get_the_title(), 0, 60, '...'); ?></a>
                    <div class="catalog__footer">
                        <p class="catalog__footer__price"><?php echo $product_data->get_price(); ?><span>BYN</span></p>
                        <a href="?add-to-cart=<?php echo $product_data->get_id(); ?>" data-quantity="1" class="catalog__circle button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $product_data->get_id(); ?>" data-product_sku="" aria-label="Добавить &quot;Бор&quot; в корзину" rel="nofollow" style="text-decoration: none !important;">
                            <svg class="topweek__basket__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <image  x="0px" y="0px" width="26px" height="22px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAWCAQAAAB0gUQ+AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxYNEhPKiYLyAAABMUlEQVQ4y43TPUvDUBTG8X+qVOrLkMFinesbqJU6SBeHTi5ufgEduoi4+R0cxdlPISgouLbSRSyUIjhaOvgSXaSV5nEowSQ3Jjlnugd+Oc+FG0vT7JEF+lzyTrpSVa5G1daYSNMIzciWrZqkjfRo1EVJB+mQJS+nxRef9BJu0+Wc2z8EPWa5S0CLFFjwr21ImkyIVpa0m/F9pQnsJG6CZz+6AqoJqIJDx49uGDBMRPe4fjSkxVIsyVGiDpnA8JH1WLRJ1kQtCuRjw4mmuQnWYlGbjzB6gNiAW9QhjN7oUvmXrDBPA8D/jABOOeGFfiSa45tlXk00zj7l0H6vHC54Aoh6XyUdKx+abetQU+b/5HVOjqTrwKyoH0ln3tkMksEFBqGpFZhFxFvVkWwjXk0T3ukXyWr9Bwm3BpMAAAAASUVORK5CYII=" />
                            </svg>
                        </a>
                    </div>
                </div><?
                endwhile;
            wp_reset_postdata(); 
            else : ?>
                <p class="message"><?php esc_html_e( 'Товары данной категории отсутствуют' ); ?></p>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php get_footer();
?>