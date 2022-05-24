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
                <a class="privilege__column" href="<?php echo get_page_link(152)?>#delivery-time">
                    <div class="benefits__column__inner">
                        <div class="benefits__column__circle">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="60px">
                                <image  x="0px" y="0px" width="64px" height="60px"  xlink:href="data:img/png;base64,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" />
                            </svg>
                        </div>
                        <h3 class="benefits__column__title"><? the_field('benefits_home_title_one', 9);?></h3>
                        <p class="benefits__column__text"><?php the_field('benefits_home_text_one', 9)?></p>
                    </div>
                </a>
                <a class="privilege__column" href="<?php echo get_page_link(152)?>#installment-payment">
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
                <a class="privilege__column" href="<?php echo get_page_link(152)?>#quality-assurance">
                    <div class="benefits__column__inner">
                        <div class="benefits__column__circle">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48px" height="64px">
                                <image  x="0px" y="0px" width="48px" height="64px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAABACAQAAAD2KTzNAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmBRgPLDEyN46WAAAE50lEQVRYw+3YW2yVVRYH8F8PjGgpUoyXIRVHDDiKiXJp5xLGB9vEjAz18tDEBGliTdFiQhM1wQkvDYo4DNHMxBenE0LkwVu0ccRgRAMKRhiMOhMEbEC0iAoaERjAoHbPQ3e/fqfn0u9AfXP1od9ee6//f++19l5nr012GetOvXrdaWwFVhklp8VHQvzbb5Exowc+1kK7InSfvvi1y8LRWEmNDvsi5BeWGGecJb6Imn3uMf7Mwad73LcR6qD7VCc91e5zMPYc8ZjplULXWmSL/tQ8xxWMGafDx3FEvy3a1WaBvshd/uVUYviam+VKjh7jFhuTiZzykjYXFR+aU2+ZrX5Idkqfla7KtN6rPOpAYveDrZapT0+r2TqHkgHBl/6hsei8ayy2WE3RCTbpzkM5ZJ350JRS7rTK3BIumaDTl4Lga10mlfDDXKvsTCE20iYIXtZuSkknTPVXR1NmwVGrXF5y/BTtXhYEbYMEl5UYWqVJTxKZ97Ro8X7i7R5NqkpYXjYywXTL7U/mvMm8CFZlns2ptLHctEoJfu1B2xOIk7pdWwBwnX86mWznbZa6MhvB/CTvBME2i0sEFCZZnJpIsMufRiYYhP/QclfLIjM8lFjtGpngU8GWjNBpudoWwafDCYrv+V67KybYrbeYOlcpTqXyM8HPBMNkms02F808JaWSi0fO0+rxvDn6f4oVtKoHMy38KVxU7WEcdBArUleYs3ZRTpPfqNegDsuwVp1eO7zr394YyVkjE7zij8n3DutwrwZ16tyKDeadHcH4CL/fDjs8pR/ztWrQYCpuUu1keQeUlxPWg9fdbrXD4LDVbvc6WF8ePkuQF3gP7VbkaR/Rjv9qHcl8ZIJj5tmLP5uV6GZ7EHvd6MjZE3DIUnBeojkXLHVoZONsJ/li0Od8C7FOX0o7KgRTEHRqNxErdAuqytwEKyaoQ5UHYmti/KrLYpotVfTF/29p1uytYdpRWMFK41VbaztY77fucNzK0SM45f689vZIlclFA8lq6I7czxnWwGMQktYAYn/OcTAh6fhMxvAVyKX4NmnVgqM534BfJh37MCd1qLJKtTnYmbQvAUdyUTWUBl7AJG0VE7SpxdNJezb4kIHr7oaUJ/cJTphZEfwsJwR7U9v+VcH+gc8nBKdT9e31vhccsyAz/ALHBaf9IeWg7wV/H2jMFQQPpww6YlW2KcM6ZtoUK7a7U9pHBMHvB5tvC47m7Z3GWLL+qDuGq5hcotuPsbZuTOkvdUywdUgxUCtvyKsYaz3qO0HwP10xQaflFzrjU8lpT7ow1ZPzqiC4IT18jSD4yzCQ6Z5LHhZa8+ib7Y09G10zzGq1IOjOV06MVdaKgrq30X8i1Dt+B2YlRezugjtFlZWxwjt/+JIv97kgeLHgh2SsDl8lERn0+lc6CjLZxXri69KvioXsCnuiaXtBNhqKSDGvwxjtcRq7TS21Ky7wbIT4ID9EeREp9Do3+CBaPlOmrga3+SQO7SlyUW/QUKCbFh0TfOI2GeQcnfFt5bS/mVh2bI2u+D52QlclKXKyJ+Np/lpnid+HnNZ4HPs9V/K9pozM9mbyQHBTGa9vH0oJlUtz8mq60YyU1wcP4IFhB/AMJD8itWp0pVJI5T9MRWWyNfF4HXY4Hrk1Jo8O+KAMRSTYdjZeLyct9tijpRKT/wOPCiqNCSwQHQAAAABJRU5ErkJggg==" />
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