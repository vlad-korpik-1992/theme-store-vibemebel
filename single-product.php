<?php
get_header();?>
<section class="breadcrumbs">
    <div class="wrapper">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
    </div>
</section>
<section class="cart">
    <div class="wrapper">
        <?php  
	        $checkout_url = WC()->cart->get_checkout_url();
        ?>
        <?php while ( have_posts() ) : ?>
			<?php the_post(); $count_image = 0; global $product; ?>
            <div class="cart__box">
                <div class="cart__box__pic">
                    <h1 class="cart__box__title"><?php the_title(); ?></h1>
                </div>
                <div class="cart__box__sidebar">
                    <div class="cart__content cart__content_bottom cart__content_desctop">
                        <?php $phone = str_replace([' ', '(', ')', '-'], '', get_field('telefon_contacts', 39));?>
                        <a class="cart__content__link" href="tel:<?echo $phone;?>">
                            <svg class="cart__content__link__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <image  x="0px" y="0px" width="28px" height="28px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAQAAADYBBcfAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxkLMS5wptVmAAABsklEQVQ4y43TPWtUURDG8Z9JCIqsJGBjIRgwRIySBGF9w167YOnbB1CwsrWUZIuFxGwlIlZiZSWIkiCx0A+goFu4IviKRsEVwmqSY7E34Z6797o709yZ4X/nnOfM9Nu0E5bt8kxsv100bY9vVuRaWVOw7lQmH7Z80ZFObNxKUq7bEVV2GjPtjh+CDTcNpIvDGqk/z+SeaMiMVcGioc1Un0cpLPhjLP82prwXLBtsh1cjLAgeROK8MudQEu31UTDfDr52gMFERpw1taRP2ap1U/AuB7yQEueoBS3BUoJWBE/gfgd2S3/mdpM+CBYSmX4KRjmfwWYLhGlZcxDcFVyjpJnC6oqsJqiCs4LHMB913F8AHhe8BAcEr2FEKwXWCsCS4FfmSyUF/nVYz1byKYUu6esdPW2jq7IFVo0kutw7OOh5hFaiAw+4ZLII3a0eoU+Nb9VuJ+NfsDkjPmdWrGYUN1Kaz9qeh05k0PY0xfEbJ/O71jvQrK+7nn/XF13Rt0UKV6N3zXrTseLnORNNU9q/K///ZUsq0fi3vZFsZRfbZy7a14eGe5undudz7mn44optm8l/v3k7sYf6YEkAAAAASUVORK5CYII=" />
                            </svg>
                            <div class="cart__content__phone">
                                <p><?php the_field('telefon_contacts', 39)?></p>
                                <small><?php the_field('clock_contacts', 39)?></small>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="cart__box">
                <div class="cart__box__pic">
                    <?php $gallery = $product->get_gallery_attachment_ids();?>
                    <div class="cart__slider">
                        <?php foreach( $gallery as $image ) :
                            $image_alt = get_post_meta($image, '_wp_attachment_image_alt', TRUE);
                            $image_link = wp_get_attachment_url( $image );
                            $count_image += 1;?>
                            <img class="cart__slider__img" src="<?echo $image_link;?>" alt="<?echo $image_alt;?>" id="1<?echo $image_alt;?>">
                        <?php endforeach;?>
                    </div>
                    <div class="cart__sliderprev">
                        <?php foreach( $gallery as $image ) :
                            $image_link = wp_get_attachment_url( $image );?>
                            <img class="cart__sliderprev__img" src="<?echo $image_link;?>" alt="">
                        <?php endforeach;?>
                        <?php
                            if($count_image < 6):
                                $count_white = 6 - $count_image;
                                for($i = 1; $i <= $count_white; $i++){?>
                                    <div class="cart__sliderprev__white"></div>
                                <?}
                            endif;
                        ?>
                    </div> 
                </div>
                <div class="cart__box__sidebar">
                    <div class="cart__content cart__content_bottom cart__content_mobile">
                        <?php $phone = str_replace([' ', '(', ')', '-'], '', get_field('telefon_contacts', 39));?>
                        <a class="cart__content__link" href="tel:<?echo $phone;?>">
                            <svg class="cart__content__link__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <image  x="0px" y="0px" width="28px" height="28px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABwAAAAcCAQAAADYBBcfAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxkLMS5wptVmAAABsklEQVQ4y43TPWtUURDG8Z9JCIqsJGBjIRgwRIySBGF9w167YOnbB1CwsrWUZIuFxGwlIlZiZSWIkiCx0A+goFu4IviKRsEVwmqSY7E34Z6797o709yZ4X/nnOfM9Nu0E5bt8kxsv100bY9vVuRaWVOw7lQmH7Z80ZFObNxKUq7bEVV2GjPtjh+CDTcNpIvDGqk/z+SeaMiMVcGioc1Un0cpLPhjLP82prwXLBtsh1cjLAgeROK8MudQEu31UTDfDr52gMFERpw1taRP2ap1U/AuB7yQEueoBS3BUoJWBE/gfgd2S3/mdpM+CBYSmX4KRjmfwWYLhGlZcxDcFVyjpJnC6oqsJqiCs4LHMB913F8AHhe8BAcEr2FEKwXWCsCS4FfmSyUF/nVYz1byKYUu6esdPW2jq7IFVo0kutw7OOh5hFaiAw+4ZLII3a0eoU+Nb9VuJ+NfsDkjPmdWrGYUN1Kaz9qeh05k0PY0xfEbJ/O71jvQrK+7nn/XF13Rt0UKV6N3zXrTseLnORNNU9q/K///ZUsq0fi3vZFsZRfbZy7a14eGe5undudz7mn44optm8l/v3k7sYf6YEkAAAAASUVORK5CYII=" />
                            </svg>
                            <div class="cart__content__phone">
                                <p><?php the_field('telefon_contacts', 39)?></p>
                                <small><?php the_field('clock_contacts', 39)?></small>
                            </div>
                        </a>
                    </div>
                    <div class="cart__content">
                        <h3>Описание</h3>
                        <?php echo wpautop(the_content());?>
                    </div>                    
                    <div class="cart__content">
                        <h3>Характеристики</h3>
                        <?php if(get_field('feature_product_one') != ''):
                            echo wpautop(get_field('feature_product_one'));
                        else:?>
                            <small>Информация отсутствует</small>
                        <?php endif;?>
                    </div>
                    <div class="cart__content">
                        <h3>Возможные цвета</h3>
                        <div class="cart__content__color">Цвет: <span id="status__color"></span></div>
                        <div class="cart__color">
                            <?php foreach( $gallery as $image ) :
                                $image_alt = get_post_meta($image, '_wp_attachment_image_alt', TRUE);
                                $image_link = wp_get_attachment_url( $image );
                            ?>
                                <img class="cart__color__img" src="<?echo $image_link;?>" title="<?echo $image_alt;?>" alt="<?echo $image_alt;?>" id="1<?echo $image_alt;?>">
                            <?php endforeach;?>
                            <?php
                                if($count_image < 8):
                                    $count_white = 8 - $count_image;
                                    for($i = 1; $i <= $count_white; $i++){?>
                                        <div class="cart__color__white"></div>
                                    <?}
                                endif;
                            ?>
                        </div>
                    </div>                    
                    <div class="cart__content">
                        <?php if($product->get_sale_price() != ''):?>
                            <p class="topweek__price"><?php echo $product->get_regular_price(); ?><span> BYN</span></p>
                        <?php endif;?>
                        <div class="cart__price"><?php echo $product->get_price(); ?><span>BYN</span></div>
                        <div class="byu__box">
                            <a class="buy-now buy-now--color topweek__basket_bottom" href="<?echo $checkout_url;?>?add-to-cart=<?echo get_the_ID();?>">Купить в один клик</a>
                            <a href="?add-to-cart=<?php echo get_the_ID(); ?>" data-quantity="1" class="catalog__circle button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo get_the_ID(); ?>" data-product_sku="" aria-label="Добавить &quot;Бор&quot; в корзину" rel="nofollow" style="text-decoration: none !important;">
                                <svg class="topweek__basket__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <image  x="0px" y="0px" width="26px" height="22px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAWCAQAAAB0gUQ+AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxYNEhPKiYLyAAABMUlEQVQ4y43TPUvDUBTG8X+qVOrLkMFinesbqJU6SBeHTi5ufgEduoi4+R0cxdlPISgouLbSRSyUIjhaOvgSXaSV5nEowSQ3Jjlnugd+Oc+FG0vT7JEF+lzyTrpSVa5G1daYSNMIzciWrZqkjfRo1EVJB+mQJS+nxRef9BJu0+Wc2z8EPWa5S0CLFFjwr21ImkyIVpa0m/F9pQnsJG6CZz+6AqoJqIJDx49uGDBMRPe4fjSkxVIsyVGiDpnA8JH1WLRJ1kQtCuRjw4mmuQnWYlGbjzB6gNiAW9QhjN7oUvmXrDBPA8D/jABOOeGFfiSa45tlXk00zj7l0H6vHC54Aoh6XyUdKx+abetQU+b/5HVOjqTrwKyoH0ln3tkMksEFBqGpFZhFxFvVkWwjXk0T3ukXyWr9Bwm3BpMAAAAASUVORK5CYII=" />
                                </svg>
                            </a>
                        </div>
                    </div> 
                    <div class="cart__content">
                        <?php if(get_field( 'installment_plan_product') != ''):?>  
                            <div class="cart__content__plan">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="24px">
                                    <image  x="0px" y="0px" width="20px" height="24px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAYCAQAAABQQhX9AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxkMDSIPrPY3AAABoUlEQVQoz4XSTUuUURTA8d+YFY1FSlIyk1RE5KLaWRgtEtwUGEULs0BaFRWK1iIIBD9AuMhNBPZCQhRR9AEiwt53QWVgNKFhYZELc4gZZ54WPTM+46Se1b3/+7+cc+85/C+avJK0ZHTLCfQspR0X6PdASuViWq2fHqJR3tnFxAuy6sAdv6xfWHzkabhKmjJULuy0Gbw2WGQdAh2lWtyIL7baYFpvhN+S1hgVr0r7LGPGD/URvtILE3M/ul/gnBrdLto4r6Q6455Z/m/z3BuxBZ/XJKcLtgu0hTAmGd6Oqymqgyat4LRZq0N0z4xR1dYac60o7hI4yGWjIagSaJXTakjKmkj6KX2V4tLhNu2TS3IS2rWUVP1VLX2+FUHCKc2+G/BOxvUin9TLCXmJyO37RhyVc1heHNTLO8Y6WZ1F7aSs3RrMeiIVpu+RUQ13jVsVim0OgH3Oh92vMlEYjm3+ROqZH7elbYnOSb9lZVKlAXntUdQla9ieEm2vl7LOFJpWiGZX7PDeY2NiNmnR4K1Ow+XVVDjipo9+m/bBDYdUzB3+BRMpcdoga9sKAAAAAElFTkSuQmCC" />
                                </svg>
                                <div class="cart__content__plan__title">Возможна рассрочка</div>
                            </div>
                        <?php endif;?>
                        <h3>Характеристики</h3>
                        <?php if(get_field('feature_product_two') != ''):?>
                            <?php echo wpautop(get_field('feature_product_two'));?>
                        <?php else:?>
                            <small>Информация отсутствует</small>
                        <?php endif;?>
                    </div>
                    <div class="cart__content">
                        <h3>Информация о доставке</h3>
                        <div class="cart__content__box">
                            <div class="cart__content__circle">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22px" height="26px">
                                    <image  x="0px" y="0px" width="22px" height="26px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAaCAQAAAAZf2TLAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxkMFjEiJHxzAAABSklEQVQ4y42Tu0oDQRiFz65FoiQrGAMWFoIPIFgIYi82gkqCgpVYiLXEV8hTWNkI4oU0vkKCCGoVBW0UK4OXEAQDfhZhk/l3TdYz1T/nYy7/nPGQo4w2tKwZBZI+daOKjtRyfMLhsUuDqF7ZwQuZEE1zSj8dk3JhnwqDdIbfg/dJ0l4I52kmwk3yyJe0rYxz40etKVBWRd2bPm11unHprPDAWLc/OeqOU0VimLYztYqcUXCcb1Ji2pwta+Bx4035GnafUJ6p2qZK+3o3E4umWjLVh/B4c7a6I+dc8NlxGnhCnJuT1SmQY5R1g8JJ51EK/EcrHdjnOhG9xQ+zsWB6HVebeTeipYFwyeZZHPRFD6PhF2mqf6JXjMRhMcFTDH1hskfIZGGWlkG/mHN9C4siPw68ad0oLMpdtBz14nD4eS8YSoZFQI0aQdz5BdSY/G8khmffAAAAAElFTkSuQmCC" />
                                </svg>
                            </div>
                            <p>Информация касатально доставки, если будет таковая <a class="cart__content__box__link" href="#">с переходом на страницу с просчетом</a></p>
                        </div>
                    </div>
                    <div class="cart__content">
                        <?php if(get_field('content_before_cart_btn_product') != ''):?>
                            <p class="cart__content_pb"><?echo the_field('content_before_cart_btn_product');?></p>
                        <?php endif;?>
                        <button class="cart__content__btn">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="16px">
                                <image  x="0px" y="0px" width="16px" height="16px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxkMBi185zJtAAAApUlEQVQoz4XRvQnCUBTF8VO4gEWyjRap1CJuETJG7BwhjS4gjvCcIKI4gdVDO8HCCCF/C78i3Ifc5sLvFAeOkHkD9lxZE9k8pmZByo5ViM9U9JlysXlGxIGKJVubhYg4UTP85RE35q+/4E6K/nA3YPI3EOB3IMjPQPJpLgpqJt3iQjhaMpuRiGkoacgsRiLH06OktRgJh8fT4Eis4cSRDTlxYHY9AKI6O1GOoa5FAAAAAElFTkSuQmCC" />
                            </svg>
                            <p>Заполнить форму для индивидуального просчета</p>
                        </button>
                    </div> 
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>
<?$array_id = $product->get_upsell_ids();
if($array_id != []):?>
    <section class="catalog">
        <div class="wrapper">
            
            <h2 class="section-head">С этим покупают</h2>
            <div class="benefits-box">
                <?
                    foreach ($array_id as $product_id):
                        $product = wc_get_product( $product_id );?>
                        <div class="benefits__column">
                            <a href="<?php echo $product->get_slug(); ?>" class="benefits__column__link">
                                <div class="catalog__cover" style="background-image: url(<?php echo wp_get_attachment_url( $product->get_image_id() ); ?>);"></div>
                            </a>
                            <a href="<?php echo $product->get_slug(); ?>" class="catalog__title"><?php echo mb_strimwidth($product->get_name(), 0, 60, '...'); ?></a>
                            <div class="catalog__footer">
                                <p class="catalog__footer__price"><?php echo $product->get_regular_price(); ?><span>BYN</span></p>
                                <a href="?add-to-cart=<?php echo $product_id; ?>" data-quantity="1" class="catalog__circle button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $product_id; ?>" data-product_sku="" aria-label="Добавить &quot;Бор&quot; в корзину" rel="nofollow" style="text-decoration: none !important;">
                                    <svg class="topweek__basket__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <image  x="0px" y="0px" width="26px" height="22px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAWCAQAAAB0gUQ+AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxYNEhPKiYLyAAABMUlEQVQ4y43TPUvDUBTG8X+qVOrLkMFinesbqJU6SBeHTi5ufgEduoi4+R0cxdlPISgouLbSRSyUIjhaOvgSXaSV5nEowSQ3Jjlnugd+Oc+FG0vT7JEF+lzyTrpSVa5G1daYSNMIzciWrZqkjfRo1EVJB+mQJS+nxRef9BJu0+Wc2z8EPWa5S0CLFFjwr21ImkyIVpa0m/F9pQnsJG6CZz+6AqoJqIJDx49uGDBMRPe4fjSkxVIsyVGiDpnA8JH1WLRJ1kQtCuRjw4mmuQnWYlGbjzB6gNiAW9QhjN7oUvmXrDBPA8D/jABOOeGFfiSa45tlXk00zj7l0H6vHC54Aoh6XyUdKx+abetQU+b/5HVOjqTrwKyoH0ln3tkMksEFBqGpFZhFxFvVkWwjXk0T3ukXyWr9Bwm3BpMAAAAASUVORK5CYII=" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    <?endforeach;
                ?>
            </div>
        </div>
    </section>
<?endif;?>
<section id="popup" class="popup">
    <a href="#" class="popup__area"></a>
    <div class="popup__body">
        <div class="popup__content">
            <div class="popup__header">
                <button class="popup__header_close">
                    <svg class="close-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                        <path d="M 9.15625 6.3125 L 6.3125 9.15625 L 22.15625 25 L 6.21875 40.96875 L 9.03125 43.78125 L 25 27.84375 L 40.9375 43.78125 L 43.78125 40.9375 L 27.84375 25 L 43.6875 9.15625 L 40.84375 6.3125 L 25 22.15625 Z"></path>
					</svg>
                </button>
                <div class="popup__title">Индивидуальный просчет</div>
            </div>
            <div class="popup__text">
                <form class="ajax__form" method="post" id="ajax__form">
                    <div class="form__group">
                        <input type="text" class="form__group_text" required="required" id="modalname" name="modalname" value="" placeholder="Ваше имя*">
                    </div>
                    <div class="form__group">
                        <input type="text" class="form__group_text" required="required" id="modalphone" name="modalphone" value="" placeholder="Номер телефона*">
                    </div>
                    <div class="form__group">
                        <textarea class="form__group_textarea" name="letter" id="messages" type="text" cols="80" rows="10" placeholder="Какой товар интересует?"></textarea>
                    </div>
                    <div class="letter__form__error letter__form__error_mt error" id="status__error"></div>
                    <div class="form__group">
                        <button id="product-send" class="form__btn" type="submit">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php get_footer();?>