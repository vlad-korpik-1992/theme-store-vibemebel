<!DOCTYPE html>
<html lang="ru">
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title("", true); ?></title>
</head>

<body>
<header class="header">
    <div class="wrapper">
        <div class="header__box">
            <div class="header__logo">
                <img class="header__logo__img" src="<?php bloginfo('template_url'); ?>/assets/img/logo.png" alt="На Главную">
            </div>
            <nav class="menu">
                <ul class="menu__list">
                    <li class="menu__list__items">
                        <a class="menu__list__link" href="<?php echo get_page_link(132)?>">Каталог</a>
                        <?php
                            $categories = get_categories( [
                            'taxonomy'     => 'product_cat',
                            'orderby'      => 'name',
                            'order'        => 'ASC'
                        ]);
                        if($categories != []):?>
                            <div class="menu__inside">
                            <?php
                                foreach ($categories as $category):?>
                                    <a class="menu__inside__link" href="/product-category/<?echo $category->slug;?>"><?php echo $category->cat_name;?></a>
                                <?endforeach;
                                wp_reset_postdata();
                            ?>
                            </div><?
                        endif;?>
                    </li>
                    <li class="menu__list__items">
                        <a class="menu__list__link" href="<?php echo get_page_link(19)?>">Акции и скидки</a>
                    </li>
                    <li class="menu__list__items">
                        <a class="menu__list__link" href="<?php echo get_page_link(152)?>">Доставка и оплтата</a>
                    </li>
                    <li class="menu__list__items">
                        <a class="menu__list__link" href="<?php echo get_page_link(200)?>">Сотрудничество</a>
                    </li>
                    <li class="menu__list__items">
                        <a class="menu__list__link" href="<?php echo get_page_link(15)?>">Блог</a>
                    </li>
                    <li class="menu__list__items">
                        <a class="menu__list__link" href="<?php echo get_page_link(39)?>">Контакты</a>
                    </li>
                    <li class="menu__list__items">
                        <a class="menu__list__link" href="<?php echo get_page_link(48)?>">О нас</a>
                    </li>
                    <a href="<?php echo get_page_link(109)?>" class="header__basket">
                        <?$items_count = WC()->cart->get_cart_contents_count();?>
                        <div id="mini-cart-count"><?php echo $items_count ? $items_count : '0'; ?></div>
                        <svg class="topweek__basket__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <image  x="0px" y="0px" width="26px" height="22px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAWCAQAAAB0gUQ+AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxYNEhPKiYLyAAABMUlEQVQ4y43TPUvDUBTG8X+qVOrLkMFinesbqJU6SBeHTi5ufgEduoi4+R0cxdlPISgouLbSRSyUIjhaOvgSXaSV5nEowSQ3Jjlnugd+Oc+FG0vT7JEF+lzyTrpSVa5G1daYSNMIzciWrZqkjfRo1EVJB+mQJS+nxRef9BJu0+Wc2z8EPWa5S0CLFFjwr21ImkyIVpa0m/F9pQnsJG6CZz+6AqoJqIJDx49uGDBMRPe4fjSkxVIsyVGiDpnA8JH1WLRJ1kQtCuRjw4mmuQnWYlGbjzB6gNiAW9QhjN7oUvmXrDBPA8D/jABOOeGFfiSa45tlXk00zj7l0H6vHC54Aoh6XyUdKx+abetQU+b/5HVOjqTrwKyoH0ln3tkMksEFBqGpFZhFxFvVkWwjXk0T3ukXyWr9Bwm3BpMAAAAASUVORK5CYII=" />
                        </svg>
    			    </a>
                </ul>
                <div class="menu__social">
                    <a class="menu__social__link" href="#">
                        <svg class="menu__social__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px">
                            <image  x="0px" y="0px" width="24px" height="24px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxUOLBbr1Xy3AAAB2klEQVQ4y43Uy29McRQH8M9MqyExHq1HvdM2QUoaK4mFhTALEgsbrzSRsCGN+h8kwlaErki9bSzYs5JIREIEK1JUTEvaTktbreqxmOua0Zg6d3Fzzvd7fvmd7/fek1GKBsfkNanHHPOT6jc/UPTOQ1d8ksYhI2KWZ1wHZHDAbRnvXfNC0ajJPyeplZPTqt1GdLrAIkPCXXNVixpdwndrOSn0mleFfMJT+9V4LpzhnnDuL0qtVdaYk2SDwmucEh5nNeNlGXmlLp999MGAbk24bsINvEIzvcLulL7V5wpthu1KsTZhkoKQT0qN+oWCQxbK2eulMKwlQVuFab4IO5LSeaFPY3pmzhvhVpJtEIIhYbuSJ33CkYrx9wijiYYtpYavwjZQL4QVFQ11fgobwTohsmVg5p9OlCFZU6hN9O7HzgpqXtaYd4k7mDl0j2UpfYE3ws0kW1+aoU+kWi9PZD1soZx9embIOsXHv4zrrzCuWHbFNmEiawhL0uITW3QZBCO6bfEgxZZigPvC2aof3+/oFB6VXu9n+RtKej4TTrNYUbijriq9xkVh3OoMDrol462rXij4CUZNyyWmNdqk3WZ0uFTq/58lMOp4uekNjspr0qB8zYyZ8HvNXFaAX2ozzspQK80eAAAAAElFTkSuQmCC" />
                        </svg>
                    </a>
                    <a class="menu__social__link" href="#">
                        <svg class="menu__social__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px">
                            <image  x="0px" y="0px" width="24px" height="24px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxUOLBbr1Xy3AAAB2klEQVQ4y43Uy29McRQH8M9MqyExHq1HvdM2QUoaK4mFhTALEgsbrzSRsCGN+h8kwlaErki9bSzYs5JIREIEK1JUTEvaTktbreqxmOua0Zg6d3Fzzvd7fvmd7/fek1GKBsfkNanHHPOT6jc/UPTOQ1d8ksYhI2KWZ1wHZHDAbRnvXfNC0ajJPyeplZPTqt1GdLrAIkPCXXNVixpdwndrOSn0mleFfMJT+9V4LpzhnnDuL0qtVdaYk2SDwmucEh5nNeNlGXmlLp999MGAbk24bsINvEIzvcLulL7V5wpthu1KsTZhkoKQT0qN+oWCQxbK2eulMKwlQVuFab4IO5LSeaFPY3pmzhvhVpJtEIIhYbuSJ33CkYrx9wijiYYtpYavwjZQL4QVFQ11fgobwTohsmVg5p9OlCFZU6hN9O7HzgpqXtaYd4k7mDl0j2UpfYE3ws0kW1+aoU+kWi9PZD1soZx9embIOsXHv4zrrzCuWHbFNmEiawhL0uITW3QZBCO6bfEgxZZigPvC2aof3+/oFB6VXu9n+RtKej4TTrNYUbijriq9xkVh3OoMDrol462rXij4CUZNyyWmNdqk3WZ0uFTq/58lMOp4uekNjspr0qB8zYyZ8HvNXFaAX2ozzspQK80eAAAAAElFTkSuQmCC" />
                        </svg>
                    </a>
                    <a class="menu__social__link" href="#">
                        <svg class="menu__social__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px">
                            <image  x="0px" y="0px" width="24px" height="24px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxUOLBbr1Xy3AAAB2klEQVQ4y43Uy29McRQH8M9MqyExHq1HvdM2QUoaK4mFhTALEgsbrzSRsCGN+h8kwlaErki9bSzYs5JIREIEK1JUTEvaTktbreqxmOua0Zg6d3Fzzvd7fvmd7/fek1GKBsfkNanHHPOT6jc/UPTOQ1d8ksYhI2KWZ1wHZHDAbRnvXfNC0ajJPyeplZPTqt1GdLrAIkPCXXNVixpdwndrOSn0mleFfMJT+9V4LpzhnnDuL0qtVdaYk2SDwmucEh5nNeNlGXmlLp999MGAbk24bsINvEIzvcLulL7V5wpthu1KsTZhkoKQT0qN+oWCQxbK2eulMKwlQVuFab4IO5LSeaFPY3pmzhvhVpJtEIIhYbuSJ33CkYrx9wijiYYtpYavwjZQL4QVFQ11fgobwTohsmVg5p9OlCFZU6hN9O7HzgpqXtaYd4k7mDl0j2UpfYE3ws0kW1+aoU+kWi9PZD1soZx9embIOsXHv4zrrzCuWHbFNmEiawhL0uITW3QZBCO6bfEgxZZigPvC2aof3+/oFB6VXu9n+RtKej4TTrNYUbijriq9xkVh3OoMDrol462rXij4CUZNyyWmNdqk3WZ0uFTq/58lMOp4uekNjspr0qB8zYyZ8HvNXFaAX2ozzspQK80eAAAAAElFTkSuQmCC" />
                        </svg>
                    </a>
                    <a class="menu__social__link" href="#">
                        <svg class="menu__social__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px">
                            <image  x="0px" y="0px" width="24px" height="24px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAQAAABKfvVzAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQfmAxUOLBbr1Xy3AAAB2klEQVQ4y43Uy29McRQH8M9MqyExHq1HvdM2QUoaK4mFhTALEgsbrzSRsCGN+h8kwlaErki9bSzYs5JIREIEK1JUTEvaTktbreqxmOua0Zg6d3Fzzvd7fvmd7/fek1GKBsfkNanHHPOT6jc/UPTOQ1d8ksYhI2KWZ1wHZHDAbRnvXfNC0ajJPyeplZPTqt1GdLrAIkPCXXNVixpdwndrOSn0mleFfMJT+9V4LpzhnnDuL0qtVdaYk2SDwmucEh5nNeNlGXmlLp999MGAbk24bsINvEIzvcLulL7V5wpthu1KsTZhkoKQT0qN+oWCQxbK2eulMKwlQVuFab4IO5LSeaFPY3pmzhvhVpJtEIIhYbuSJ33CkYrx9wijiYYtpYavwjZQL4QVFQ11fgobwTohsmVg5p9OlCFZU6hN9O7HzgpqXtaYd4k7mDl0j2UpfYE3ws0kW1+aoU+kWi9PZD1soZx9embIOsXHv4zrrzCuWHbFNmEiawhL0uITW3QZBCO6bfEgxZZigPvC2aof3+/oFB6VXu9n+RtKej4TTrNYUbijriq9xkVh3OoMDrol462rXij4CUZNyyWmNdqk3WZ0uFTq/58lMOp4uekNjspr0qB8zYyZ8HvNXFaAX2ozzspQK80eAAAAAElFTkSuQmCC" />
                        </svg>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>
