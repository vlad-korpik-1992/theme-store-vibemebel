<?php
/**
  * Template Name: Главная страница
*/
?>
<?php get_header();?>
    <section class="hero" style="background-image: url(<? the_field('bg_hero')?>);">
        <div class="wrapper">
            <div class="hero__box">
                <div class="hero__box__items">
                <?php if(get_field('offer_title_hero_1') != '' and get_field('offer_price_hero_1') != ''):?>
                    <div class="hero__box__circle hero__box__circle_center">
                        <p class="hero__box__title"><?the_field('offer_title_hero_1')?></p>
                        <p class="hero__box_price"><?php the_field('offer_price_hero_1')?><span>BYN</span></p>
                    </div>
                <?php endif;?> 
                </div>
                <div class="hero__box__items">
                <?php if(get_field('offer_title_hero_2') != '' and get_field('offer_price_hero_2') != ''):?>
                    <div class="hero__box__circle hero__box__circle_top">
                        <p class="hero__box__title"><?the_field('offer_title_hero_2')?></p>
                        <p class="hero__box_price"><?php the_field('offer_price_hero_2')?><span>BYN</span></p>
                    </div>
                <?php endif;?>
                </div>
                <div class="hero__box__items">
                <?php if(get_field('offer_title_hero_3') != '' and get_field('offer_price_hero_3') != ''):?>
                    <div class="hero__box__circle hero__box__circle_bottom">
                        <p class="hero__box__title"><?the_field('offer_title_hero_3')?></p>
                        <p class="hero__box_price"><?php the_field('offer_price_hero_3')?><span>BYN</span></p>
                    </div>
                <?php endif;?>
                </div>
            </div>
            <div class="hero__bottom">
                <a class="hero__link" href="<?php echo get_page_link(132)?>">Перейти в каталог</a>
            </div>
        </div>
    </section>
    <?php
        $categories = get_categories( [
            'taxonomy'     => 'product_cat',
            'orderby'      => 'name',
            'order'        => 'ASC'
        ]);
        $count_category = 0;
        foreach ($categories as $category):
            if($count_category === 3):
                $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true ); 
                $image_category_4 = wp_get_attachment_url( $thumbnail_id );
                $link_category_4 = $category->slug;
                $title_category_4 = $category->cat_name;
            endif;
            $count_category +=1;
        endforeach;
    ?>
    <section class="category">
        <div class="wrapper">
            <h2 class="section-head">Каталог</h2>
            <div class="box">
                <?  
                    $count_category = 0;
                    foreach ($categories as $category):
                        $thumbnail_id = get_term_meta( $category->term_id, 'thumbnail_id', true ); 
                        $image = wp_get_attachment_url( $thumbnail_id );
                        if($count_category === 0):?>
                            <div class="column__half">
                                <a class="column__half__link" href="/product-category/<?echo $category->slug;?>">
                                    <div class="category__inner category__inner_first" style="background-image: url(<? echo $image;?>);">
                                        <div class="category__link"><? echo $category->cat_name;?></div>
                                    </div>
                                </a>
                            </div><?
                        endif;
                        if($count_category === 1):?>
                            <div class="column__half">
                                <a class="column__half__link" href="/product-category/<?echo $category->slug;?>">
                                    <div class="category__inner category__inner_second" style="background-image: url(<? echo $image;?>);">
                                        <div class="category__link"><? echo $category->cat_name;?></div>
                                    </div>
                                </a>
                                <div class="category__box category__box_xlmb">
                                    <div class="category__box__circle">
                                        <svg class="category__box__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <image  x="0px" y="0px" width="48px" height="64px"  xlink:href="data:img/png;base64,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" />
                                        </svg>
                                    </div>
                                    <div class="category__box__content">
                                        <h3 class="category__box__title">Почему стоит выбрать нашу мебель?</h3>
                                        <p class="category__box__text">Неравенство Бернулли не критично. Тройной интеграл программирует линейно зависимый интеграл Пуассона. Многочлен расточительно масштабирует...</p>
                                    </div>
                                </div>
                            </div><?
                        endif;
                        if($count_category === 2):?>
                            <div class="column__half column__half_lg">
                                <div class="box">
                                    <?if($count_category === 2):?>
                                        <div class="column__half">
                                            <a class="column__half__link" href="/product-category/<?echo $category->slug;?>">
                                                <div class="category__inner category__inner_third" style="background-image: url(<? echo $image;?>);">
                                                    <div class="category__link"><? echo $category->cat_name;?></div>
                                                </div>
                                            </a>
                                        </div>
                                    <?$count_category +=1; endif;?>
                                    <?if($count_category === 3):?>
                                        <div class="column__half">
                                            <a class="column__half__link" href="/product-category/<?echo $link_category_4;?>">
                                                <div class="category__inner category__inner_third" style="background-image: url(<? echo $image_category_4;?>;">
                                                    <div class="category__link"><? echo $title_category_4;?></div>
                                                </div>
                                            </a>
                                        </div>
                                    <?endif;?>
                                </div>
                                <div class="category__box">
                                    <div class="category__box__circle">
                                        <svg class="category__box__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <image  x="0px" y="0px" width="48px" height="64px"  xlink:href="data:img/png;base64,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" />
                                        </svg>
                                    </div>
                                    <div class="category__box__content">
                                        <h3 class="category__box__title">Опциональный заголовок</h3>
                                        <p class="category__box__text">Неравенство Бернулли не критично. Тройной интеграл программирует линейно зависимый интеграл Пуассона. Многочлен расточительно масштабирует...</p>
                                    </div>
                                </div>
                            </div><?
                        endif;
                        if($count_category === 5):?>
                            <div class="column__half column__half_md">
                                <a class="column__half__link" href="/product-category/<?echo $category->slug;?>">
                                    <div class="category__inner category__inner_first" style="background-image: url(<? echo $image;?>);">
                                        <div class="category__link"><? echo $category->cat_name;?></div>
                                    </div>
                                </a>
                            </div><?
                        endif;
                        $count_category +=1;
                    endforeach;
                ?>
            </div>
            <div class="category__application scrollto">
                <h2 class="category__application__title">Изготавливаем мебель по индивидуальному заказу. Для просчета мебели оставьте заявку!</h2>
                <a class="category__application__btn" href="#letter">Оставить заявку</a>
            </div>
            <h2 class="section-head">Почему стоит заказать у нас?</h2>
            <div class="benefits-box">
                <div class="benefits__column">
                    <div class="benefits__column__inner">
                        <div class="benefits__column__circle">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="52px">
                                <image  x="0px" y="0px" width="64px" height="52px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAA0CAQAAACQ0/aCAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxYMCxInTHFLAAADOElEQVRYw8XZT2gcZRjH8c9uk5AcjNTMbGJao2BRsIccUkQPleJNzUU8FvGkQr2oN/8iogcvohGh2KMi4j8QpQcRexKlmKKIFQSLxTZNMpM2aoul3WY8zGbd7M7YTTOz+8zhnXne9+X5zu+38+edrciL0F2GrYjEInUlRSUzO+g1TxhqyayIRGJLbe2WwbIB3rO/y/mxWCS2KBK3tF2DZQHscwTznrFgTGBCIBQaFwoEtnUFllq31GgXG6hX2gcOZEx+EJfNWsxBDoQCNbVGOy4QCFVbRgWCzNlRA+SMH31kNVuBw+5zzEy3IjbBQoFQTa3ZpopVc2bE9vsyS4Gd+GOT5UksW87IVxuKjasJmu1OowKfZZ/misTbmwbYXGzziLrEB51dIxKJZ0sGgA8lok5/doDTPQA4ges6AW7CtfwGNh834Fw/FQjJt2ChBwA1ROllOGCf3YbB/ag7UGipC4462pENEMG045LStyMm2wDOSrzFlLgH5ROJn420lB+0JvHigBeM4WWHXCjN7e1e8rA7PO6NZi5UwTILEodLK70eA36T+KolMy2ReKhqAt+XDlB3DDe2ZEIQVVWwVjoAV2x89o6DpfQyHLa9dIChtuP0fSHWoysg3Y63ALwqcVml2vUZFB0hYklqwRc+L73go/Z0AETr74Tz3ikd4N42gBqW6a8FUT8B+qzAkFEtv4EZj5Ve8tYNR4EK4nWAWbM9VqAGlvpnQQrQtGDOm6WXnPNAy1HzRpwCnHOidIDzGQr00YIQdavZq+PNx/V25fSczllj1xBJigEY9WtD0s64ZI+fchSIKMaCqdzyDJnOVWCZoiyA133Xlpkwlzt6cl2B4gC+9XFbZlfu2HvcTGpNcQDdRM1zIrc4gIve7z3AmFcae4mnnKRf94F5sw6mu8UpcHfHB6+JjjG/mBH4y5//pYoDeDonn2w4+qf900cRFpx0Jrfvoh/+f3IRCvztttxb0aqzVwNYUzW4RYTzbc+6rBiSuQSsOoW9OR+ti4sRd8r89DXgU0/a65CDVxNrCzHpeTvwSVZn4PcerQy/ybN6ytelF1/zrtGs4uve3253V/8DXFtcMu9Udte/oKLJl0EqBzcAAAAASUVORK5CYII=" />
                            </svg>
                        </div>
                        <h3 class="benefits__column__title"><?php the_field('benefits_home_title_one')?></h3>
                        <p class="benefits__column__text"><?php the_field('benefits_home_text_one')?></p>
                    </div>
                </div>
                <div class="benefits__column">
                    <div class="benefits__column__inner">
                        <div class="benefits__column__circle">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="52px">
                                <image  x="0px" y="0px" width="64px" height="52px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAA0CAQAAACQ0/aCAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxYMCxInTHFLAAADOElEQVRYw8XZT2gcZRjH8c9uk5AcjNTMbGJao2BRsIccUkQPleJNzUU8FvGkQr2oN/8iogcvohGh2KMi4j8QpQcRexKlmKKIFQSLxTZNMpM2aoul3WY8zGbd7M7YTTOz+8zhnXne9+X5zu+38+edrciL0F2GrYjEInUlRSUzO+g1TxhqyayIRGJLbe2WwbIB3rO/y/mxWCS2KBK3tF2DZQHscwTznrFgTGBCIBQaFwoEtnUFllq31GgXG6hX2gcOZEx+EJfNWsxBDoQCNbVGOy4QCFVbRgWCzNlRA+SMH31kNVuBw+5zzEy3IjbBQoFQTa3ZpopVc2bE9vsyS4Gd+GOT5UksW87IVxuKjasJmu1OowKfZZ/misTbmwbYXGzziLrEB51dIxKJZ0sGgA8lok5/doDTPQA4ges6AW7CtfwGNh834Fw/FQjJt2ChBwA1ROllOGCf3YbB/ag7UGipC4462pENEMG045LStyMm2wDOSrzFlLgH5ROJn420lB+0JvHigBeM4WWHXCjN7e1e8rA7PO6NZi5UwTILEodLK70eA36T+KolMy2ReKhqAt+XDlB3DDe2ZEIQVVWwVjoAV2x89o6DpfQyHLa9dIChtuP0fSHWoysg3Y63ALwqcVml2vUZFB0hYklqwRc+L73go/Z0AETr74Tz3ikd4N42gBqW6a8FUT8B+qzAkFEtv4EZj5Ve8tYNR4EK4nWAWbM9VqAGlvpnQQrQtGDOm6WXnPNAy1HzRpwCnHOidIDzGQr00YIQdavZq+PNx/V25fSczllj1xBJigEY9WtD0s64ZI+fchSIKMaCqdzyDJnOVWCZoiyA133Xlpkwlzt6cl2B4gC+9XFbZlfu2HvcTGpNcQDdRM1zIrc4gIve7z3AmFcae4mnnKRf94F5sw6mu8UpcHfHB6+JjjG/mBH4y5//pYoDeDonn2w4+qf900cRFpx0Jrfvoh/+f3IRCvztttxb0aqzVwNYUzW4RYTzbc+6rBiSuQSsOoW9OR+ti4sRd8r89DXgU0/a65CDVxNrCzHpeTvwSVZn4PcerQy/ybN6ytelF1/zrtGs4uve3253V/8DXFtcMu9Udte/oKLJl0EqBzcAAAAASUVORK5CYII=" />
                            </svg>
                        </div>
                        <h3 class="benefits__column__title"><?php the_field('benefits_home_title_two')?></h3>
                        <p class="benefits__column__text"><?php the_field('benefits_home_text_two')?></p>
                    </div>
                </div>
                <div class="benefits__column benefits__column_md">
                    <div class="benefits__column__inner">
                        <div class="benefits__column__circle">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="52px">
                                <image  x="0px" y="0px" width="64px" height="52px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAA0CAQAAACQ0/aCAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxYMCxInTHFLAAADOElEQVRYw8XZT2gcZRjH8c9uk5AcjNTMbGJao2BRsIccUkQPleJNzUU8FvGkQr2oN/8iogcvohGh2KMi4j8QpQcRexKlmKKIFQSLxTZNMpM2aoul3WY8zGbd7M7YTTOz+8zhnXne9+X5zu+38+edrciL0F2GrYjEInUlRSUzO+g1TxhqyayIRGJLbe2WwbIB3rO/y/mxWCS2KBK3tF2DZQHscwTznrFgTGBCIBQaFwoEtnUFllq31GgXG6hX2gcOZEx+EJfNWsxBDoQCNbVGOy4QCFVbRgWCzNlRA+SMH31kNVuBw+5zzEy3IjbBQoFQTa3ZpopVc2bE9vsyS4Gd+GOT5UksW87IVxuKjasJmu1OowKfZZ/misTbmwbYXGzziLrEB51dIxKJZ0sGgA8lok5/doDTPQA4ges6AW7CtfwGNh834Fw/FQjJt2ChBwA1ROllOGCf3YbB/ag7UGipC4462pENEMG045LStyMm2wDOSrzFlLgH5ROJn420lB+0JvHigBeM4WWHXCjN7e1e8rA7PO6NZi5UwTILEodLK70eA36T+KolMy2ReKhqAt+XDlB3DDe2ZEIQVVWwVjoAV2x89o6DpfQyHLa9dIChtuP0fSHWoysg3Y63ALwqcVml2vUZFB0hYklqwRc+L73go/Z0AETr74Tz3ikd4N42gBqW6a8FUT8B+qzAkFEtv4EZj5Ve8tYNR4EK4nWAWbM9VqAGlvpnQQrQtGDOm6WXnPNAy1HzRpwCnHOidIDzGQr00YIQdavZq+PNx/V25fSczllj1xBJigEY9WtD0s64ZI+fchSIKMaCqdzyDJnOVWCZoiyA133Xlpkwlzt6cl2B4gC+9XFbZlfu2HvcTGpNcQDdRM1zIrc4gIve7z3AmFcae4mnnKRf94F5sw6mu8UpcHfHB6+JjjG/mBH4y5//pYoDeDonn2w4+qf900cRFpx0Jrfvoh/+f3IRCvztttxb0aqzVwNYUzW4RYTzbc+6rBiSuQSsOoW9OR+ti4sRd8r89DXgU0/a65CDVxNrCzHpeTvwSVZn4PcerQy/ybN6ytelF1/zrtGs4uve3253V/8DXFtcMu9Udte/oKLJl0EqBzcAAAAASUVORK5CYII=" />
                            </svg>
                        </div>
                        <h3 class="benefits__column__title"><?php the_field('benefits_home_title_three')?></h3>
                        <p class="benefits__column__text"><?php the_field('benefits_home_text_three')?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="topweek">
        <div class="wrapper">
            <h2 class="section-head">Товар недели</h2>
            <?$args = array(
                'post_type' => 'product'
            );
            $col_init = 0;
            $count_products = wp_count_posts('product');
            $published_products = $count_products->publish;
            $query = new WP_Query($args);
            if ( $query->have_posts()) : 
                while ( $query->have_posts() ) : $query->the_post();
                    if(get_field( 'product_week_home', $product->get_id()) != ""):
                        if($col_init < 1):?>
                            <div class="box">
                                <div class="column__half">
                                    <div class="category__inner topweek__img" style="background-image: url(<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>);"></div>
                                </div>
                                <div class="column__half">
                                    <a class="topweek__title" href="<?php the_permalink(); ?>"><?php echo mb_strimwidth(get_the_title(), 0, 60, '...'); ?></a>
                                    <p class="topweek__price"><?php echo $product->get_regular_price(); ?><span> BYN</span></p>
                                    <p class="topweek__sale"><?php echo $product->get_sale_price(); ?><span>BYN</span></p>
                                    <a href="?add-to-cart=<?php echo get_the_ID(); ?>" data-quantity="1" class="topweek__basket button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo get_the_ID(); ?>">
                                        <svg class="topweek__basket__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <image  x="0px" y="0px" width="26px" height="22px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAWCAQAAAB0gUQ+AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxYNEhPKiYLyAAABMUlEQVQ4y43TPUvDUBTG8X+qVOrLkMFinesbqJU6SBeHTi5ufgEduoi4+R0cxdlPISgouLbSRSyUIjhaOvgSXaSV5nEowSQ3Jjlnugd+Oc+FG0vT7JEF+lzyTrpSVa5G1daYSNMIzciWrZqkjfRo1EVJB+mQJS+nxRef9BJu0+Wc2z8EPWa5S0CLFFjwr21ImkyIVpa0m/F9pQnsJG6CZz+6AqoJqIJDx49uGDBMRPe4fjSkxVIsyVGiDpnA8JH1WLRJ1kQtCuRjw4mmuQnWYlGbjzB6gNiAW9QhjN7oUvmXrDBPA8D/jABOOeGFfiSa45tlXk00zj7l0H6vHC54Aoh6XyUdKx+abetQU+b/5HVOjqTrwKyoH0ln3tkMksEFBqGpFZhFxFvVkWwjXk0T3ukXyWr9Bwm3BpMAAAAASUVORK5CYII=" />
                                        </svg>
                                        <p class="topweek__basket__title">В корзину</p>
                                    </a>
                                    <div class="topweek__discount"><?the_field( 'condition_product_week_home', $product->get_id())?></div>
                                </div>
                            </div>
                        <? endif; $col_init++;
                    endif;
                endwhile;  wp_reset_postdata(); else : ?>
                <p class="message"><?php esc_html_e( 'Товары данной категории отсутствуют' ); ?></p>
            <?php endif; ?>
        </div>
    </section>
    <section class="catalog">
        <div class="wrapper">
            <h2 class="section-head">Часто покупают</h2>
            <div class="benefits-box">
                <?$args = array(
                    'post_type' => 'product',
                    'posts_per_page' => 6
                );
                $col_init = 0;
                $count_products = wp_count_posts('product');
                $published_products = $count_products->publish;
                $query = new WP_Query($args);
                if ( $query->have_posts()) : while ( $query->have_posts() ) : $query->the_post();
                    if(get_field( 'popular_item_home', $product->get_id()) != ""):?>
                        <div class="benefits__column <?if($col_init < 3 and $published_products > 3):?>benefits__column_mb<?endif;?>">
                            <a href="<?php the_permalink(); ?>" class="catalog__link">
                                <div class="catalog__cover" style="background-image: url(<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>);"></div>
                            </a>
                            <a href="<?php the_permalink(); ?>" class="catalog__title"><?php echo mb_strimwidth(get_the_title(), 0, 60, '...'); ?></a>
                            <div class="catalog__footer">
                                <p class="catalog__footer__price"><?php echo $product->get_price(); ?><span>BYN</span></p>
                                <a href="?add-to-cart=<?php echo get_the_ID(); ?>" data-quantity="1" class="catalog__circle button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo get_the_ID(); ?>" data-product_sku="" aria-label="Добавить &quot;Бор&quot; в корзину" rel="nofollow">
                                    <svg class="topweek__basket__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <image  x="0px" y="0px" width="26px" height="22px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAWCAQAAAB0gUQ+AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxYNEhPKiYLyAAABMUlEQVQ4y43TPUvDUBTG8X+qVOrLkMFinesbqJU6SBeHTi5ufgEduoi4+R0cxdlPISgouLbSRSyUIjhaOvgSXaSV5nEowSQ3Jjlnugd+Oc+FG0vT7JEF+lzyTrpSVa5G1daYSNMIzciWrZqkjfRo1EVJB+mQJS+nxRef9BJu0+Wc2z8EPWa5S0CLFFjwr21ImkyIVpa0m/F9pQnsJG6CZz+6AqoJqIJDx49uGDBMRPe4fjSkxVIsyVGiDpnA8JH1WLRJ1kQtCuRjw4mmuQnWYlGbjzB6gNiAW9QhjN7oUvmXrDBPA8D/jABOOeGFfiSa45tlXk00zj7l0H6vHC54Aoh6XyUdKx+abetQU+b/5HVOjqTrwKyoH0ln3tkMksEFBqGpFZhFxFvVkWwjXk0T3ukXyWr9Bwm3BpMAAAAASUVORK5CYII=" />
                                    </svg>
                                </a>
                            </div>
                        </div><?php $col_init += 1;
                    endif;
                    endwhile;  wp_reset_postdata(); else : ?>
                    <p class="message"><?php esc_html_e( 'Товары данной категории отсутствуют' ); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="letter" id="letter">
        <div class="wrapper">
            <div class="box">
                <div class="column__half column__half_md">
                    <div class="letter__inner">
                        <div class="letter__box">
                            <svg class="letter__box__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <image  x="0px" y="0px" width="56px" height="61px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA9CAQAAABSQmImAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxYPEhvH1t6uAAAD80lEQVRYw+3YW4hVdRTH8c+MozOaVk6FYkNiYVnRhYQkjYoeGojItCEsx/GSqOWDD10ogoigF58MU0TCC6GpGIN2wwuppJFDJEyGplCatzJG0xqmubl7mP8c55wzlz17tmMP/Tacc9b/v/b6nv997V0gW4ONUCg91bnQVdVoSxwTpX6dt94j+bjX/XMFYJevza7tiFt+RWFt10GlUICXLQvgWtVO92nMJqkKv07Z5KihHleuAOz0hIhS50QiLRaGiuQa4Ehoz3KDO/yJ06F0GiwKxht9npFMDrHW5ZTfG2bId7BdJHLGoBSAK0UiTUbm1SwTiVxSVug2sEtTr0IXmGa+kpzSe0CN3/L8t4a7xhW5AfzRZeByFcYr87fjdlntVxRarQoTzMnyLgWnOolzInyP4IJIZEmnuAfU5EzuZh8Yam2wvs3xPyoSWd9JpDvCHVVF3XTbM9YZklNWZKFK14EW7/VqGEKArjTBx2GMWu1z1CATw3i34yp9mh5woHUBt90Cv4ACU20Id7SotLH3uK6Bs0JrtpqqNZQVmpzxb7ItCU6XR9E0cNEcZZZ61UADrDIjUz9ERTJg5y0c4GGwWZ0tJmGiv8Iu2aJVMSb5ML0W3hT2nQPa19aUDK7SYXBzml3avolHWKQxU942VS5l+aQCPKsZ3Icdng3INlyJ29H5fpIY2GofqDAcn5uizgXP24jproHgkRKQTWC4FQrxpRFutBljLAYNPkkXuMox8JxqZWjVgnJ7wyRa6lwyYFcLv1GVnQbhaeV2O2yIie4OtbXeTYbrbi/92kxrFKNYufIONT96Sn1SYHdJ7waP+iGnrNVqD2VOt1RbCPvdb7KpHjRKvRN2+Mih5LCegVxSrbpviGyl+RyRSguTqNT4vLLRVxKYPadz1N9d2ty/wDq787u0RFM4gKA4L2/L18VMEtKmfd7vvHW+cTY3L52vySl3BWuWxhgPYmdCxt1dXppRbpe+ZqBRZgfrlVhPHCO9GL9Xc4E1kMmoa2JG2R8fmDuGs2x10t5gLbDN9T3G+Mme5MAmGzpYzeEgTlH/ga2tSEuWNazHGOd7h8xeFrM1+DnkZbygPsayOO7O4J9gWbylxBhzg/VmjGXPLebFb18u8PsOn5e/e1JcP/ljONMXTtoZrHm+6uQFQa4O2J4c2GBNB6vR2vih4qnfl8VVB0530SG3BqvCnzGWxZHMMkoAfMcw4ywI1tvhBUL3Guul5MC2xLc2y+pZtTH95M/SGWY46bNgzbXH8B5jHLYlObDeig5Wg5XxQ8XTVZ+l/wP7rPZJ86RRKUTreaPPAMca2z8tLPR76jG7jVjgMYvDa+h0dNC87pD/AleEy4PeEck7AAAAAElFTkSuQmCC" />
                            </svg>
                            <h3 class="letter__title">Для просчёта мебели оставьте заявку!</h3>
                        </div>
                        <form class="letter__form" method="post" id="letter__form" action="#">
                            <input class="letter__input" name="firstname" id="firstname" type="text" placeholder="Имя и Фамилия">
                            <input class="letter__input" name="phone" id="phone" type="text" placeholder="Номер телефона">
                            <input class="letter__input" name="email" id="email" type="email" placeholder="Email">
                            <textarea class="letter__textarea" name="letter" id="messages" type="text" cols="30" rows="10" placeholder="Текстовое сообщение"></textarea>
                            <button class="letter__btn" id="ajax-send" type="send">Отправить</button>
                            <div class="letter__form__error error" id="status_form"></div>
                        </form>
                    </div>
                </div>
                <div class="column__half letter__column">
                    <svg class="letter__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <image  x="0px" y="0px" width="128px" height="114px"  xlink:href="data:img/png;base64,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" />
                    </svg>
                    <p class="letter__text">В течении нескольких часов наши специалисты вам ответят</p>
                    <svg class="letter__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <image  x="0px" y="0px" width="139px" height="120px"  xlink:href="data:img/png;base64,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" />
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <section class="reviews">
        <div class="wrapper">
            <h2 class="section-head">Реальные отзывы</h2>
            <div class="box">
                <?$reviews = get_field('feedback', 99);
                $col_reviews = 0;
                foreach($reviews as $review) :
                    if($col_reviews < 2):?>
                        <div class="column__half">
                            <div class="reviews__head">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22px" height="24px">
                                    <image  x="0px" y="0px" width="22px" height="24px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAYCAQAAABUt8XAAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxYQKxKn9A/9AAABMUlEQVQ4y42SMUvDQBTHf2eE7BocnLpJLR0KOnaqdHT0I3QpDh2F7lUQ/QbuFgr9Cp06ZCwYhU6FDo6CaWkheQ416SW5o3kPjrt7P/539/6HoCeKDmOWLBnTQeWqmUWFSWZjQsUC4zJDcjnDNcODAioIAzO8MMILA4xnRAXBSyZHJHGKLfaVVNkhNOqGOAVlifCNur5EBWWBBtuC7paGzZQecWYjpmd1UKDJPF3MaWarSrTrKUcipbjgGvD5ElGOduNEGY8uUzYMqaWn1BiyYUo36fRuaGlti/hkxIiASGtf6x+mzcrqXpIr2gLUWR9EBWFN3eGJK8rEMS7cltIVYm4QeC4F93cPVLwdRF81B3ng1wr+cJ///Ge8GPoS8siJ2e5z7rikSpWYgIAP3uV7X/8DrESSGziIQHUAAAAASUVORK5CYII=" />
                                </svg>
                                <div class="reviews__head__box">
                                    <p class="reviews__head__title"><?php echo $review['name_feedback']; ?></p>
                                    <p class="reviews__head__subtitle"><?php echo $review['data_feedback']; ?></p>
                                </div>
                            </div>
                            <p class="reviews__content"><?php echo $review['content_feedback']; ?></p>
                        </div>
                    <? endif;
                    $col_reviews += 1; 
                endforeach;?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>