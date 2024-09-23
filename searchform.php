	<!-- Search PopUp -->
	<div class="search-popup">
		<button class="close-search style-two"><span class="fal fa-times"></span></button>
		<button class="close-search"><span class="fa fa-arrow-up"></span></button>
		<form class="search-form" role="search" method="get" id="searchform" action="<?php echo home_url('/') ?>">
			<div class="form-group">
				<input class="search-form__input" type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Поиск на gold-rf" autocomplete="off">
				<button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
			</div>
			<ul class="ajax-search"></ul>
		</form>
	</div>