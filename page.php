<?php get_header(); ?>


<section itemscope itemtype="http://schema.org/Article">

    <?php
    get_template_part('tp-breadcrumbs');
    ?>

    <?php $slug = basename(get_permalink()); ?>





    <?php



    if ($slug == 'o-nas') {

        get_template_part('page-about');
    } else if ($slug == 'kak-prodat') {

        get_template_part('page-instructions');
    } else if ($slug == 'czeny-na-zoloto') {

        get_template_part('page-price');
    } else if ($slug == 'kontakty') {

        get_template_part('page-kontakt');
    } else if ($slug == 'kalkulyator-oczenki-stoimosti-zolota') {

        get_template_part('page-kalkulyator');
    } else {

        get_template_part('page-any');
    }



    ?>



</section>







<?php get_footer(); ?>