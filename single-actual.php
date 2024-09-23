<section itemprop="articleBody" id="ori-blog-details" class="ori-blog-details-section position-relative">
    <div class="container">
        <div class="ori-blog-details-content">
            <div class="row">
                <div class="col-lg-8">
                    <div class="ori-blog-details-text-wrapper">
                        <div class="ori-blog-feed-item">
                            <div class="ori-blog-img">
                                <?php the_post_thumbnail() ?>
                            </div>
                            <!--
                            <div class="blog-meta text-uppercase">
                                <a class="blog-cate" href="blog.html"><i class="fas fa-file"></i> Актуально</a>
                                <a class="blog-author" href="blog.html"><i class="fas fa-user"></i> Gold-RF</a>
                                <a class="blog-date" href="blog.html"><i class="fas fa-calendar-alt"></i> <?php the_date();  ?></a>

                            </div>
                            -->
                            <div class="ori-blog-text pera-content my_actual">

                                <?php the_content(); ?>

                            </div>

                        </div>
                        <div class="ori-portfolio-details-tag-share d-flex justify-content-between align-items-center">
                            <div class="ori-portfolio-details-tag">
                                <a href="/kak-prodat">Как продать золото</a>
                                <a href="/skupka-zolota">Номенклатурные группы</a>
                                <a href="/kontakty">Контакты</a>
                            </div>

                        </div>





                    </div>
                </div>
                <div class="col-lg-4">

                    <div class="ori-blog-sidebar">
                        <!-- Sidebar sidebar Item -->
                        <?php
                        get_template_part('sidebar');
                        ?>
                        <!-- -->




                        <div class="ori-blog-widget gold_list">
                            <h3 class="widget-title">Новости</h3>
                            <div class="textwidget">

                                <?php $catquery = new WP_Query('cat=6&posts_per_page=5'); ?>
                                <ul>

                                    <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>

                                        <li><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?>
                                                <br>
                                                <span class="date-meta text-uppercase"><?php echo get_the_date() ?> </span>
                                            </a>

                                        </li>
                                    <?php endwhile;
                                    wp_reset_postdata();
                                    ?>
                                </ul>
                            </div>
                        </div>

                    </div>


                </div>
            </div>

        </div>
    </div>


    <?php
    get_template_part('actual_info');
    ?>



    <?php
    get_template_part('subscribe_telegram');
    ?>

    <div class="line_animation">
        <div class="line_area"></div>
        <div class="line_area"></div>
        <div class="line_area"></div>
        <div class="line_area"></div>
        <div class="line_area"></div>
        <div class="line_area"></div>
        <div class="line_area"></div>
        <div class="line_area"></div>
    </div>
</section>