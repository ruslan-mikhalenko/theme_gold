<?php get_header(); ?>

<section itemscope itemtype="http://schema.org/Article">
    <?php
    get_template_part('tp-breadcrumbs');
    ?>



    <?php
    $categories = get_the_category();
    $category_id = $categories[0]->cat_ID;
    ?>


    <?php the_post(); ?>


    <?php

    if ($category_id == 3) {

        get_template_part('single-gold');
    } else if ($category_id == 6) {

        get_template_part('single-news');
    } else if ($category_id == 7) {

        get_template_part('single-actual');
    }

    ?>


</section>


<?php get_footer(); ?>