<?php
/*
Template Name: Оплата и доставка
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
        <div class="information__box">
            <div class="information__items">
                <strong class="information__title">Время</strong>
            </div>
            <div class="information__items information__items_content">
                <p>Если Вы хотите сделать своим любимым и близким приятный сюрприз - оформите доставку цветов на нашем сайте. Курьер быстро доставит цветы и цветочные композиции любого объёма прям до двери квартиры или учреждения.</p>
                <p>Приём заявок на сайте осуществляется круглосуточно. После оформления в течение рабочего дня в максимально краткий срок с Вами свяжется менеджер для уточнения деталей заказа. Доставка по городу Гродно осуществляется в рабочее время с 9.00 до 21.00. Стоимость доставки после окончания рабочего дня оговаривается с клиентом индивидуально.</p>
                <p>В воскресенье доставка выполняется с 9.00 до 19.00. Доставка в учреждения здравоохранения временно осуществляется только до шлагбаума.При отсутствии понравившегося товара в магазине, с вами свяжется менеджер для обсуждения замены. При невозможности связаться, заказ отменяется с полным возвратом денег.</p>
                <p>Просьба в праздничные дни, в связи с большой загруженностью, оставлять заказ на доставку не менее чем за 2 часа до предполагаемого момента вручения. Доставка может немного смещаться по времени. Взамен мы гарантируем, что Ваши близкие получат только качественные и свежие цветы.</p>
            </div>
        </div>
        <div class="information__box">
            <div class="information__items">
                <strong class="information__title">Стоимость</strong>
            </div>
            <div class="information__items information__items_content">
                <p>Доставка цветов в районе города Гродно бесплатная при заказе от 50 рублей на один адрес, за исключением акционных товаров. Если Вам нужно доставить цветы по разным адресам, стоимости доставок не суммируются. При заказе менее 50 рублей, свяжитесь с нами для обсуждения деталей доставки.</p>
            </div>
        </div>
        <div class="information__box">
            <div class="information__items">
                <strong class="information__title">Срок доставки</strong>
            </div>
            <div class="information__items information__items_content">
                <p>В случае, если в каталоге на сайте Вы не нашли желаемые цветы или цветочные композиции, то есть возможность заказа за 7 дней до предполагаемого момента вручения.</p>
            </div>
        </div>
        <div class="information__box" id="delivery-time">
            <div class="information__items">
                <strong class="information__title">Свое производство</strong>
            </div>
            <div class="information__items information__items_content">
                <p>В случае, если в каталоге на сайте Вы не нашли желаемые цветы или цветочные композиции, то есть возможность заказа за 7 дней до предполагаемого момента вручения.</p>
            </div>
        </div>
        <div class="information__box" id="installment-payment">
            <div class="information__items">
                <strong class="information__title">Рассрочка платежа</strong>
            </div>
            <div class="information__items information__items_content">
                <p>В случае, если в каталоге на сайте Вы не нашли желаемые цветы или цветочные композиции, то есть возможность заказа за 7 дней до предполагаемого момента вручения.</p>
            </div>
        </div>
        <div class="information__box" id="quality-assurance">
            <div class="information__items">
                <strong class="information__title">Гарантия качества</strong>
            </div>
            <div class="information__items information__items_content">
                <p>Вся информация о платёжных карточках наших клиентов конфидециальна и не подлежит разглашению. Мы заботимся о Вашей безопасности.</p>
            </div>
        </div>
        <div class="information__box">
            <div class="information__items">
                <strong class="information__title">Возврат товара</strong>
            </div>
            <div class="information__items information__items_content">
                <p>При необходимости возврата товара, каждый случай рассматривается в индивидуальном порядке в течение 3-х рабочих дней.</p>
            </div>
        </div>
        <div class="information__box">
            <div class="information__items">
                <strong class="information__title">Возврат денег</strong>
            </div>
            <div class="information__items information__items_content">
                <p>При необходимости возврата денежных средств, каждый случай рассматривается в индивидуальном порядке в течение 3-х рабочих дней.</p>
                <p>Имеется возможность отмены заказа и возврата товара и/или денег до момента оказания услуги/доставки товара в течение 3-х рабочих дней.</p>
                <p>«Если товар был оплачен банковской картой через сайт, то возврат осуществляется на карту, с которой была произведена оплата. Срок поступления денежных средств на карту — от 1 до 30 дней с момента осуществления возврата Продавцом».</p>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
?>