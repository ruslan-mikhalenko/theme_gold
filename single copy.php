<?php get_header(); ?>

<?php
get_template_part('tp-breadcrumbs');
?>


<?php the_post(); ?>


<section id="ori-blog-details" class="ori-blog-details-section position-relative">
    <div class="container">
        <div class="ori-blog-details-content">
            <div class="row">
                <div class="col-lg-8">
                    <div class="ori-blog-details-text-wrapper">
                        <div class="ori-blog-feed-item">
                            <div class="ori-blog-img">
                                <?php the_post_thumbnail('post_thumb1') ?>
                            </div>

                            <div class="ori-blog-text pera-content">
                                <div class="blog-meta text-uppercase">
                                    <a class="blog-cate" href="blog.html"><i class="fas fa-file"></i> business</a>
                                    <a class="blog-author" href="blog.html"><i class="fas fa-user"></i> orixy</a>
                                    <a class="blog-date" href="blog.html"><i class="fas fa-calendar-alt"></i><?php the_date('Y-m-d'); ?></a>
                                    <a class="blog-comment" href="#"><i class="fas fa-comment"></i> 05</a>
                                </div>
                                <h3>How to Optimise and Webinar to Earn Leads</h3>
                                <p>Research by American Marketing Association states that 60% of marketers include webinars in their marketing strategy. A survey by Curata also backs the importance of webinars where 79% of buyers are ready to share their contact details in exchange for webinar access.</p>
                                <p>Marketing refers to any activities that a company uses to promote its products and services and improve its market share. In order to be successful, marketing requires a combination of advertising savvy, sales, and the ability to deliver goods to end-users. This is normally undertaken by specific professionals or marketers who can work internally (for companies) or externally with other marketing firms.Email was a popular marketing tool in the early days of digital marketing. That focus shifted to search engines like Netscape, which allowed businesses to tag and keyword stuff to get themselves noticed. The development of sharing sites like Facebook made it possible for companies to track data to cater to consumer trends. </p>
                                <blockquote>
                                    Our office is something we are pleased with. We consider it the little magnet; it is wanting to come here and afterward difficult to leave it.
                                    <span>-Hahimlam Dirat</span>
                                </blockquote>
                                <p>Marketers like webinars for several reasons. Webinars represent a kind of “live” content that is dynamic and interactive. They provide an engagement experience for the audience that is more personal than fixed, highly polished content. There is something more genuine about a live presenter answering real questions in the course of a presentation. Also, through their multimedia capabilities, webinars provide a richer, more memorable experience for the audience. And finally, webinars create opportunities for marketers to gauge audience reaction.</p>
                            </div>
                        </div>
                        <div class="ori-portfolio-details-tag-share d-flex justify-content-between align-items-center">
                            <div class="ori-portfolio-details-tag">
                                <a href="blog.html">design</a>
                                <a href="blog.html">technology</a>
                                <a href="blog.html">wordpress</a>
                            </div>
                            <div class="ori-portfolio-details-share">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                        <div class="ori-blog-details-author d-flex align-items-center">
                            <div class="author-img">
                                <img src="/wp-content/themes/gold/assets/img/blog/bda1.jpg" alt="">
                            </div>
                            <div class="author-text pera-content">
                                <h3>About Michael</h3>
                                <p>Supported substance consolidates parts of web based promoting and substance showcasing. It includes making substance, for example.</p>
                                <div class="author-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="ori-single-details-prev-next-btn  d-flex align-items-center justify-content-between">
                            <div class="ori-single-prev-btn text-uppercase">
                                <a href="#"><img src="/wp-content/themes/gold/assets/img/vector/prev.png" alt=""> previous</a>
                            </div>
                            <div class="ori-single-next-btn text-uppercase">
                                <a href="#">next <img src="/wp-content/themes/gold/assets/img/vector/next.png" alt=""></a>
                            </div>
                        </div>



                        <div class="ori-recent-portfolio-area">
                            <h3>Related Projects</h3>
                            <div class="ori-recent-portfolio-item-area">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="ori-portfolio-item position-relative">
                                            <div class="portfolio-img">
                                                <img src="/wp-content/themes/gold/assets/img/service/ser1.png" alt="">
                                            </div>
                                            <div class="portfolio-text">
                                                <span class="port-category text-uppercase"><a href="blog.html">Web design</a></span>
                                                <h3><a href="blog-single.html">Effective solution For Your Business</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ori-portfolio-item position-relative">
                                            <div class="portfolio-img">
                                                <img src="/wp-content/themes/gold/assets/img/service/ser2.png" alt="">
                                            </div>
                                            <div class="portfolio-text">
                                                <span class="port-category text-uppercase"><a href="blog.html">Web design</a></span>
                                                <h3><a href="blog-single.html">Effective solution For Your Business</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                    </div>


                </div>
            </div>

        </div>
    </div>
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

<?php get_footer(); ?>