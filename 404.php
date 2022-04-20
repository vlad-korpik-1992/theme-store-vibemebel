<?php

get_header();
?>
<section class="breadcrumbs">
  <div class="wrapper">
    <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
  </div>
</section>
<section class="error-page">
	<div class="wrapper">
		<div class="error-page__inner">
			<h1 class="error-page__title">404</h1>
			<h2 class="error-page__subtitle">Ой! Эта страница не может быть найдена.</h2>
			<a class="error-page__link" href="https://edelweys.milkers.by/">Перейти на главную</a>
		</div>
	</div>
</section>
<?php
get_footer();
