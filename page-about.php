<?php
/**
  * Template Name: О нас
*/
?>
<?php get_header();?>
<section class="breadcrumbs">
  <div class="wrapper">
    <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
  </div>
</section>
<section class="info info_about">
    <div class="wrapper">
        <h1 class="section-head"><?php single_post_title(); ?></h1>
            <div class="info__box info__box_start">
            <div class="info__box__icon">
                <img class="about__authorimg" src="<?php the_field('img_author_about');?>" alt="<?php single_post_title(); ?>">
            </div>
            <div class="info__box__text about_desc">
                <?php the_content(); ?>
                <p class="about__author"><?php the_field('author_about');?></p>
                <p class="about__profession"><?php the_field('profession_about');?></p>
            </div>
        </div>
    </div>
</section>
<section class="about">
    <div class="wrapper">
        <div class="box">
            <div class="column__half column__half_bottom">
                <img class="about__img" src="<? the_field('img_section_about_1')?>" alt="">
            </div>
            <div class="column__half column__half_bottom about__content">
                <?php the_field('text_section_about_1');?>
            </div>
            <div class="column__half column__half_bottom">
                <img class="about__img" src="<? the_field('img_section_about_2')?>" alt="">
            </div>
            <div class="column__half column__half_bottom about__content">
                <img class="about__img" src="<? the_field('img_section_about_3')?>" alt="">
            </div>
            <div class="column__half">
                <img class="about__img" src="<? the_field('img_section_about_4')?>" alt="">
            </div>
            <div class="column__half about__content">
                <?php the_field('text_section_about_2');?>
            </div>
        </div>
    </div>
</section>
<section class="benefits">
        <div class="wrapper">
            <h2 class="section-head">Наши преимущества</h2>
            <div class="benefits-box">
                <a class="privilege__column" href="<?php echo get_page_link(152)?>">
                    <div class="benefits__column__inner">
                        <div class="benefits__column__circle">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="52px">
                                <image  x="0px" y="0px" width="64px" height="52px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAA0CAQAAACQ0/aCAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxYMCxInTHFLAAADOElEQVRYw8XZT2gcZRjH8c9uk5AcjNTMbGJao2BRsIccUkQPleJNzUU8FvGkQr2oN/8iogcvohGh2KMi4j8QpQcRexKlmKKIFQSLxTZNMpM2aoul3WY8zGbd7M7YTTOz+8zhnXne9+X5zu+38+edrciL0F2GrYjEInUlRSUzO+g1TxhqyayIRGJLbe2WwbIB3rO/y/mxWCS2KBK3tF2DZQHscwTznrFgTGBCIBQaFwoEtnUFllq31GgXG6hX2gcOZEx+EJfNWsxBDoQCNbVGOy4QCFVbRgWCzNlRA+SMH31kNVuBw+5zzEy3IjbBQoFQTa3ZpopVc2bE9vsyS4Gd+GOT5UksW87IVxuKjasJmu1OowKfZZ/misTbmwbYXGzziLrEB51dIxKJZ0sGgA8lok5/doDTPQA4ges6AW7CtfwGNh834Fw/FQjJt2ChBwA1ROllOGCf3YbB/ag7UGipC4462pENEMG045LStyMm2wDOSrzFlLgH5ROJn420lB+0JvHigBeM4WWHXCjN7e1e8rA7PO6NZi5UwTILEodLK70eA36T+KolMy2ReKhqAt+XDlB3DDe2ZEIQVVWwVjoAV2x89o6DpfQyHLa9dIChtuP0fSHWoysg3Y63ALwqcVml2vUZFB0hYklqwRc+L73go/Z0AETr74Tz3ikd4N42gBqW6a8FUT8B+qzAkFEtv4EZj5Ve8tYNR4EK4nWAWbM9VqAGlvpnQQrQtGDOm6WXnPNAy1HzRpwCnHOidIDzGQr00YIQdavZq+PNx/V25fSczllj1xBJigEY9WtD0s64ZI+fchSIKMaCqdzyDJnOVWCZoiyA133Xlpkwlzt6cl2B4gC+9XFbZlfu2HvcTGpNcQDdRM1zIrc4gIve7z3AmFcae4mnnKRf94F5sw6mu8UpcHfHB6+JjjG/mBH4y5//pYoDeDonn2w4+qf900cRFpx0Jrfvoh/+f3IRCvztttxb0aqzVwNYUzW4RYTzbc+6rBiSuQSsOoW9OR+ti4sRd8r89DXgU0/a65CDVxNrCzHpeTvwSVZn4PcerQy/ybN6ytelF1/zrtGs4uve3253V/8DXFtcMu9Udte/oKLJl0EqBzcAAAAASUVORK5CYII=" />
                            </svg>
                        </div>
                        <h3 class="benefits__column__title"><? the_field('benefits_home_title_one', 9);?></h3>
                        <p class="benefits__column__text"><?php the_field('benefits_home_text_one', 9)?></p>
                    </div>
                </a>
                <a class="privilege__column" href="<?php echo get_page_link(152)?>">
                    <div class="benefits__column__inner">
                        <div class="benefits__column__circle">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="52px">
                                <image  x="0px" y="0px" width="64px" height="52px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAA0CAQAAACQ0/aCAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxYMCxInTHFLAAADOElEQVRYw8XZT2gcZRjH8c9uk5AcjNTMbGJao2BRsIccUkQPleJNzUU8FvGkQr2oN/8iogcvohGh2KMi4j8QpQcRexKlmKKIFQSLxTZNMpM2aoul3WY8zGbd7M7YTTOz+8zhnXne9+X5zu+38+edrciL0F2GrYjEInUlRSUzO+g1TxhqyayIRGJLbe2WwbIB3rO/y/mxWCS2KBK3tF2DZQHscwTznrFgTGBCIBQaFwoEtnUFllq31GgXG6hX2gcOZEx+EJfNWsxBDoQCNbVGOy4QCFVbRgWCzNlRA+SMH31kNVuBw+5zzEy3IjbBQoFQTa3ZpopVc2bE9vsyS4Gd+GOT5UksW87IVxuKjasJmu1OowKfZZ/misTbmwbYXGzziLrEB51dIxKJZ0sGgA8lok5/doDTPQA4ges6AW7CtfwGNh834Fw/FQjJt2ChBwA1ROllOGCf3YbB/ag7UGipC4462pENEMG045LStyMm2wDOSrzFlLgH5ROJn420lB+0JvHigBeM4WWHXCjN7e1e8rA7PO6NZi5UwTILEodLK70eA36T+KolMy2ReKhqAt+XDlB3DDe2ZEIQVVWwVjoAV2x89o6DpfQyHLa9dIChtuP0fSHWoysg3Y63ALwqcVml2vUZFB0hYklqwRc+L73go/Z0AETr74Tz3ikd4N42gBqW6a8FUT8B+qzAkFEtv4EZj5Ve8tYNR4EK4nWAWbM9VqAGlvpnQQrQtGDOm6WXnPNAy1HzRpwCnHOidIDzGQr00YIQdavZq+PNx/V25fSczllj1xBJigEY9WtD0s64ZI+fchSIKMaCqdzyDJnOVWCZoiyA133Xlpkwlzt6cl2B4gC+9XFbZlfu2HvcTGpNcQDdRM1zIrc4gIve7z3AmFcae4mnnKRf94F5sw6mu8UpcHfHB6+JjjG/mBH4y5//pYoDeDonn2w4+qf900cRFpx0Jrfvoh/+f3IRCvztttxb0aqzVwNYUzW4RYTzbc+6rBiSuQSsOoW9OR+ti4sRd8r89DXgU0/a65CDVxNrCzHpeTvwSVZn4PcerQy/ybN6ytelF1/zrtGs4uve3253V/8DXFtcMu9Udte/oKLJl0EqBzcAAAAASUVORK5CYII=" />
                            </svg>
                        </div>
                        <h3 class="benefits__column__title"><? the_field('benefits_home_title_two', 9);?></h3>
                        <p class="benefits__column__text"><?php the_field('benefits_home_text_two', 9)?></p>
                    </div>
                </a>
                <a class="privilege__column" href="<?php echo get_page_link(152)?>">
                    <div class="benefits__column__inner">
                        <div class="benefits__column__circle">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="52px">
                                <image  x="0px" y="0px" width="64px" height="52px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAA0CAQAAACQ0/aCAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxYMCxInTHFLAAADOElEQVRYw8XZT2gcZRjH8c9uk5AcjNTMbGJao2BRsIccUkQPleJNzUU8FvGkQr2oN/8iogcvohGh2KMi4j8QpQcRexKlmKKIFQSLxTZNMpM2aoul3WY8zGbd7M7YTTOz+8zhnXne9+X5zu+38+edrciL0F2GrYjEInUlRSUzO+g1TxhqyayIRGJLbe2WwbIB3rO/y/mxWCS2KBK3tF2DZQHscwTznrFgTGBCIBQaFwoEtnUFllq31GgXG6hX2gcOZEx+EJfNWsxBDoQCNbVGOy4QCFVbRgWCzNlRA+SMH31kNVuBw+5zzEy3IjbBQoFQTa3ZpopVc2bE9vsyS4Gd+GOT5UksW87IVxuKjasJmu1OowKfZZ/misTbmwbYXGzziLrEB51dIxKJZ0sGgA8lok5/doDTPQA4ges6AW7CtfwGNh834Fw/FQjJt2ChBwA1ROllOGCf3YbB/ag7UGipC4462pENEMG045LStyMm2wDOSrzFlLgH5ROJn420lB+0JvHigBeM4WWHXCjN7e1e8rA7PO6NZi5UwTILEodLK70eA36T+KolMy2ReKhqAt+XDlB3DDe2ZEIQVVWwVjoAV2x89o6DpfQyHLa9dIChtuP0fSHWoysg3Y63ALwqcVml2vUZFB0hYklqwRc+L73go/Z0AETr74Tz3ikd4N42gBqW6a8FUT8B+qzAkFEtv4EZj5Ve8tYNR4EK4nWAWbM9VqAGlvpnQQrQtGDOm6WXnPNAy1HzRpwCnHOidIDzGQr00YIQdavZq+PNx/V25fSczllj1xBJigEY9WtD0s64ZI+fchSIKMaCqdzyDJnOVWCZoiyA133Xlpkwlzt6cl2B4gC+9XFbZlfu2HvcTGpNcQDdRM1zIrc4gIve7z3AmFcae4mnnKRf94F5sw6mu8UpcHfHB6+JjjG/mBH4y5//pYoDeDonn2w4+qf900cRFpx0Jrfvoh/+f3IRCvztttxb0aqzVwNYUzW4RYTzbc+6rBiSuQSsOoW9OR+ti4sRd8r89DXgU0/a65CDVxNrCzHpeTvwSVZn4PcerQy/ybN6ytelF1/zrtGs4uve3253V/8DXFtcMu9Udte/oKLJl0EqBzcAAAAASUVORK5CYII=" />
                            </svg>
                        </div>
                        <h3 class="benefits__column__title"><? the_field('benefits_home_title_three', 9);?></h3>
                        <p class="benefits__column__text"><?php the_field('benefits_home_text_three', 9)?></p>
                    </div>
                </a>
            </div>
        </div>
</section>
<section class="directory">
    <div class="wrapper">
        <div class="box">
            <div class="column__half">
                <img class="directory__img" src="<? the_field('img_left_catalog')?>" alt="">
            </div>
            <div class="column__half directory_content">
                <? the_field('text_right_catalog')?>
                <a class="directory__btn" href="<?php echo get_page_link(132)?>">Перейти в каталог</a>
            </div>
        </div>
    </div>
</section>
<section class="bgimg" style="background-image: url(<? the_field('fon_img_about')?>);"></section>
<?php get_footer();?>