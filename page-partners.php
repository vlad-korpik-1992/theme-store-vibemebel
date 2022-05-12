<?php
/*
Template Name: Сотрудничество
*/
get_header();
?>
<section class="breadcrumbs">
    <div class="wrapper">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
    </div>
</section>
<section class="information">
    <div class="wrapper">
        <h2 class="section-head"><?php single_post_title(); ?></h2>
        <?$partners = get_field('partners');
        if ($partners != []):
            foreach($partners as $partner) :?>
                <div class="information__box">
                    <div class="information__items">
                        <strong class="information__title"><?php echo $partner['title_partners'];?></strong>
                    </div>
                    <div class="information__items information__items_content">
                        <?php echo wpautop($partner['content_partners']);
                        if($partner['address_partners'] != '' || $partner['email_partners'] != '' || $partner['tel_parnters'] != ''):?>
                            <strong class="information__title">Контакты</strong>
                            <div class="information__contacts">
                                <div class="information__contacts__items">
                                    <address class="information__contacts__text"><? echo $partner['address_partners'];?></address>
                                </div>
                                <?if($partner['email_partners'] != '' || $partner['tel_parnters'] != ''):?>
                                    <div class="information__contacts__items">
                                        <?if($partner['email_partners'] != ''):?>
                                            <a class="information__contacts__link" href="mailto:<?echo $partner['email_partners'];?>"><?echo $partner['email_partners'];?></a>
                                        <?endif?>
                                        <?if($partner['tel_parnters'] != ''):?>
                                            <?php $phone = str_replace([' ', '(', ')', '-'], '', $partner['tel_parnters']);?>
                                            <a class="information__contacts__link" href="tel:<?echo $phone;?>"><?echo $partner['tel_parnters'];?></a>
                                        <?endif?>
                                    </div>
                                <?endif?>
                            </div>
                        <?endif;?>
                        <?if($partner['pdf_partners'] != ''):?>
                            <div class="information__footer">
                                <a class="information__btn" href="<?echo $partner['pdf_partners'];?>" download>
                                    <svg class="information__svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 102.55 122.88">
                                    <g>
                                        <path d="M102.55,122.88H0V0h77.66l24.89,26.43V122.88L102.55,122.88z M87.01,69.83c-1.48-1.46-4.75-2.22-9.74-2.29 c-3.37-0.03-7.43,0.27-11.7,0.86c-1.91-1.1-3.88-2.31-5.43-3.75c-4.16-3.89-7.64-9.28-9.8-15.22c0.14-0.56,0.26-1.04,0.37-1.54 c0,0,2.35-13.32,1.73-17.82c-0.08-0.61-0.14-0.8-0.3-1.27l-0.2-0.53c-0.64-1.47-1.89-3.03-3.85-2.94l-1.18-0.03 c-2.19,0-3.97,1.12-4.43,2.79c-1.42,5.24,0.05,13.08,2.7,23.24l-0.68,1.65c-1.9,4.64-4.29,9.32-6.39,13.44l-0.28,0.53 c-2.22,4.34-4.23,8.01-6.05,11.13l-1.88,1c-0.14,0.07-3.36,1.78-4.12,2.24c-6.41,3.83-10.66,8.17-11.37,11.62 c-0.22,1.1-0.05,2.51,1.08,3.16L17.32,97c0.79,0.4,1.62,0.6,2.47,0.6c4.56,0,9.87-5.69,17.18-18.44 c8.44-2.74,18.04-5.03,26.45-6.29c6.42,3.61,14.3,6.12,19.28,6.12c0.89,0,1.65-0.08,2.27-0.25c0.95-0.26,1.76-0.8,2.25-1.54 c0.96-1.46,1.16-3.46,0.9-5.51c-0.08-0.61-0.56-1.36-1.09-1.88L87.01,69.83L87.01,69.83z M18.79,94.13 c0.83-2.28,4.13-6.78,9.01-10.78c0.3-0.25,1.06-0.95,1.75-1.61C24.46,89.87,21.04,93.11,18.79,94.13L18.79,94.13L18.79,94.13z M47.67,27.64c1.47,0,2.31,3.7,2.38,7.17c0.07,3.47-0.74,5.91-1.75,7.71c-0.83-2.67-1.24-6.87-1.24-9.62 C47.06,32.89,47,27.64,47.67,27.64L47.67,27.64L47.67,27.64z M39.05,75.02c1.03-1.83,2.08-3.76,3.17-5.81 c2.65-5.02,4.32-8.93,5.57-12.15c2.48,4.51,5.57,8.35,9.2,11.42c0.45,0.38,0.93,0.77,1.44,1.15 C51.05,71.09,44.67,72.86,39.05,75.02L39.05,75.02L39.05,75.02L39.05,75.02z M85.6,74.61c-0.45,0.28-1.74,0.44-2.56,0.44 c-2.67,0-5.98-1.22-10.62-3.22c1.78-0.13,3.41-0.2,4.88-0.2c2.68,0,3.48-0.01,6.09,0.66C86.01,72.96,86.05,74.32,85.6,74.61 L85.6,74.61L85.6,74.61L85.6,74.61z M96.12,115.98V30.45H73.44V5.91H6.51v110.07H96.12L96.12,115.98z"></path>
                                    </g>
                                    </svg>
                                    <span>Скачать файл</span>
                                </a>
                            </div>
                        <?endif;?>
                    </div>
                </div>
            <?endforeach;
        endif?>
    </div>
</section>
<?php
get_footer();
?>