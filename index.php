<?php get_header() ?>








<?php

if (is_front_page()) {


	get_template_part('tp-slider-main');

	get_template_part('tp-center-main');
} else {

	get_template_part('tp-breadcrumbs');
	get_template_part('tp-center-page');
}

?>













<?php get_footer() ?>