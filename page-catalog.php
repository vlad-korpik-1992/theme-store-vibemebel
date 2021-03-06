<?php
/**
  * Template Name: Каталог
*/
?>
<?php get_header();?>
    <section class="breadcrumbs">
        <div class="wrapper">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
        </div>
    </section>
    <section class="catalog">
        <div class="wrapper">
            <?php
                $categories = get_categories( [
                'taxonomy'     => 'product_cat',
                'orderby'      => 'name',
                'order'        => 'ASC'
            ]);?>
            <h2 class="section-head"><?php single_post_title(); ?></h2>
            <div class="buttons__box">
                <?php
                    foreach ($categories as $category):?>
                        <a class="buttons__box__items" href="/product-category/<?echo $category->slug;?>"><?php echo $category->cat_name;?></a>
                    <?endforeach;
                    wp_reset_postdata();
                ?>
            </div>
            <div class="benefits-box">
                <?php
                foreach ($categories as $category):
                    $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true ); 
                    $image = wp_get_attachment_url( $thumbnail_id );?>
                    <div class="benefits__column catalog__column_mb">
                        <a class="benefits__column__link" href="/product-category/<?echo $category->slug;?>">
                            <div class="catalog__cover" style="background-image: url(<? echo $image;?>);">
                                <div class="category__link"><? echo $category->cat_name;?></div>
                            </div>
                        </a>
                    </div>
                <?php endforeach;
                wp_reset_postdata();?>
            </div>
        </div>
    </section>
<?php get_footer();?>