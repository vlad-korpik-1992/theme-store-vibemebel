<section class="breadcrumbs">
  <div class="wrapper">
    <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
  </div>
</section>
<section class="basket">
	<div class="wrapper">
		<h1 class="section-head">Корзина</h1>
		<?php if ( wc_get_page_id( 'shop' ) > 0 ) : ?>
			<p class="message message_m0">Корзина пуста</p>
		<?php endif; ?>
	</div>
</section>