<?php get_header(); ?>

<section itemscope itemtype="http://schema.org/Article">


    <?php
    get_template_part('tp-breadcrumbs');
    ?>


    <?php

    $category = get_category(get_query_var('cat'));
    $cat_id = $category->cat_ID;

    if ($cat_id == 3) {
        get_template_part('category-gold');
    } else if ($cat_id == 6) {

        get_template_part('category-news');
    } else if ($cat_id == 7) {

        get_template_part('category-actual');
    }



    ?>

</section>

<?php get_footer(); ?>