<!-- Start of Blog section
	============================================= -->
<section id="ori-blog-1" class="ori-blog-section-1 position-relative" style="padding: 70px 0px 0px;">
    <div class="container">
        <div class="ori-blog-top-content-1 d-flex justify-content-between align-items-center">
            <div class="ori-section-title-1 text-uppercase wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <h2>Важно знать о <span>золоте</span></h2>
            </div>
            <div class="ori-btn-1 text-uppercase wow fadeInRight" data-wow-delay="300ms" data-wow-duration="1500ms">
                <a href="/aktualno-pro-zoloto">Смотреть всё</a>
            </div>
        </div>
        <div class="ori-blog-content-1">
            <div class="row">


                <?php $catquery = new WP_Query('cat=7&posts_per_page=3'); ?>


                <?php while ($catquery->have_posts()) : $catquery->the_post(); ?>

                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="ori-blog-inner-item">
                            <div class="blog-inner-img">
                                <?php the_post_thumbnail('post_thumb1') ?>
                            </div>
                            <div class="blog-inner-text">
                                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                                <a class="read-more text-uppercase" href="<?php the_permalink() ?>">Подробнее<i class="fal fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>


                <?php endwhile; ?>


            </div>
        </div>
    </div>

</section>